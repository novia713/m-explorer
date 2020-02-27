<?php

namespace Leandro;

use Exception;

class HttpClient
{

    public function __invoke($client, $headers, $body, $type)
    {
        //type 1 - get cards
        //type 2 - get card
        switch ($type) {
            case 1:
                $url = "/task/card_index/get_my_cards_task";
                break;
            case 2:
                $url = "https://ws.marble.cards/task/card_index/get_card_detail_task";
                break;
            default:
                $url = "";
                break;
        }

        try {
            $response = $client->post($url, [
                'headers' => $headers,
                'json' => $body,
                //'debug'=>true, //debug
            ]);
        } catch (Exception $e) {
            die($e->getMessage());
        }

        if ($response->getBody()) {
            return $response->getBody()->read(999024);
        }

        return null;
    }
}
