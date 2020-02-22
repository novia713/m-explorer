<?php
//error_reporting(E_ALL);
require "vendor/autoload.php";

use GuzzleHttp\Client;
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
//debug
$twig->addExtension(new \Twig\Extension\DebugExtension());

if (Leandro\Helpers::is_valid_uniqid($_SERVER['QUERY_STRING'])) {
    $redis = (new Leandro\Redis())(CARDS_DB);


    $cards = json_decode($redis->get($_SERVER['QUERY_STRING']));
    $cards = (is_object($cards)) ?  get_object_vars($cards) : $cards;
    $res['cards'] = $cards;

    print_r($cards);

    //echo $twig->render('my_coll.twig', $res);


}
