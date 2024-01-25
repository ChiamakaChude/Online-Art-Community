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
    <link rel="icon" href="../logo1.png">
    <script src="../js/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="froala_editor_3.0.3/css/froala_editor.pkgd.min.css">
    <script type="text/javascript" src="froala_editor_3.0.3/js/froala_editor.pkgd.min.js"></script>
    <!-- Place your stylesheet here-->
    <link href="admin.css" rel="stylesheet">
                    
        <title>
            Admin Mode|Orders
        </title>
        
        
    </head>
    
    <body onload="<?php //sleep(3);?>">

<?php
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $image=$_FILES['cimage']['name'];
                $target_dir="../image_uploads";
                $target_file=basename($_FILES['cimage']['name']);
                echo "<br><br><br><br><br>".$image;
                move_uploaded_file($_FILES['cimage']['tmp_name'],$target_dir."/".$target_file);
            }  
        ?>
        <a data-toggle="modal" data-target="#newbrand"><button type="button" class="btn btn-primary" style="width:100%;">New Category</button></a>
        <div class="modal fade" id="newbrand" role="dialog">
                    <div class="modal-dialog">
                    <br>
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" id="cat-close" class="close" data-dismiss="modal">&times;</button>  
                        </div>
                    <div class="modal-title" style="text-align:center; font-size:20px; font-weight:bold;">Create Brand</div>
                    <div class="modal-body">
                        <form method="post" id="new-category" enctype = "multipart/form-data">
                            
                            <input type="text" placeholder="Category Name" class="form-control" maxlength="30" id="cat-name" title="Entry must be a valid price of 2 or more digits" name="pprice" required><br>
                            <p id="cat-name_er" style="color:red"></p>
                        <div class="form-row mb-4">
                        <div class="col-10">
                            <a onclick="img()">
                        <input type="text" class="form-control" placeholder="Category Image" id="cat-file-in" readonly required></a>
                        </div>
                        <div class="col-2">
                            <a onclick="img()"><button type="button" onclick="openWin()" class="btn btn-primary" id="cat-open" style="width:100%;">Select</button></a>
                        </div>
                        <script>
                           function openWin()
                            {
                                var select=document.getElementById('cat-file').click();
                            }
                            $(document).ready(function(){
                            $('#cat-file').change(function(e){
                                var fileName = e.target.files[0].name;
                                ('The file "' + fileName +  '" has been selected.');
                                document.getElementById('cat-file-in').value=fileName;
                            });
                        });
                            
                        </script>
                    </div>
                            <textarea class="form-control" id="cat-desc" style="background-color:transparent;" name="nbrand" placeholder="Description"></textarea>

                            <div class="modal-footer" style="text-align:center;">
                            <button type="submit" onclick="csubmit()" name="create" class="btn btn-primary" style="margin:auto; display:block;">Create</button>
                            <button type="button"  data-dismiss="modal" class="btn btn-danger" style="margin:auto; display:block;">Cancel</button>
                            </div>
                        </form>
                       </div>
                        </div>
                </div>
                     </div>
             <form method="post" id="catimage-form" enctype = "multipart/form-data">
                <input type="file" accept="image/jpg,image/gif,image/png,image/jpeg" class="form-control" placeholder="Category Image" id="cat-file" name="cimage" style="display:none;">
            </form>
                        <script>
                            function csubmit()
                            {
                                document.getElementById("catimage-form").submit();
                            }
                        </script>
    </body>
</html>