<?php
//error_reporting(E_ALL);
require "vendor/autoload.php";

if (!Leandro\Helpers::is_valid_address($_GET['address'])){
  die("no valid address :-/");
}

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

    $values = json_decode($redis->get($_GET['address']));
    $values = (is_object($values)) ?  get_object_vars($values) : $values;




    if (array_key_exists($_GET['coll_name'], $values)) {
        unset($values[$_GET['coll_name']]);
    }


    try {
        $redis->set($_GET['address'], json_encode($values));
        header("Location: /my_colls?status=1&address=" . $_GET['address']."&status=1");
    } catch (Predis\Connection\ConnectionException $exception) {
        die($exception->getMessage());
    }



}
