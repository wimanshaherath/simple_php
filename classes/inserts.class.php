<?php

include 'db.class.php';
class inserts extends Db
{
    public $sql;

    public function __construct($sqlQ)
    {
        $this->sql=$sqlQ;
       
    }
    public  function insertQry()
    {
        $stmt=$this->Conn()->prepare($this->sql);
        $stmt->execute();

    }
}