<?php

namespace App;

use Core\Database\QueryBuilder;

class TaskController
{
    public function index()
    {
        return require_once "template/task.view.php";
    }

    public function addTask()
    {
        global $app;

        $app['database']->insert('task', $_POST);
        
        return header('Location: http://shop/task-list');
    }
}