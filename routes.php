<?php 

// INSERT INTO tbl VALUES(:name, :age)
$router->get('task-list', 'TaskController@index');
$router->post('addTask', 'TaskController@addTask');
$router->post('task-action', 'TaskController@actions');


$router->get('', 'PageController@index');
$router->get('table-for-student', 'PageController@table');
$router->get('test', 'TestController@test');