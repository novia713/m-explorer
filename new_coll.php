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

if (@$_POST['address'] && @$_POST['coll_name']) {
    $redis = new Predis\Client([
        'host'   => '127.0.0.1',
        'port'   => 6379,
        'database' => 11,
    ]);
    $redis->pipeline();

    
    $values = json_decode($redis->get($_POST['address']));
    $values = (is_object($values)) ?  get_object_vars($values) : $values;
    if (!$values) $values = [];

    if (!in_array($_POST['coll_name'], @$values)) {
        $values[uniqid()] = $_POST['coll_name'];
    } else {
        echo "<script>console.info('" . $_POST['coll_name'] . " already exists')</script>";
    }


    try {
        $redis->set($_POST['address'], json_encode($values));
    } catch (Predis\Connection\ConnectionException $exception) {
        die($exception->getMessage());
    }


    header("Location: /my_colls?status=1&address=" . $_POST['address']);
}
