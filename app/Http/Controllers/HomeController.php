<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use League\CommonMark\Extension\CommonMark\Node\Block\ListItem;

class HomeController extends Controller
{
    public function fetchData($newsApi = '/v1/cnn-news/', $type = '') {
        $client = new Client();
        $response = $client->request('GET', 'https://berita-indo-api.vercel.app'.$newsApi.$type);
        $data = json_decode($response->getBody(), true);
        return $data;
    }

    public function index()
    {
        $newsItems = $this->fetchData()['data'];
        $listType = $this->fetchData('')['listApi']['CNN News']['listType'];
        // dump($newsItems);
        // dd($listType);
        return view('home',[
            'newsItems' => $newsItems,
            'listType' => $listType
        ]);
    }

    public function category(String $type)
    {
        $newsItems = $this->fetchData('/v1/cnn-news/',$type)['data'];
        $listType = $this->fetchData('')['listApi']['CNN News']['listType'];

        // dd($newsData);
        return view('category',[
            'listType' => $listType,
            'type' => ucwords(str_replace('-',' ',$type)),
            'newsItems' => $newsItems
        ]);
    }


}
