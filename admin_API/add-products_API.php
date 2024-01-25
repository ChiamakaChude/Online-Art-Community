<?php
    include "../database.php";
    //header("Content-Type:application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, x-Requested-With");


    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST["name"]))
    {
        $name=$_POST['name'];
        $image=$_POST['image'];
        $desc=$_POST['description'];
        
        $count_id=$conn->query("SELECT COUNT(category_name) FROM category WHERE category_name='$name'")->fetchColumn();
        
        $result=array();
        $result["error"]=FALSE;
        $result["data"]=array();
        
        if ($count_id != 0)
        {
            //echo "Matric number alredy exists";
            echo json_encode(array('success'=>"id"));
        }
        
        else
        {
            $insert="INSERT INTO category (category_name, image, description) VALUES ('$name','$image','$desc')";
            $conn->exec($insert);
            //echo "Successfully filled bitch!!!";
            //$res="Successfully filled bitch!!!"
                //array_push($result['data'],$res);
            //echo json_encode(array('error'=>FALSE, 'message'=>'Form Successfully Filled'));
            echo json_encode(array('success'=>"category"));
        }
        
        
        
    }

    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST["pname"]))
    {
        $pname=$_POST['pname'];
        $price=$_POST['price'];
        $quantity=$_POST['quantity'];
        $image=$_POST['pimage'];
        $category=$_POST['category'];
        $desc=$_POST['desc'];
        //$image=$_FILES['pimage']['name'];
        //$target_dir="../image_uploads";
        //$target_file=basename($_FILES['pimage']['name']);
        
        $count_id=$conn->query("SELECT COUNT(product_id) FROM inventory")->fetchColumn();
        $inc_id=$conn->query("SELECT MAX(product_id) FROM inventory")->fetchColumn();
        
        if ($count_id == 0)
        {
            $p_id=1000001;
        }
        elseif($count_id != 0)
        {
            $p_id=$inc_id+1;
        }
        
            $insert="INSERT INTO inventory (product_id, product_name, product_image, category, price, quantity, description) VALUES ('$p_id','$pname','$image', '$category','$price','$quantity','$desc')";
             $conn->exec($insert);
            //move_uploaded_file($_FILES['pimage']['tmp_name'],$target_dir."/".$target_file);
            //echo "Successfully filled bitch!!!";
            //$res="Successfully filled bitch!!!"
                //array_push($result['data'],$res);
            //echo json_encode(array('error'=>FALSE, 'message'=>'Form Successfully Filled'));
            echo json_encode(array('success'=>"inserted"));
                
    }
?>