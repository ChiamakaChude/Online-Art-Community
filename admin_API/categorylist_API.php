<?php
    include "../database.php";
    header("Content-Type:application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, x-Requested-With");

    /*if (isset($_POST['id']))
    {
        $id=$_POST['id'];
        echo $id;
        
    $user=$conn->query("SELECT `user_id`, `password`, `email` FROM user WHERE user_id='$id'")->fetchObject();
        
    echo $user['user_id'];
        
    $result=array("id"=>$user['user_id'],"password"=>$user["password"], "email"=>$user["email"]);
        
    echo json_encode(array("error"=>FALSE, "data"=>$result));
    }*/

        $display_category=$conn->query("SELECT category_name, image, description FROM category")->fetchAll();
        $resultarr=array();
        $resultarr["data"]=array();

        foreach($display_category as $row)
        {
            //extract($row);
            $result=array("category"=>$row['category_name'],"image"=>$row["image"], "description"=>$row["description"]);
           //echo $row["category_name"]."<br>";
            array_push($resultarr["data"],$result);
            
        }
       //$result=array("category"=>$display_category['category_name'],"image"=>$display_category["image"], "description"=>$display_category["description"]);
        echo json_encode(array("error"=>FALSE, "data"=>$resultarr["data"]));

        
?>