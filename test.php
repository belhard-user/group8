<?php

$arr = [
    'name' => 'John',
    'age' => '23',
    'role' => 'admin'
];

echo http_build_query($arr);



//INSERT INTO tbl_name (task, complete) VALUE ('title', 1)

/*try {
    $pdo = new PDO("mysql:host=localhost;dbname=proba", 'root', '');

    $id = 1;

    $sql = 'SELECT * FROM instagram WHERE id = :id and email = :email';

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        'email' => 'front_mib@mail.ru',
        'id' => $id
    ]);

    print_r($stmt->fetchAll(PDO::FETCH_ASSOC));



}catch (PDOException $e){
    echo $e->getMessage();
}*/