<?php
//error_reporting(E_ALL);
require "vendor/autoload.php";
require_once "inc/anti_xss.php";

use GuzzleHttp\Client;
use Leandro\Helpers as H;
// database 11 for collections
// database 12 for cards
const COLLECTIONS_DB = 11;
const CARDS_DB = 12;

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    'debug' => true,
    'cache' => 'templates/cache',
    array('auto_reload' => false), //debug
    ['debug' => false], //debug
]);

$out = [];
if (H::is_valid_uniqid($_SERVER['QUERY_STRING'])) {
    $redis = (new Leandro\Redis())(CARDS_DB);

    $client = new Client([
        'base_uri' => 'https://ws.marble.cards',
        'timeout' => 10,
        'connect_timeout' => 10
      ]);

    $cards = json_decode($redis->get($_SERVER['QUERY_STRING']));
    $cards = (is_object($cards)) ?  get_object_vars($cards) : $cards;

  
    foreach ($cards as $card) {
        $headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application'
        ];
        $body = ["nft_id" => $card];

        $data = (new Leandro\HttpClient())($client, $headers, $body, 2);
        $out[] = get_object_vars(json_decode($data));
    }

    $res['cards'] = $out;
    $res['coll_id'] = $_SERVER['QUERY_STRING'];

    echo $twig->render('d.twig', $res);


}
