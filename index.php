<html>

<head>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/js/foundation.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
  <script type="text/javascript" src="m-explorer.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/css/foundation.min.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="m-explorer.css">
</head>
<form name="formu" method="get" id="formu">
  <div id="address_container">
    <span>
      Eth address: <input type="text" name="address" id="address" size="30" value="<?php echo @$_GET['address']; ?>" />
    </span>
    <span>
      Collection:
      <select id="select2_domains" name="domain"></select>
    </span>
  </div>
  <div id="buttons">
    <div class="btn_container text_container">
      Text: <input type="text" name="text" id="text" size="30" />
    </div>
    <div class="btn_container">
      Limit <input type="number" value="15" id="limit" name="limit" />
    </div>
    <div class="btn_container gold_container">
      <p>Gold</p>
      <div class="switch">
        <input class="switch-input" id="gold" type="checkbox" name="gold">
        <label class="switch-paddle" for="gold">
          <span class="show-for-sr">Gold</span>
          <span class="switch-active" aria-hidden="true">Yes</span>
          <span class="switch-inactive" aria-hidden="true">No</span>
        </label>
      </div>
    </div>
    <div class="btn_container origin_container">
      <p>Origin</p>
      <div class="switch">
        <input class="switch-input" id="origin" type="checkbox" name="origin">
        <label class="switch-paddle" for="origin">
          <span class="show-for-sr">Origin</span>
          <span class="switch-active" aria-hidden="true">Yes</span>
          <span class="switch-inactive" aria-hidden="true">No</span>
        </label>
      </div>
    </div>
    <div class="btn_container genesis_container">
      <p>Genesis</p>
      <div class="switch">
        <input class="switch-input" id="genesis" type="checkbox" name="genesis">
        <label class="switch-paddle" for="genesis">
          <span class="show-for-sr">Genesis</span>
          <span class="switch-active" aria-hidden="true">Yes</span>
          <span class="switch-inactive" aria-hidden="true">No</span>
        </label>
      </div>
    </div>
    <div class="btn_container ascending_container">
      <p>Ascending</p>
      <div class="switch">
        <input class="switch-input" id="ascending" type="checkbox" name="ascending">
        <label class="switch-paddle" for="ascending">
          <span class="show-for-sr">Ascending</span>
          <span class="switch-active" aria-hidden="true">Yes</span>
          <span class="switch-inactive" aria-hidden="true">No</span>
        </label>
      </div>
    </div>
    <input type="submit" value="Go!" class="button" />
    <button type="button" id="mosaic" class="button success">Mosaic</button>
  </div>
  <div id="sorting_buttonz">
    <button type="button" id="sort_coll_id_asc" class="button tiny secondary">Sort coll id ASC</button>
    <button type="button" id="sort_coll_id_desc" class="button tiny secondary">Sort coll id DESC</button>
    <button type="button" id="sort_level_asc" class="button tiny secondary">Level ASC</button>
    <button type="button" id="sort_level_desc" class="button tiny secondary">Level DESC</button>
  </div>
</form>

<div id="cards-container">

  <?php
  require "vendor/autoload.php";

  use GuzzleHttp\Client;

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
        echo '</div>';
        echo '</div>';
      }
    }
  }
  ?>
</div>

</html>