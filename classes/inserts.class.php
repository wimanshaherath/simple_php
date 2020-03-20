<?php

include 'db.class.php';
class inserts extends Db
{
    
    public $user;
    public $pass;
    public $email;
    
    public function __construct($user,$pass,$email)
    {
        $this->user=$user;
        $this->pass=$pass;
        $this->email=$email;
        
       
    }
    public  function insertQry()
    {
      try{

        $con=$this->Conn();

        $sql="insert into account(name,password,email) values(?,?,?)";
        if($stmt=$con->prepare($sql))
        {
            //bind variables to the prepare statement as parameters
            $stmt->bind_param("sss",$username,$password,$email);

            $username=$this->user;
            $password=md5($this->pass);
            $email=$this->email;
            $stmt->execute();

            echo "New records created successfully";
        }

        
        //close the statement
        $stmt->close();

        //close the connection
        $con->close();
      }
      catch(Exception $ex)
      {
        die("Error! Cannot insert data ".$ex.getMessage());
      }
        
        
        
    }
}