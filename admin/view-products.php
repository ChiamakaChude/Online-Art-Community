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
    <script src="../javascript/inventorylist.js"></script>
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
                <div class="col-6"><h3 style="padding-top:10px;">Products</h3></div>
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
                        <a class="dropdown-item" href="view-products.php?sort=animal">Animal</a>
                        <a class="dropdown-item" href="view-products.php?sort=brand">Brand</a>
                        <a class="dropdown-item" href="view-products.php?sort=category">Category</a>
                        <a class="dropdown-item" href="view-products.php?sort=date_entered">Date Added</a>
                        <a class="dropdown-item" href="view-products.php?sort=product_name">Name</a>
                        <a class="dropdown-item" href="view-products.php?sort=product_price">Price</a>
                        <a class="dropdown-item" href="view-products.php?sort=quantity">Quantity</a>
                    </div>
                </div> &ensp;
                
             <!--   <select placeholder="Search..." class="form-control" name="selectsort" onchange="this.form.elements['sort'].click();">
                    <option value="">Sort By...</option>
                    <option value="animal">Animal</option>
                    <option value="brand">Brand</option>
                    <option value="category">Category</option>
                    <option value="date_entered">Date Added</option>
                </select>&ensp; -->
                <button type="button" class="btn btn-info">Confirm</button>&ensp;
                
                <div class="dropdown">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="drop">Filter By</button>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu dropright">
                            <a class="test dropdown-item dropdown-toggle" href="#">Animal</a>
                            <ul class="dropdown-menu">
                                 <li><a tabindex="-1" href="view-products.php?filter=bird&by=animal">Bird</a></li>
                                 <li><a tabindex="-1" href="view-products.php?filter=cat&by=animal">Cat</a></li>
                                 <li><a tabindex="-1" href="view-products.php?filter=dog&by=animal">Dog</a></li>
                                 <li><a tabindex="-1" href="view-products.php?filter=hamster&by=animal">Hamster</a></li>
                            </ul>
                        </li>
                        
                        <li class="dropdown-submenu dropright">
                            <a class="test dropdown-item dropdown-toggle" href="#">Brand</a>
                            <ul class="dropdown-menu">
                                
                            </ul>
                        </li>
                        <li class="dropdown-submenu dropright">
                            <a class="test dropdown-item dropdown-toggle" href="#">Category</a>
                            <ul class="dropdown-menu">
                                 
                            </ul>
                        </li>
                    </ul>
                </div>
            </form>
            
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
            <!--<table id="inventable" class="table table-striped">
                <thead>
                    <tr>
                        <td><input type="checkbox"></td>
                        <th>ID <i class="fa fa-caret-down"></i><i class="fa fa-caret-up"></i></th>
                        <th>Image</th>
                        <th style="width:43%;">Name <i class="fa fa-caret-down"></i><i class="fa fa-caret-up"></i></th>
                        <th>Price(&#8358;) <a onclick="date()"><i class="fa fa-caret-down"></i></a><a><i class="fa fa-caret-up"></i></a></th>
                        <th>Quantity <i class="fa fa-caret-down"></i><i class="fa fa-caret-up"></i></th>
                        <th>Category <i class="fa fa-caret-down"></i><i class="fa fa-caret-up"></i></th>
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
                            <td><a href=""><button type="button" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button></a></td>
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
        <div class="modal-title" style="text-align:center; font-size:18px; font-weight:bold;">Are you sure you want to delete this item?</div>
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