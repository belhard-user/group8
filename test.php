<pre><?php


//INSERT INTO tbl_name (task, complete) VALUE ('title', 1)

try {
    $pdo = new PDO("mysql:host=localhost;dbname=proba", 'root', '');
    // $pdo = new PDO("sqlite:proba.sqlite");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM comment WHERE image_id=3";

    $records = $pdo->query($sql);

    // print_r($records->fetchAll(PDO::FETCH_OBJ)); die;


    print_r($records->fetch(PDO::FETCH_LAZY));

//    $sql = "DELETE FROM comment WHERE id=12";
//
//    $cnt = $pdo->exec($sql);
//
//    echo $cnt;

}catch (PDOException $e){
    echo $e->getMessage();
}