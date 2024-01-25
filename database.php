<?php 
    //header("Content-Type:application/json; charset=UTF-8");
    //header("Access-Control-Allow-Methods: GET");
    //header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, x-Requested-With");
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="AUIEC";

    $conn= new PDO("mysql:host=$servername; dbname=$dbname",$username,$password);


     try
    {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "success";
    }
    catch(PDOException $e)
    {
        echo "Connection Failed". "<br>". $e->getMessage();
    }
?>


