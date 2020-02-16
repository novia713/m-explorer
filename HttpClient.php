<?php
namespace Leandro;

class HttpClient
{

    public function __invoke($client, $headers, $body)
    {
        $response = $client->post('/task/card_index/get_my_cards_task', [
            'headers' => $headers,
            'json' => $body,
        ]);

        if ($response->getBody()) {
            return $response->getBody()->read(999024);
        }

        return null;
    }
}
