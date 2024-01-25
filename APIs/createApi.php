<?php
    include "../database.php";
    header("Content-Type:application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, x-Requested-With");

    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST["sess"]))
    {
        
        $id=$_POST["sess"];
        $title=$_POST["title"];
        $image=$_POST["image"];
        $cat=$_POST["category"];
        $desc=$_POST["desc"];
        
        $count=$conn->query("SELECT COUNT(work_id) FROM works")->fetchColumn();
        $max=$conn->query("SELECT MAX(work_id) FROM works")->fetchColumn();
       
        if($count == 0)
        {
            $workid=1000001;
        }
        
        elseif ($count !=0)
        {
            $workid=$max+1;
        }
             $insert="INSERT INTO works (work_id, user_id, title, category_name, image_name, description) VALUES ('$workid','$id','$title','$cat', '$image', '$desc')";
            $conn->exec($insert);

            echo json_encode(array('success'=>"create"));
    }

      else
        {
            echo json_encode(array("success"=>"error"));
        }
?>