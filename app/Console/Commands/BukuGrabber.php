<?php

namespace App\Console\Commands;

use App\Models\Buku;
use Illuminate\Console\Command;
use GuzzleHttp\Client as GuzzleHttpClient;
use voku\helper\HtmlDomParser;
use Illuminate\Support\Str;

class BukuGrabber extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'grabber:buku';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Grab Info Buku';

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
        $page = 0;
        //1864
        $arr = [];
        $data = [];
        for ($i = $page; $i < 1866  + 1; $i++) {
            $url[$i]  = 'https://ebooks.gramedia.com/id/buku?language=2&page=' . $i;
            $this->info($url[$i]);
            $client = new GuzzleHttpClient();
            $response = $client->request('GET', $url[$i], ['verify' => false]);
            $html = $response->getBody()->getContents();
            $dom = HtmlDomParser::str_get_html($html);
            $grabber = $dom->findOne('#product_list');
            foreach ($grabber as $key => $row) {
                if ($row->findOne('.desc .title')->plaintext != "") {
                    $data['data'][] = [
                        "judul" =>  $row->findOne('.desc .title')->plaintext,
                        "slug" => $row->findOne('.desc a')->href,
                        "penulis" => $row->findOne('.desc .date')->plaintext,
                    ];
                }
            }
        }

        foreach ($data['data'] as $key => $item) {
            $arr['judul'] = $item['judul'];
            $arr['slug'] = Str::afterLast($item['slug'], '/');
            $arr['penulis'] = $item['penulis'];
            $data = Buku::create($arr);
        }
        // $this->info($data->judul);
    }
}
