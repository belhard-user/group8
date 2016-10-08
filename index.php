<?php
use Core\Router;
use Core\Request;

/** @var $query QueryBuilder */
$query = require_once "core/bootstrap.php";

Router::run('routes')
        ->path(Request::url());
