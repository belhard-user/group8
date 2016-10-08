<?php

namespace App;

class PageController
{
    public function index()
    {
        die('test test test');
    }

    public function table()
    {
        $rows = 10;
        $cols = 10;
        $color = 'red';

        if(isset($_POST['rows'])) {
            $rows = $_POST['rows'];
            $cols = $_POST['cols'];
        }

        require_once "template/table.view.php";
    }
}