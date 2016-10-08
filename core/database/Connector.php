<?php

namespace Core\Database;

use PDO;

class Connector
{
    public static function create($config)
    {
        return new PDO(
            'mysql:host=' . $config['host'] . ';dbname=' . $config['name'],
            $config['user'],
            $config['pwd'],
            $config['options']
        );
    }
}