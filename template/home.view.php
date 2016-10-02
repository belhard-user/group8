<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>
<body>
<?php foreach ($instagram as $inst): ?>
    <h3><?= $inst['email'] ?></h3>
<?php endforeach; ?>
</body>
</html>
