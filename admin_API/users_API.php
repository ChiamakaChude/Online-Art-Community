<?php
    include "../database.php";
    header("Content-Type:application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, x-Requested-With");

    $users=$conn->query("SELECT user_id, first_name, surname, email, image, phone_no, country, Gender, date_of_birth, level, date_registered, user_type FROM user")->fetchAll();
    $resultarr=array();
    $resultarr["data"]=array();

    foreach ($users as $row)
    {
        $result=array("id"=>$row['user_id'],"firstname"=>$row["first_name"], "surname"=>$row["surname"], "email"=>$row["email"], "image"=>$row["image"], "phone"=>$row["phone_no"], "country"=>$row["country"], "gender"=>$row["Gender"], "dob"=>$row["date_of_birth"], "level"=>$row["level"], "datereg"=>$row["date_registered"], "user_type"=>$row["user_type"]);
           //echo $row["category_name"]."<br>";
        array_push($resultarr["data"],$result);
    }
    echo json_encode(array("error"=>FALSE, "data"=>$resultarr["data"]));
?>