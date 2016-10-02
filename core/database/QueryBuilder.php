<?php 

class QueryBuilder
{
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
}