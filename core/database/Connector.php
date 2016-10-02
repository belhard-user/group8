<?php

namespace Core\Database;

use mysqli;

class Connector
{
    public static function create($config)
    {
        return new mysqli(
            $config['host'],
            $config['user'],
            $config['pwd'],
            $config['name']
        );
    }
}