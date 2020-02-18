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
        'host'   => '127.0.0.1',
        'port'   => 6379,
        'database' => 11,
    ]);
    $redis->pipeline();

    
    $values = json_decode($redis->get($_GET['address']));
    $values = (is_object($values)) ?  get_object_vars($values) : $values;

    if (!in_array($_GET['coll_name'], @$values)) {
        $values[uniqid()] = $_GET['coll_name'];
    } else {
        echo "<script>console.info('" . $_GET['coll_name'] . " already exists')</script>";
    }


    try {
        $redis->set($_GET['address'], json_encode($values));
    } catch (Predis\Connection\ConnectionException $exception) {
        die($exception->getMessage());
    }


    print_r($redis->get($_GET['address']));
}
