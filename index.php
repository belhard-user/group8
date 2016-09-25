<?php
error_reporting(E_ALL);

class MainNews implements INews
{
    public $db;

    public function __construct()
    {
        $this->db = new mysqli('localhost', 'root', '', 'proba');
    }

    public function __destruct()
    {
        unset($this->db);
    }

    public function getRecord($id)
    {
        $sql = "SELECT * FROM instagram WHERE id = $id";
        $res = $this->db->query($sql);

        return $res->fetch_assoc();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM instagram";
        $res = $this->db->query($sql);


        return $res->fetch_all(MYSQLI_ASSOC);
    }
}
interface INews
{
    public function getAll();
    public function getRecord($id);
}
class Instagram implements INews
{
    public $news = [
        ['id' => '145', 'msg' => 'Hello Strategy', 'email' => 'neo@gmail.com'],
        ['id' => '1451', 'msg' => 'Hello Strategy2', 'email' => 'neo@gmail.com'],
        ['id' => '5', 'msg' => 'Hello Strategy3', 'email' => 'neo@gmail.com'],
        ['id' => '35', 'msg' => 'Hello Strategy4', 'email' => 'neo@gmail.com'],
    ];

    public $item = [
        '145' => 'Hello Strategy',
        '1451' => 'Hello Strategy2',
        5 => 'Hello Strategy3',
        35 => 'Hello Strategy4',
    ];

    public function getAll()
    {
        return $this->news;
    }

    public function getRecord($id)
    {
        return $this->item[$id];
    }

}

class News
{
    public $news;

    public function __construct(INews $news)
    {
        $this->news = $news;
    }

    public function getAll()
    {
        return $this->news->getAll();
    }

    public function getRecord($id)
    {
        return $this->news->getRecord($id);
    }
}


$news = new News(new MainNews());
$content = '';




foreach($news->getAll() as $item){
    $content .= <<<HTML
    <div>
        <h3>{$item['email']}</h3>
        <p>{$item['msg']}</p>
        <a href="/?id={$item['id']}">глянуть</a>
    </div>
    <hr>
HTML;
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $i = $news->getRecord($id);

    $content = '<p>'. $i['msg'] .'</p>';
}

include "template/index.view.php";
