<?php
use Core\Database\Connector;
use Core\Database\QueryBuilder;

$app = [];
// require_once "core/Request.php";
$app['config'] = require_once "config/config.php";
require_once "vendor/autoload.php";
//require_once "core/database/Connector.php";
//require_once "core/database/QueryBuilder.php";
//require_once "core/Router.php";

const DS = DIRECTORY_SEPARATOR;


$app['database'] =  new QueryBuilder( 
    Connector::create($app['config']['database']) 
);