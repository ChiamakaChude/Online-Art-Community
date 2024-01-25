<?php
    include "../database.php";
    header("Content-Type:application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, x-Requested-With");

    $users=$conn->query("SELECT work_id, user_id, title, category_name, image_name, likes, description, upload_date FROM works")->fetchAll();
    $resultarr=array();
    $resultarr["data"]=array();

    foreach ($users as $row)
    {
        $result=array("wid"=>$row['work_id'],
                      "uid"=>$row["user_id"],
                      "title"=>$row["title"],
                      "category"=>$row["category_name"],
                      "image"=>$row["image_name"],
                      "likes"=>$row["likes"],
                      "desc"=>$row["description"]);
           //echo $row["category_name"]."<br>";
        array_push($resultarr["data"],$result);
    }
    echo json_encode(array("error"=>FALSE, "data"=>$resultarr["data"]));
?>