<?php
    include "../database.php";

    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST["matno"]))
    {
        $user_id=$_POST['matno'];
        $email=$_POST['email'];
        $phone=$_POST['phone_no'];
        $password=base64_encode($_POST['password']);
        $user_type="student";
        
        $count_id=$conn->query("SELECT COUNT(user_id) FROM user WHERE user_id='$user_id'")->fetchColumn();
        
        $count_email=$conn->query("SELECT COUNT(email) FROM user WHERE email='$email'")->fetchColumn();
        
        $count_phone_no=$conn->query("SELECT COUNT(phone_no) FROM user WHERE phone_no='$phone'")->fetchColumn();
        
        $result=array();
        $result["error"]=FALSE;
        $result["data"]=array();
        
        if ($count_id != 0)
        {
            //echo "Matric number alredy exists";
            echo json_encode(array('success'=>"id"));
        }
        
        else if ($count_email != 0)
        {
            //echo "E-mail alredy exists";
            echo json_encode(array('success'=>"email"));
        }
        
        else if ($count_phone_no != 0)
        {
            //echo "Phone number alredy exists";
            echo json_encode(array('success'=>"phone"));
        }
        
        else
        {
            $insert="INSERT INTO user (user_id, email, phone_no, password, user_type) VALUES ('$user_id','$email','$phone','$password', '$user_type')";
            $conn->exec($insert);
            //echo "Successfully filled bitch!!!";
            //$res="Successfully filled bitch!!!"
                //array_push($result['data'],$res);
            //echo json_encode(array('error'=>FALSE, 'message'=>'Form Successfully Filled'));
            echo json_encode(array('success'=>"user"));
        }
        
        
        
    }

    
     if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST["staffno"]))
    {
        $user_id=$_POST['staffno'];
        $email=$_POST['email'];
        $phone=$_POST['phone_no'];
        $password=base64_encode($_POST['password']);
        $user_type="staff";
        
        $count_id=$conn->query("SELECT COUNT(user_id) FROM user WHERE user_id='$user_id'")->fetchColumn();
        
        $count_email=$conn->query("SELECT COUNT(email) FROM user WHERE email='$email'")->fetchColumn();
        
        $count_phone_no=$conn->query("SELECT COUNT(phone_no) FROM user WHERE phone_no='$phone'")->fetchColumn();
        
        $result=array();
        $result["error"]=FALSE;
        $result["data"]=array();
        
        if ($count_id != 0)
        {
            //echo "Matric number alredy exists";
            echo json_encode(array('success'=>"id"));
        }
        
        else if ($count_email != 0)
        {
            //echo "E-mail alredy exists";
            echo json_encode(array('success'=>"email"));
        }
        
        else if ($count_phone_no != 0)
        {
            //echo "Phone number alredy exists";
            echo json_encode(array('success'=>"phone"));
        }
        
        else
        {
            $insert="INSERT INTO user (user_id, email, phone_no, password, user_type) VALUES ('$user_id','$email','$phone','$password', '$user_type')";
            $conn->exec($insert);
            //echo "Successfully filled bitch!!!";
            //$res="Successfully filled bitch!!!"
                //array_push($result['data'],$res);
            //echo json_encode(array('error'=>FALSE, 'message'=>'Form Successfully Filled'));
            echo json_encode(array('success'=>"user"));
        }
        
        
        
    }


    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST["username"]))
    {
        $user_id=$_POST['username'];
        $email=$_POST['email'];
        $phone=$_POST['phone_no'];
        $country=$_POST['country'];
        $password=base64_encode($_POST['password']);
        $user_type="other";
        
        
        $count_id=$conn->query("SELECT COUNT(user_id) FROM user WHERE user_id='$user_id'")->fetchColumn();
        
        $count_email=$conn->query("SELECT COUNT(email) FROM user WHERE email='$email'")->fetchColumn();
        
        $count_phone_no=$conn->query("SELECT COUNT(phone_no) FROM user WHERE phone_no='$phone'")->fetchColumn();
        
        $result=array();
        $result["error"]=FALSE;
        $result["data"]=array();
        
        if ($count_id != 0)
        {
            //echo "Matric number alredy exists";
            echo json_encode(array('success'=>"id"));
        }
        
        else if ($count_email != 0)
        {
            //echo "E-mail alredy exists";
            echo json_encode(array('success'=>"email"));
        }
        
        else if ($count_phone_no != 0)
        {
            //echo "Phone number alredy exists";
            echo json_encode(array('success'=>"phone"));
        }
        
        else
        {
            $insert="INSERT INTO user (user_id, email, phone_no, country, password, user_type) VALUES ('$user_id','$email','$phone', '$country','$password', '$user_type')";
             $conn->exec($insert);
            //echo "Successfully filled bitch!!!";
            //$res="Successfully filled bitch!!!"
                //array_push($result['data'],$res);
            //echo json_encode(array('error'=>FALSE, 'message'=>'Form Successfully Filled'));
            echo json_encode(array('success'=>"user"));
        }
                
    }
?>