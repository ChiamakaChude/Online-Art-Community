<?php
    include "../database.php";
    header("Content-Type:application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, x-Requested-With");

    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST["id"]))
    {
        $prouctid=$_POST['id'];
        
        $delete = "DELETE FROM inventory WHERE product_id='$prouctid'";

        $conn->exec($delete);
        echo json_encode(array("success"=>"deleted"));
    }
?>