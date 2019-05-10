<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Goutte;
use Symfony\Component\DomCrawler\Crawler;
use Goutte\Client;


class scrapeDanTri extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:dantri';

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
     * @return mixed
     */
    public function handle()
    {
        $client = new Client(); 
        $guzzleclient = new \GuzzleHttp\Client([
            'timeout' => 60,
            'verify' => false,
        ]);
        $client->setClient($guzzleclient);
        $crawler = $client->request('GET', 'https://vietnam.net');
        $crawler->filter('img')->each(function ($node) {
            print($node->attr('src') . '\n');
        });
        $crawler->filter('a')->each(function ($node) {
            print($node->attr('href') . '\n');
            });
       
    }
}
