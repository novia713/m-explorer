<?php

namespace Leandro;

use Exception;

class Redis
{
    // database 11 for collections
    // database 12 for cards
    const HOST = '127.0.0.1';
    const PORT = 6379;

    public function __invoke($database)
    {
        $redis = new \Predis\Client([
            'host'   => self::HOST,
            'port'   => self::PORT,
            'database' => $database,
        ]);
        $redis->pipeline();

        return $redis;
    }
}
