<?php

namespace App;

use Core\Database\QueryBuilder;

class TaskController
{
    public function index()
    {
        global $app;
        
        $tasks = $app['database']->selectAll('task');
        
        return require_once "template/task.view.php";
    }

    public function addTask()
    {
        global $app;
        
        $app['database']->insert('task', $_POST);
        
        return header('Location: http://shop/task-list');
    }

    public function actions()
    {
        global $app;
        $whatToDo = $_POST['actions'];
        $ids = $_POST['task_ids'];
        
        if($whatToDo == 'done'){
            $app['database']->update('task', [
                'complete' => 1,
            ], $_POST['task_ids']);
        }elseif($whatToDo == 'delete'){
            $sql = 'DELETE FROM task WHERE';
            $app['database']->exec($sql);
        }

        return header('Location: http://shop/task-list');
    }
}