<?php
namespace Core\Database;

use PDO;

class QueryBuilder
{
    /**
     * @var PDO
     */
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function selectAll($table)
    {
        $sql = "SELECT * FROM $table";
        /** @var $result \PDOStatement */
        $result = $this->db->query($sql);
        
        return $result->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert($table, array $params)
    {
        $keys = array_keys($params);

        $sql = sprintf(
            "INSERT INTO %s (%s) VALUES (%s)", // insert into task (title, complete)
            $table,
            implode(',  ', $keys),
            ':'.implode(', :', $keys)
        );

        $result = $this->db->prepare($sql);

        return $result->execute($params);
    }

    public function update($table, $params, $where)
    {
        $setters = array_map(function($param){
            if(! is_array($param)) {
                return $param . '=' . ':' . $param;
            }
        }, array_keys($params));
        
        
        $sql = sprintf(
            "UPDATE %s SET %s WHERE id IN(%s)", 
            $table,
            implode(', ', $setters),
            implode(', ', $where)
        );
        
        $stmt = $this->db->prepare($sql);

        return $stmt->execute($params);
    }

    public function deleteTasks($sql)
    {
        $this->db->exec($sql); // DELETE FROM task WHERE id IN(1, 2, 6, 8)
    }
}