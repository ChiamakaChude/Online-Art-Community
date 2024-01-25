<?php session_start(); ?> 
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
    <!-- Place your stylesheet here-->
    <link href="admin.css" rel="stylesheet">
                    
        <title>
            Admin Mode|Events
        </title>
        
    </head>
    
    <body onload="<?php //sleep(3);?>">
        <?php include 'admin-nav.php'; ?>
        <br><br>
        <div class="container-fluid" id="page-container">
            <div class="row">
                <div class="col-8"><h3 style="padding-top:10px;">Courses</h3></div>
                <div class="col-4" style="padding-top:10px;">
                    <a data-toggle="modal" data-target="#newcourse"><button class="btn btn-primary" style="float:left; margin-left:145px;">New Course <i class="fas fa-plus"><span class="sr-only">current</span></i></button></a> 
                <button data-toggle="popover" title="Help" data-content="This platform displayed all orders with their prices and status. At the end of the table displays the revenue from the sold products. Click the eye icons to display more information about these orders" class="btn btn-warning" style="float:right;">Help <i class="far fa-question-circle"></i></button></div>
            </div><hr>
            
            <p>All()</p>
            <form class="form-inline">
                <a href="../cart.php"><button type="button" class="btn btn-info" data-toggle="tootlip" title="Add to sales. Make order Now">Add</button></a>&ensp;
                <button type="button" class="btn btn-info">Export to Excel</button>&ensp;
                <button type="button" class="btn btn-danger">Delete</button>&ensp;
                <select placeholder="Search..." class="form"><option>Select Action</option></select>&ensp;
                <button type="button" class="btn btn-info">Confirm</button>&ensp;
                <button type="button" class="btn btn-info">Filter</button>&ensp;
                
                <script>
                $(document).ready(function(){
                  $('[data-toggle="popover"]').popover(); 
                });
                </script>
            </form>
            <br>
            <table class="table table-striped">
                
                <thead>
                    <tr>
                        <td><input type="checkbox"></td>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Students</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    
                       
                        <tr style="cursor:pointer" id="showprod">
                            <td><input type="checkbox"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a href=""><i class="fas fa-eye fa-lg"></i></a></td>
                        </tr>
                      
                </tbody>
            </table>
            <div class="modal fade" id="newcourse" role="dialog">
                    <div class="modal-dialog">
                    <br>
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>  
                        </div>
                    <div class="modal-title" style="text-align:center; font-size:20px; font-weight:bold;">New Course</div>
                    <div class="modal-body">
                        <form method="post">
                            <input class="form-control" id="coursename" max="30" type="text" placeholder="Course Name"><br>
                            <div class="form-row mb-4">
                            <div class="col-10">
                                <input type="file" accept="image/jpg,image/gif,image/png,image/jpeg" class="form-control" placeholder="Image" id="cimage" name="cimage" style="display:none;">
                            <input type="text" class="form-control" placeholder="Image" id="cimage-in" readonly required>
                            </div>
                            <div class="col-2">
                                <button type="button" onclick="openWin()" class="btn btn-primary" id="open" style="width:100%;">Select</button>
                            </div>
                            <script>
                                function openWin()
                                {
                                    var select=document.getElementById('cimage').click();
                                }
                                $(document).ready(function(){
                                $('#cimage').change(function(e){
                                    var fileName = e.target.files[0].name;
                                    //('The file "' + fileName +  '" has been selected.');
                                    document.getElementById('cimage-in').value=fileName;
                                });
                            });

                            </script>
                        </div>
                            <textarea class="form-control" id="nbrand" style="background-color:transparent;" name="nbrand" placeholder="Description"></textarea>

                            <div class="modal-footer" style="text-align:center;">
                            <button type="submit" name="create" class="btn btn-primary" style="margin:auto; display:block;">Create</button>
                            <button type="button"  data-dismiss="modal" class="btn btn-danger" style="margin:auto; display:block;">Cancel</button>
                            </div>
                        </form>
                    </div>
                        </div>
                </div>
                
                     </div>
        </div>
    </body>
</html>