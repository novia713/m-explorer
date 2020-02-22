<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
  'cache' => 'templates/cache',
  array('auto_reload' => false), //debug
  ['debug' => false], //debug
]);
$output = [];

if ($_GET) {
  $gets = ['ascending', 'limit', 'text', 'genesis', 'origin', 'gold', 'address'];
  foreach ($gets as $get) {
    $_GET[$get] = (isset($_GET[$get])) ? $_GET[$get] : false;
  }

  $client = new Client([
    'base_uri' => 'https://ws.marble.cards',
    'timeout' => 10,
    'connect_timeout' => 10
  ]);

  $domain = isset($_GET['domain']) ? [$_GET['domain']] : [];
  $_GET['gold'] = ($_GET['gold'] == 'on') ? true : false;
  $_GET['origin'] = ($_GET['origin'] == 'on') ? true : false;
  $_GET['genesis'] = ($_GET['genesis'] == 'on') ? true : false;
  $_GET['ascending'] = ($_GET['ascending'] == 'on') ? true : false;

  $headers = [
    //'Accept' => 'application/json', 
    'Content-Type' => 'application/x-www-form-urlencoded'
  ];
  $body = [
    "page" => 1,
    "ascending" => ($_GET['ascending']) ?: 0,
    "limit" => ($_GET['limit']) ?: 0,
    "search" => [
      "title" => ($_GET['text']) ?: '""',
      "domains" => $domain,
      "is_untagged" => 0,
      "is_genesis" => ($_GET['genesis']) ?: 0,
      "is_origin" => ($_GET['origin']) ?: 0,
      "is_gold" => ($_GET['gold']) ?: 0,
      "owner" => (string) $_GET['address'],
    ]
  ];

  //$http_client = new Leandro\HttpClient;
  $data = (new Leandro\HttpClient())($client, $headers, $body);
  die();
  $data = get_object_vars(json_decode($data));


  $output['address'] = $_GET['address'];
  $output['text'] = $_GET['text'];
  $output['data'] = $data;
}

echo $twig->render('index.twig', $output);
