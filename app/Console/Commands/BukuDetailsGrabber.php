<?php

namespace App\Console\Commands;

use App\Models\Buku;
use Illuminate\Console\Command;
use GuzzleHttp\Client as GuzzleHttpClient;
use voku\helper\HtmlDomParser;
use Illuminate\Support\Str;


class BukuDetailsGrabber extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'grabber:details';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $buku = Buku::skip(38)->take(39)->get();
        foreach ($buku as $keys => $value) {
            $url = 'https://ebooks.gramedia.com/id/' . $value->slug;
            $client = new GuzzleHttpClient();

            $response = $client->request('GET', $url, ['verify' => false]);

            $html = $response->getBody()->getContents();

            $dom = HtmlDomParser::str_get_html($html);

            $grabber_description = $dom->findOne('.sc_1')->plaintext;

            // Grab Tanggal Rilis
            $text_after = Str::after($grabber_description, ':',);
            $data[$keys]['tgl_rilis'] = Str::before($text_after, '.');
            // Grab Discription
            $data[$keys]['description'] = Str::after($grabber_description, '.');

            // Grab Details
            $grabber_detail = $dom->findOne('.sc_2 table');
            foreach ($grabber_detail as $key => $row) {
                if ($row != "") {
                    $data[$keys][$row->findOne('tr td')->plaintext] =  Str::after($row->findOne('tr', 1)->plaintext, ':');
                }
            }

            $data[$keys] = array_map('trim', $data[$keys]);

            $arr[$keys] = [
                'tgl_rilis' => date('Y-m-d', strtotime($data[$keys]['tgl_rilis'])),
                'bahasa' => $data[$keys]['Bahasa'],
                'negara' => $data[$keys]['Negara'],
                'penerbit' => $data[$keys]['Penerbit'],
                'jumlah_halaman' => (int) isset($data[$keys]['Jumlah halaman']) ? $data[$keys]['Jumlah halaman'] : 0,
                'description' => $data[$keys]['description']
            ];

            $first_buku = Buku::where('slug', $value->slug)->first();
            $first_buku->detail_buku()->create($arr[$keys]);

            $this->info($first_buku->judul);
        }
    }
}
