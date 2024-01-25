<!DPCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="../fontawesome-free-5.9.0-web/css/all.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="icon" href="../artplus1edited.png">
        <script src="../js/jquery.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../javascript/if_loggedin-create.js"></script>
        <script src="../javascript/create.js"></script>
        <!-- Place your stylesheet here-->
        <link href="../art_community.css" rel="stylesheet">
                    
        <title>
            Art Plus|Create
        </title>
    </head>
    
    <body onload="<?php //sleep(3);?>" style="background-color:lightgray">
        <?php include 'navbar.php'; ?>
        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_FILES['pimage']['name']))
            {
                $image=$_FILES['pimage']['name'];
                $target_dir="../image_uploads";
                $target_file=basename($_FILES['pimage']['name']);
                //echo "<br><br><br><br><br>".$image;
                move_uploaded_file($_FILES['pimage']['tmp_name'],$target_dir."/".$target_file);
            }  
        ?>
        <br><br>
        <div class="container">
            
            <form method="post" id="create-form" enctype = "multipart/form-data">
                <br>
                <h3 style="text-align:center">Create</h3>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <br>
                        <div onclick="openwin()" id="up-image" class="container">
                            <br><br><br><br><br><br>
                            <p style="text-align: center" id="img-text"><i class="fa fa-upload fa-2x"></i></p>
                            <br>
                            <p style="text-align: center; font-size:17px">Click to upload image</p>
                        </div>
                            &ensp; &ensp; &ensp; &ensp;<img src="" id="prev-image" onclick="openwin()" class="container" />
                    </div>
                    <div class="col-6">
                        <br><br>
                        <div class="container" style="width:90%">
                            <input type="text" placeholder="Title" id="title" class="form-control" required>
                            <br>
                            <select class="form-control" id="category" name="brand" required>
                                <option value="">Category</option>
                            </select>
                            <br>
                            <textarea rows="6" placeholder="Description" id="desc" name="description" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <br><br><br><br>
            <button type="submit" id="createbtn" class="btn btn-success" style="margin: 0 auto; display:block; font-size:20px" name="submit">Create</button>
            </form>
            
            <form method="post" id="image-form" enctype = "multipart/form-data">
                <input type="file" accept="image/jpg,image/gif,image/png,image/jpeg" class="form-control" placeholder="Product Image" id="file" name="pimage" style="display:none;">
            </form>
        </div>
    </body>
</html>