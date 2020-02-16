<?php
namespace Leandro;

class HttpClient
{

    public function __invoke($client, $headers, $body)
    {
      try {
        $response = $client->post('/task/card_index/get_my_cards_task', [
            'headers' => $headers,
            'json' => $body,
        ]);

        if ($response->getBody()) {
            return $response->getBody()->read(999024);
        }
      }catch (Exception $e){
        echo "<!--";
        print_r($e);
        echo "-->";
        die("Could not connect with the api");

      }
      return null;
    }
}
