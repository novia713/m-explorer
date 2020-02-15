<?php
  require "vendor/autoload.php";

  use GuzzleHttp\Client;
  $loader = new \Twig\Loader\FilesystemLoader('templates');
  $twig = new \Twig\Environment($loader, [
      'cache' => 'templates/cache',
      array('auto_reload' => true), //debug
      ['debug' => true], //debug
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

    $response = $client->post('/task/card_index/get_my_cards_task', [
      'headers' => $headers,
      'json' => $body,
    ]);

    if ($response->getBody()) {
      $data = $response->getBody()->read(999024);
    }

    $data = get_object_vars(json_decode($data));
    $dropdown = function ($card) {
      return '<button data-toggle="dropdown-' . $card->nft_id . '" class="or">&or;</button>
  <ul class="dropdown-pane" id="dropdown-' . $card->nft_id . '" data-dropdown>
    <li><a href="#" data-open="modal2x-' . $card->nft_id . '">2x</a></li>
    <li>' . $card->marbled . '</li>
    <li>
      <div class="row">
       <div class="small-8 columns">
       <div class="row">
        <div class="small-3 columns">
          <label for="desired_level" class="right inline">Level to</label>
        </div>
        <div class="small-9 columns">
          <input type="number" class="desired_level" size="2" id="desired_level_' . $card->nft_id . '"/>
          <input type="button" class="calculate button tiny" data-id="' . $card->nft_id . '"  value="Calculate needed XP"/>
        </div>
      </div>
      </div>
      <div class="actual_level" id="actual_level_' . $card->nft_id . '">' . $card->level . '</div>
      </div>
      <li><div class="result" id="result_' . $card->nft_id . '"></div></li>
    </li>
  </ul>
  <div class="reveal" id="modal2x-' . $card->nft_id . '" data-reveal>
    <img src="' . $card->image_2k . '" border="0"/>
  </div>
  ';
    };


    $output['address'] = $_GET['address'];
    $output['text'] = $_GET['text'];
    $output['data'] = $data;
/*
    foreach ($data['cards'] as $card) {
      if (@$card->image) {
        $coll_id = $card->domain_collection->collection_number;
        echo '<div class="card" coll-id="' . $coll_id . '" level="' . $card->level . '" card-id="' . $card->nft_id . '">';
        echo $dropdown($card);
        echo "<div class='card-wrapper'><img class='marble-img' src='" . $card->image . "' border='0'/></div>";
        echo '<div class="card-section">';
        echo "<p>coll id. <code>" . $coll_id . "</code></em></p>";
        echo "<p>level <code>" . $card->level . "</code></em></p>";
        $badge = ($card->domain_collection->is_gold_card == true) ? 'badge' : 'primary';
        echo '<p>
          <a href="https://marble.cards/card/' . $card->nft_id . '">
            <span class="' . $badge . ' alert">' . $card->nft_id . '</span></a></p>';
        echo "<button class='button tiny'>Add to deck</button>";
        echo '</div>';
        echo '</div>';
      }
    } */
  }

  echo $twig->render('index.twig', $output);