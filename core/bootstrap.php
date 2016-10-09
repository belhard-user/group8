<?php
use Core\Database\Connector;
use Core\Database\QueryBuilder;

$app = [];

$app['config'] = require_once "config/config.php";
require_once "vendor/autoload.php";


const DS = DIRECTORY_SEPARATOR;


$app['database'] =  new QueryBuilder( 
    Connector::create($app['config']['database']) 
);