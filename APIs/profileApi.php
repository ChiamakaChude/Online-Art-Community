<?php
    include "../database.php";
    header("Content-Type:application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, x-Requested-With");

    if ($_SERVER['REQUEST_METHOD']=='POST')
    {
        
        $id=$_POST["sess"];
        
        $count=$conn->query("SELECT COUNT(user_id) FROM user WHERE user_id='$id'")->fetchColumn();
        
        $users=$conn->query("SELECT user_id, first_name, surname, email, image, phone_no, country, Gender, date_of_birth, level, date_registered, user_type FROM user WHERE user_id='$id'")->fetch();
        $resultarr=array();
        $resultarr["data"]=array();

        if($count != 0)
        {
            $result=array("id"=>$users['user_id'],
                          "firstname"=>$users["first_name"], 
                          "surname"=>$users["surname"], 
                          "email"=>$users["email"], 
                          "image"=>$users["image"], 
                          "phone"=>$users["phone_no"], 
                          "country"=>$users["country"], 
                          "gender"=>$users["Gender"], 
                          "dob"=>$users["date_of_birth"], 
                          "level"=>$users["level"], 
                          "datereg"=>$users["date_registered"],
                          "user_type"=>$users["user_type"]);
               //echo $users["category_name"]."<br>";
            array_push($resultarr["data"],$result);

            echo json_encode(array("error"=>FALSE, "data"=>$resultarr["data"]));
        }
        elseif ($count==0)
        {
            echo json_encode(array("error"=>"TRUE"));
        }
    }
?>