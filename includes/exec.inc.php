<?php
    
    //include 'E:/My Objects/phpWeb/loginpage/classes/inserts.class.php';
    include 'class_autoload.inc.php';

    $user=$_POST['username'];
    $pass=$_POST['password'];
    $email=$_POST['email'];

    

    try{
        $insertQ=new inserts($user,$pass,$email);
        $insertQ->insertQry();

    }
    catch(TypeError $ex)
    {
        echo 'ee' . $ex.getMessage();
    }
    
?>