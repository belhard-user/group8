<?php 



$router->get('', 'PageController@index');
$router->get('table-for-student', 'PageController@table');
$router->get('test', 'TestController@test');