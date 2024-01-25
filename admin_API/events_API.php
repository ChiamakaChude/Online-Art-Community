<?php
    include "../database.php";
    header("Content-Type:application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, x-Requested-With");


    $events=$conn->query("SELECT * FROM events")->fetchAll();


    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST["ename"]))
    {
        $event_name=$_POST['ename'];
        $location=$_POST['location'];
        $day=$_POST['day'];
        $month=$_POST['month'];
        $year=$_POST['year'];
        $time=$_POST['time'];
        $requirements=$_POST['requirements'];
        $poster=$_POST['image'];
        
        $count_id=$conn->query("SELECT COUNT(event_id) FROM events")->fetchColumn();
        
        $id=$conn->query("SELECT MAX(event_id) FROM events")->fetchColumn();
        
        if ($count_id = 0)
        {
            $event_id=10000001;
        }
        
        else
        {
            $event_id=$id+1;
        }
        
        if ($day=="1")
        {
            $date=$day."ST ".$month.", ".$year;
        }
        
        elseif($day=="2")
        {
            $date=$day."ND ".$month.", ".$year;
        }
        
        elseif($day=="3")
        {
            $date=$day."RD ".$month.", ".$year;
        }
        
        else
        {
            $date=$day."TH ".$month.", ".$year;
        }
        
        $result=array();
        $result["error"]=FALSE;
        $result["data"]=array();
        
        
        $insert="INSERT INTO events (event_id, name, date, location, time, requirements, poster) VALUES ('$event_id','$event_name','$date','$location','$time','$requirements','$poster')";
        $conn->exec($insert);
            //echo "Successfully filled bitch!!!";
            //$res="Successfully filled bitch!!!"
                //array_push($result['data'],$res);
            //echo json_encode(array('error'=>FALSE, 'message'=>'Form Successfully Filled'));
        echo json_encode(array('success'=>"set"));
        
        
        
    }
?>