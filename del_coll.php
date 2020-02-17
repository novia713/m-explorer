<?php
//error_reporting(E_ALL);
require "vendor/autoload.php";

use GuzzleHttp\Client;

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    'cache' => 'templates/cache',
    array('auto_reload' => false), //debug
    ['debug' => false], //debug
]);

if (@$_GET['address'] && @$_GET['coll_name']) {
    $redis = new Predis\Client([
        'host'   => 'localhost',
        'port'   => 6379,
        'database' => 11,
    ]);

    $values = json_decode($redis->get($_GET['address']));
    $values = (is_object($values)) ?  get_object_vars($values) : $values;


    if (($key = array_search($_GET['coll_name'], $values)) !== false) {
        unset($values[$key]);
    }


    try {
        $redis->set($_GET['address'], json_encode($values));
    } catch (Predis\Connection\ConnectionException $exception) {
        die($exception->getMessage());
    }


    print_r($redis->get($_GET['address']));
}
