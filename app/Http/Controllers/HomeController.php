<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getRecommendation($id, $num)
    {
        $client = new Client();
        $response = $client->request('POST', 'http://127.0.0.1:5000/predict', [
                'headers' => [
                    'X-API-TOKEN' => 'FOOBAR1',
                    'Content-Type' => 'application/json',
                    'charset'      => 'utf-8'
                ],
                \GuzzleHttp\RequestOptions::JSON => [
                    "item" => (int) $id,
                    "num"  => (int) $num,
                ]
        ]);

        return json_decode($response->getBody()->getContents());
    }
}
