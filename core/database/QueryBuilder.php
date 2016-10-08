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
        /** @var $result mysqli_result */
        $result = $this->db->query($sql);
        
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insert($table, array $params)
    {
        $keys = array_keys($params);

        $sql = sprintf(
            "INSERT INTO %s (%s) VALUES (%s)",
            $table,
            implode(',  ', $keys),
            ':'.implode(', :', $keys)
        );

        $result = $this->db->prepare($sql);

        return $result->execute($params);
    }
}