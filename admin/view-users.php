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
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../javascript/view-users.js"></script>
    <!-- Place your stylesheet here-->
    <link href="admin.css" rel="stylesheet">
                    
        <title>
            Admin Mode|Orders
        </title>
       
    </head>
    
    <body onload="<?php //sleep(3);?>">
        <?php include 'admin-nav.php'; ?>
        <br><br>
        <div class="container-fluid" id="page-container">
            <div class="row">
                <div class="col-6"><h3 style="padding-top:10px;">Users</h3></div>
                <div class="col-6" style="padding-top:10px;">
                    <button data-toggle="popover" title="Help" data-content="This platform displayed all orders with their prices and status. At the end of the table displays the revenue from the sold products. Click the eye icons to display more information about these orders" class="btn btn-warning" style="float:right;">Help <i class="far fa-question-circle"></i>
                    </button>
                </div>
            </div><hr>
           
            <p>All()</p>
            <form class="form-inline" method="post">
                <a href="add-products.php"><button type="button" class="btn btn-info" data-toggle="tootlip" title="Add to sales. Make order Now">Add</button></a>&ensp;
                
                <button type="button" class="btn btn-info">Export to Excel</button>&ensp;
                
                <button type="button" class="btn btn-danger">Delete</button>&ensp;
                
                <div class="dropdown">
                    <button class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="drop">Sort By</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="view-users.php?sort=country">Country</a>
                        <a class="dropdown-item" href="view-users.php?sort=firstname">First Name</a>
                        <a class="dropdown-item" href="view-users.php?sort=gender">Gender</a>
                        <a class="dropdown-item" href="view-users.php?sort=lastname">Last Name</a>
                    </div>
                </div> &ensp;
                
                <button type="button" class="btn btn-info">Confirm</button>&ensp;
                
                <div class="dropdown">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="drop">Filter By</button>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu dropright">
                            <a class="test dropdown-item dropdown-toggle" href="#">Country</a>
                            <ul class="dropdown-menu">
                                
                            </ul>
                        </li>
                        <li class="dropdown-submenu dropright">
                            <a class="test dropdown-item dropdown-toggle" href="#">Gender</a>
                            <ul class="dropdown-menu">
                                
                            </ul>
                        </li>
                    </ul>
                </div>
            </form>
            <!--Javascript code for popover and multi-level dropdown-->
            <script>
                $(document).ready(function(){
                  $('[data-toggle="popover"]').popover(); 
                });
                
                $(document).ready(function(){
                  $('.dropdown-submenu a.test').on("click", function(e){
                    $(this).next('ul').toggle();
                    e.stopPropagation();
                    e.preventDefault();
                  });
                });
            </script>
            <br>
            <div id="table"></div>
            <!--<table id="user_table" class="table table-striped">
                <thead>
                    <tr>
                        <td><input type="checkbox"></td>
                        <th>ID</th>
                        <th>Image</th>
                        <th>First Name</th>
                        <th>Last Name <i class="fa fa-caret-down"></i><i class="fa fa-caret-up"></i></th>
                        <th>Email <a onclick="date()"><i class="fa fa-caret-down"></i></a><a><i class="fa fa-caret-up"></i></a></th>
                        <th>Telephone <i class="fa fa-caret-down"></i><i class="fa fa-caret-up"></i></th>
                        <th>Country <i class="fa fa-caret-down"></i><i class="fa fa-caret-up"></i></th>
                        <th>Gender <i class="fa fa-caret-down"></i><i class="fa fa-caret-up"></i></th>
                        <th>D.O.B <i class="fa fa-caret-down"></i><i class="fa fa-caret-up"></i></th>
                        <th>Level <i class="fa fa-caret-down"></i><i class="fa fa-caret-up"></i></th>
                        <th>Date Registered <i class="fa fa-caret-down"></i><i class="fa fa-caret-up"></i></th>
                        <th>User Type <i class="fa fa-caret-down"></i><i class="fa fa-caret-up"></i></th>
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
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a href=""><i class="fas fa-eye fa-lg"></i></a></td>
                        </tr>
                   
                </tbody>
            </table>-->
            <form method="post">
                <p style="text-align:center;">Display</p>
                    <select name="select" onchange="this.form.elements['displaybtn'].click()" id="limit" name="display">
                        <option value="10">10</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="500">500</option>
                        <option value="1000">1000</option>
                    </select>
                <button type="submit" name="displaybtn" style="display:none;"></button>
            </form>
               <p>/ Items
            </p>
        </div>
        <div class="modal fade" id="delete" role="dialog">
    <div class="modal-dialog">
    <br>
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" id="cat-close" class="close" data-dismiss="modal">&times;</button>  
        </div>
        <div class="modal-title" style="text-align:center; font-size:18px; font-weight:bold;">Are you sure you want to delete this account?</div>
        <div class="modal-body">
          
                <div class="modal-footer" style="text-align:center;">
                    <button type="submit" id="yes" name="create" class="btn btn-primary" style="margin:auto; display:block;">Yes</button>
                    <button type="button"  data-dismiss="modal" class="btn btn-danger" style="margin:auto; display:block;">Cancel</button>
                </div>
                       
        </div>
    </div>
    </div>
</div>
    </body>
</html>