<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>
<body>

<a href="/contact">contact page</a>
<a href="/about">about page</a>
<a href="/page-hello">hello page</a>

<?php foreach ($instagram as $inst): ?>
    <h3><?= $inst['email'] ?></h3>
<?php endforeach; ?>
</body>
</html>
