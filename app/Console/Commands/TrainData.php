<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Client;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ListingExport;

class TrainData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'train:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Take data from database , convert it into csv and train them';

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
     * @return mixed
     */
    public function handle()
    {
        //
        Excel::store(new ListingExport(), 'public/listing-data.csv');


        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, "http://127.0.0.1:5000/train");
        // $headers = [
        //     'X-API-TOKEN' => 'FOOBAR1',
        //     'Content-Type' => 'application/json',
        //     'charset'      => 'utf-8'
        // ];
        // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        // $response = curl_exec($ch);

        $client = new Client();
        $response = $client->request('GET', 'http://127.0.0.1:5000/train', [
                'headers' => [
                    'X-API-TOKEN' => 'FOOBAR1',
                    'Content-Type' => 'application/json',
                   'charset'      => 'utf-8'
                ]
        ]);

        return $response;
    }
}
