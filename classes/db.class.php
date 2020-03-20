<?php
class Db{
        private $servername='localhost';
        private $username='root';
        private $password='';
        private $dbName='loginsys';

    protected function Conn(){

        
        
        try{
            $conn=new mysqli($this->servername,$this->username,$this->password,$this->dbName);
            return $conn;
        
        }
        catch(Exception $e)
        {
            die("Error; could not be connect.".$conn->connect_error." " . $e.getMessage());
        }
        
    }
    

}


