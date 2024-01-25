<?php
    include "../database.php";
    header("Content-Type:application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, x-Requested-With");

     if ($_SERVER['REQUEST_METHOD']=='POST')
    {
        $id=$_POST['sess'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $number=$_POST['number'];
        $country=$_POST['country'];
        $gender=$_POST['gender'];
        
        if(!empty($fname))
        {
            $updatefname=$conn->query("UPDATE user SET first_name='$fname' WHERE user_id='$id'")->execute();
        }
        
        if(!empty($lname))
        {
            $updatelname=$conn->query("UPDATE user SET surname='$lname' WHERE user_id='$id'")->execute();
        }
         
        if(!empty($number))
        {
            $updateno=$conn->query("UPDATE user SET phone_no='$number' WHERE user_id='$id'")->execute();
        }
         
        if(!empty($country))
        {
            $updatecountry=$conn->query("UPDATE user SET country='$country' WHERE user_id='$id'")->execute();
        }
        
        if(!empty($gender))
        {
            $updategender=$conn->query("UPDATE user SET Gender='$gender' WHERE user_id='$id'")->execute();
        }
            //echo "E-mail alredy exists";
        echo json_encode(array('success'=>"done"));
        
     }
?>