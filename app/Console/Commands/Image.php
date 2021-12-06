<?php

namespace App\Console\Commands;

use App\Models\Buku;
use Illuminate\Console\Command;
use GuzzleHttp\Client as GuzzleHttpClient;
use voku\helper\HtmlDomParser;
use Illuminate\Support\Str;

class Image extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'grabber:image';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This get image grammedia';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $data = [];
        $url = [];
        $arr = [];
        $i = 1;
        $buku = Buku::take(37309)->get();
        foreach ($buku as $keys => $value) {
            try {
                $url = 'https://ebooks.gramedia.com/id/buku/' . $value->slug;
                $client = new GuzzleHttpClient();

                $response = $client->request('GET', $url, ['verify' => false]);

                $html = $response->getBody()->getContents();

                $dom = HtmlDomParser::str_get_html($html);

                $data[$keys]['image'] = $dom->findOne('#zoom img')->src;

                $value
                    ->addMediaFromUrl($data[$keys]['image'])
                    ->toMediaCollection();

                $this->info("[" . $i++ . "]" . $value->judul);
            } catch (\Throwable $th) {
                continue;
            }
        }
    }
}
