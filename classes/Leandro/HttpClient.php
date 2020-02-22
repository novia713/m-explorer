<?php

namespace Leandro;

use Exception;

class HttpClient
{

    public function __invoke($client, $headers, $body)
    {
        //print_r(json_encode($body));die();
        try {
            $response = $client->post('/task/card_index/get_my_cards_task', [
                'headers' => $headers,
                'json' => json_encode($body),
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
