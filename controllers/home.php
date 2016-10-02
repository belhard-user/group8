<?php

$instagram = $app['database']->selectAll('instagram');
$title = 'Инстаграм';

include "template/home.view.php";