<?php
    include "../database.php";
    header("Content-Type:application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, x-Requested-With");

    $items=$conn->query("SELECT product_id, product_name, product_image, category, price, quantity, description, upload_date FROM inventory")->fetchAll();
    $resultarr=array();
    $resultarr["data"]=array();

    foreach ($items as $row)
    {
        $result=array("id"=>$row['product_id'],
        "name"=>$row["product_name"], 
        "image"=>$row["product_image"], 
        "category"=>$row["category"], 
        "price"=>$row["price"], 
        "quantity"=>$row["quantity"], 
        "desc"=>$row["description"], 
        "update"=>$row["upload_date"]);
           //echo $row["category_name"]."<br>";
        array_push($resultarr["data"],$result);
    }
    echo json_encode(array("error"=>FALSE, "data"=>$resultarr["data"]));
?>