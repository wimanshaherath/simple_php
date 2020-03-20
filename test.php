<?php

     $servername='localhost';
     $username='root';
     $password='';
     $dbName='loginsys';

     
    try{
        $dsn='mysql:host='.$servername.';dbname='.$dbName;
        $conn=new PDO($dsn,$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo 'connected successfully';
        
        

    }
    catch(PDOException $e)
    {
        die('Connection failed'. $e->getMessage()) ;
    }
    unset($conn);
?>

