<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Goutte\Client;
use GuzzleHttp\Client as GuzzleHttpClient;
use voku\helper\HtmlDomParser;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $data = [];
        $url = [];
        for ($i = 0; $i < 2 + 1; $i++) {
            $url[$i]  = 'https://ebooks.gramedia.com/id/buku?language=2&page=' . $i;
            $client = new GuzzleHttpClient();

            $response = $client->request('GET', $url[$i], ['verify' => false]);

            $html = $response->getBody()->getContents();

            $dom = HtmlDomParser::str_get_html($html);
            // echo $dom->findOne('#product_list')->text();
            $grabber = $dom->findOne('#product_list');
            foreach ($grabber as $key => $row) {
                if ($row->findOne('.desc .title')->plaintext != "") {
                    $data['data'][] = [
                        "judul" =>  $row->findOne('.desc .title')->plaintext,
                        "penulis" => $row->findOne('.desc .date')->plaintext,
                    ];
                }
            }
        }

        foreach ($data['data'] as $key => $item) {
            Buku::create([
                'judul' => $data['data'][$key]['judul'],
                'penulis' => $data['data'][$key]['penulis']
            ]);
        }
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
    }
}
