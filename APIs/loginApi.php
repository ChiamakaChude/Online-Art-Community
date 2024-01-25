<?php
    include "../database.php";
    header("Content-Type:application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, x-Requested-With");


    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST["uname"]))
    {
        
        $name=$_POST['uname'];
        $pass=$_POST['pass'];
        
        $id=$conn->query("SELECT COUNT(user_id) FROM user WHERE user_id='$name'")->fetchColumn();
        
        $p1=$conn->query("SELECT password FROM user WHERE user_id='$name'")->fetchColumn();
        
        
        if($id != 0)
        {
            if($pass==base64_decode($p1))
            {
                echo json_encode(array('success'=>"exists"));
            }
            else
            {
                echo json_encode(array('success'=>"p_notexists"));
            }
        }
        elseif ($id==0)
        {
            echo json_encode(array('success'=>"notexists"));
        }
    }
?>