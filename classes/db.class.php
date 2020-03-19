<?php
class Db{
        private $servername='localhost';
        private $username='root';
        private $password='12345';
        private $dbName='loginsys';

    protected function Conn(){

        
        
        try{
            $dsn='mysql:host='.$this->servername.';dbname='.$this->dbName;
            $conn=new PDO($dsn,$this->username,$this->password);
        
            $conn->setAttribute(PDO::ATTR_ERRORMODE,PDO::ERRORMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
            return $conn;
        
        }
        catch(PDOException $e)
        {
            echo 'Connection failed'. $e->getMessage();
        }
        
    }
    

}


