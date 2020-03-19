<?php
    
    //include 'E:/My Objects/phpWeb/loginpage/classes/inserts.class.php';
    include 'class_autoload.inc.php';

    $user=$_POST['username'];
    $pass=$_POST['password'];
    $email=$_POST['email'];

    $sql="insert into account values('$user','$pass','$email')";

    try{
        $insertQ=new inserts($sql);
        $insertQ->insertQry();

    }
    catch(TypeError $ex)
    {
        echo 'ee';
    }
    
?>