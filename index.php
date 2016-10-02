<?php
/** @var $query QueryBuilder */
$query = require_once "core/bootstrap.php";

include Router::run('routes')
        ->path(Request::url());
