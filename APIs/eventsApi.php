<?php
    include "../database.php";
    header("Content-Type:application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, x-Requested-With");

    $users=$conn->query("SELECT event_id, name, date, time, location, requirements, poster FROM events")->fetchAll();
    $resultarr=array();
    $resultarr["data"]=array();

    foreach ($users as $row)
    {
        $result=array("eid"=>$row['event_id'],
                      "name"=>$row["name"],
                      "date"=>$row["date"],
                      "time"=>$row["time"],
                      "location"=>$row["location"],
                      "req"=>$row["requirements"],
                      "image"=>$row["poster"]);
           //echo $row["category_name"]."<br>";
        array_push($resultarr["data"],$result);
    }
    echo json_encode(array("error"=>FALSE, "data"=>$resultarr["data"]));
?>