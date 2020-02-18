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
      'timeout'  => 2.0,
    ]);

    $domain = isset($_GET['domain']) ? [$_GET['domain']] : [];
    $_GET['gold'] = ($_GET['gold'] == 'on') ? true : false;
    $_GET['origin'] = ($_GET['origin'] == 'on') ? true : false;
    $_GET['genesis'] = ($_GET['genesis'] == 'on') ? true : false;
    $_GET['ascending'] = ($_GET['ascending'] == 'on') ? true : false;

    $headers = ['Accept' => 'application/json', 'Content-Type' => 'application'];
    $body = [
      "page" => 1,
      "ascending" => (bool) $_GET['ascending'],
      "limit" => (int) $_GET['limit'],
      "search" => [
        "title" => (string) $_GET['text'],
        "domains" => $domain,
        "is_untagged" => false,
        "is_genesis" => (bool) $_GET['genesis'],
        "is_origin" => (bool) $_GET['origin'],
        "is_gold" => (bool) $_GET['gold'],
        "owner" => (string) $_GET['address']
      ]
    ];

    $http_client = new Leandro\HttpClient;
    $data = $http_client($client, $headers, $body);
    $data = get_object_vars(json_decode($data));
 

    $output['address'] = $_GET['address'];
    $output['text'] = $_GET['text'];
    $output['data'] = $data;
  }

  echo $twig->render('index.twig', $output);
