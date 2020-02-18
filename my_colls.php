<?php
//error_reporting(E_ALL);
require "vendor/autoload.php";

use GuzzleHttp\Client;

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    'debug' => true,
    'cache' => 'templates/cache',
    array('auto_reload' => false), //debug
    ['debug' => false], //debug
]);
//debug
$twig->addExtension(new \Twig\Extension\DebugExtension());

if (@$_GET['address']) {
    $redis = new Predis\Client([
        'host'   => '127.0.0.1',
        'port'   => 6379,
        'database' => 11,
    ]);
    $redis->pipeline();

    
    $colls = json_decode($redis->get($_GET['address']));
    $colls = (is_object($colls)) ?  get_object_vars($colls) : $colls;
    $res['colls'] = $colls;

    echo $twig->render('my_colls.twig', $res);


}
