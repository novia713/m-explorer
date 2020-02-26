<?php
//error_reporting(E_ALL);
require "vendor/autoload.php";

use GuzzleHttp\Client;
// database 11 for collections
// database 12 for cards
const COLLECTIONS_DB = 11;
const CARDS_DB = 12;
$coll_exists_in_address = false;

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    'cache' => 'templates/cache',
    array('auto_reload' => false), //debug
    ['debug' => false], //debug
]);

if (@$_REQUEST['address'] && @$_REQUEST['card_id'] && @$_REQUEST['coll_id']) {
    $redis = (new Leandro\Redis())(COLLECTIONS_DB);

    // first identify coll into user (database 11)
    // then insert card_id in colls table (database 12) if it doesn't exist

    $values = json_decode($redis->get($_REQUEST['address']));
    $values = (is_object($values)) ?  get_object_vars($values) : $values;
    if (!$values) $values = [];

    if (!in_array($_REQUEST['coll_id'], @$values)) {
        $coll_exists_in_address = true;
    }


    if ($coll_exists_in_address) {
      unset($redis);
      $redis = (new Leandro\Redis())(CARDS_DB);
      $cards = json_decode($redis->get($_REQUEST['coll_id']));
      $cards = (is_object($cards)) ?  get_object_vars($cards) : $cards;
      if (!$cards) $cards = [];



      try {
        if (!in_array($_REQUEST['card_id'], @$cards)) {
          $cards[] = $_REQUEST['card_id'];
          $redis->set($_REQUEST['coll_id'], json_encode($cards));
        }
      } catch (Predis\Connection\ConnectionException $exception) {
          die($exception->getMessage());
      }

    }


    header("Location: /d?" . $_REQUEST['coll_id']);
}
