<?php
$rows = 10;
$cols = 10;
$color = 'red';

if(isset($_POST['rows'])) {
    $rows = $_POST['rows'];
    $cols = $_POST['cols'];
}


include "template/table.view.php";