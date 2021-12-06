<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Goutte\Client;
use GuzzleHttp\Client as GuzzleHttpClient;
use voku\helper\HtmlDomParser;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TestController extends Controller
{
    public function index()
    {
        $data = [];
        $url = [];
        $arr = [];
        $buku = Buku::where('slug', "hki-satu-malam-yang-tertunda-his-greek-wedding-night-debt")->get();
        foreach ($buku as $keys => $value) {
            $url = 'https://ebooks.gramedia.com/id/' . $value->slug;
            $client = new GuzzleHttpClient();

            $response = $client->request('GET', $url, ['verify' => false]);

            $html = $response->getBody()->getContents();

            $dom = HtmlDomParser::str_get_html($html);

            // Grab Details
            $data[$keys]['image'] = $dom->findOne('#zoom img')->src;
            // foreach ($grabber_detail as $key => $row) {
            //     if ($row != "") {
            //         $data[$keys][$row->findOne('tr td')->plaintext] =  Str::after($row->findOne('tr', 1)->plaintext, ':');
            //     }
            // }

            // $data[$keys] = array_map('trim', $data[$keys]);
            // $url = 'http://medialibrary.spatie.be/assets/images/mountain.jpg';
            $value
                ->addMediaFromUrl($data[$keys]['image'])
                ->toMediaCollection();

            $arr[] = [
                'image' => $data[$keys]['image'],
            ];

            // $first_buku = Buku::where('slug', $value->slug)->first();
            // $first_buku->detail_buku()->create($arr);
        }
        return $arr;
    }

    protected function getArray(string $html)
    {
        $dom = HtmlDomParser::str_get_html($html);
        $grabber = $dom->findOne('#product_list');
        $data = [];
        foreach ($grabber as $key => $row) {
            if ($row->findOne('.desc .title')->plaintext != "") {
                $data['data'][][$key] = [
                    "judul" =>  $row->findOne('.desc .title')->plaintext,
                    "penulis" => $row->findOne('.desc .date')->plaintext,
                ];
            }
        }
        return $data;
    }

    protected function getHtml($i): string
    {
        $url[$i]  = 'https://ebooks.gramedia.com/id/buku?language=2&page=' . $i;
        $client = new GuzzleHttpClient();

        $response = $client->request('GET', $url[$i], ['verify' => false]);

        $html = $response->getBody()->getContents();

        return $html;

        // $page = 1;
        // //1864
        // $arr = [];
        // $data = [];
        // $url  = 'https://ebooks.gramedia.com/id/buku';
        // // $this->info($url);
        // $client = new GuzzleHttpClient();
        // $response = $client->request('GET', $url, ['verify' => false]);
        // $html = $response->getBody()->getContents();
        // $dom = HtmlDomParser::str_get_html($html);
        // $grabber = $dom->findOne('.selwrap .filtersel')->find('option');
        // foreach ($grabber as $elemen) {
        //     if ($elemen->value != "0") {
        //         $data['data'][] = [
        //             "name" =>  $elemen->plaintext,
        //             "slug" => $elemen->value,
        //         ];
        //     }
        // }
        // foreach ($data['data'] as $key => $item) {
        //     $arr['name'] = $item['name'];
        //     $arr['slug'] = $item['slug'];
        //     $data = Kategori::create($arr);
        // }

        // return $data;
    }
}
