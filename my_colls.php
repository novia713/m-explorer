<?php
//error_reporting(E_ALL);
require "vendor/autoload.php";
require_once "inc/anti_xss.php";

use GuzzleHttp\Client;

if (!Leandro\Helpers::is_valid_address(@$_REQUEST['address'])) {
    die("no valid address :-/");
}

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    'debug' => true,
    'cache' => 'templates/cache',
    array('auto_reload' => false), //debug
    ['debug' => false], //debug
]);
//debug
$twig->addExtension(new \Twig\Extension\DebugExtension());

if (@$_REQUEST['address']) {
    $redis = new Predis\Client([
        'host'   => '127.0.0.1',
        'port'   => 6379,
        'database' => 11,
    ]);
    $redis->pipeline();


    $colls = json_decode($redis->get($_REQUEST['address']));
    $colls = (is_object($colls)) ?  get_object_vars($colls) : $colls;
    $res['colls'] = $colls;
    if (@$_REQUEST['card_id']) {
        $res['card_id'] = (int) $_REQUEST['card_id'];
    }

    echo $twig->render('my_colls.twig', $res);
}
