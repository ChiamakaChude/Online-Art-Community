<?php
    include "../database.php";
    header("Content-Type:application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, x-Requested-With");

    $items=$conn->query("SELECT event_id, name, date, location, time, requirements, poster FROM events")->fetchAll();
    $resultarr=array();
    $resultarr["data"]=array();

    foreach ($items as $row)
    {
        $result=array("id"=>$row['event_id'],
        "name"=>$row["name"], 
        "date"=>$row["date"], 
        "location"=>$row["location"], 
        "time"=>$row["time"], 
        "requirements"=>$row["requirements"], 
        "poster"=>$row["poster"]);
           //echo $row["category_name"]."<br>";
        array_push($resultarr["data"],$result);
    }
    echo json_encode(array("error"=>FALSE, "data"=>$resultarr["data"]));
?>