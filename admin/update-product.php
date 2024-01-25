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
        <link rel="stylesheet" href="froala_editor_3.0.3/css/froala_editor.pkgd.min.css">
        <script type="text/javascript" src="froala_editor_3.0.3/js/froala_editor.pkgd.min.js"></script>
        <!-- Place your stylesheet here-->
        <link href="admin.css" rel="stylesheet">
                    
        <title>
            Admin Mode
        </title>
       
    </head>
    
    <body onload="<?php //sleep(3);?>">
                <br><br>
                <div class="container-fluid" id="page-container">
                    <!--Section to display and edit product name-->
                    <div class="row">
                        
                        <div class="col-10">
                            <h4 style="padding-top:10px;"></h4>
                        </div>
                        
                        <div class="col-2" style="padding-top:10px;">
                            <a href="">
                            <button class="btn btn-primary" style="float:right;"><i class="fas fa-pencil-alt"></i> Edit</button>
                            </a>
                        </div>
                        
                    </div>
                    <hr>
                    
                    <!--Section to display and edit product information-->
                    <div class="row">
                        <div class="col-md-5">
                            <img src="" style="height:280px; width:260px;">
                        </div>
                        <div class="col-md-7">
                            <p><b>Base Price</b> &#8358;</p>
                            <p><b>Final Price</b> &#8358;</p>
                            <p><b>Category</b></p>
                            <p><b>Brand</b></p>
                            <p><b>Animal</b></p>
                            <p><b>Date Entered</b></p>
                        </div>
                    </div>
                    
                    <textarea rows="15" class="form-control">
                        
                    </textarea>
                </div>
        
            //This section enables the admin to update the information about the product
            
                <br><br>
                <h4>Edit Product</h4>
               
                <!--This is the main div that contains the details of the products elligible for update-->
                <div id="update" class="container-fluid">

                    <!--Header of the page. Includes the Product name and edit button-->
                    <div class="row">
                        <div class="col-10">
                            <h5 style="padding-top:10px;">
                               
                            </h5>
                        </div>
                        <div class="col-2" style="padding-top:10px;">
                            <a data-toggle="modal" data-target="#edit">
                                <button class="btn btn-primary" style="float:right;"><i class="fas fa-pencil-alt"></i> Change</button>
                            </a>
                        </div>
                    
                    </div><hr>

                    <!-- Modal to edit the product name -->
                     <div class="modal fade" id="edit" role="dialog">
                    <div class="modal-dialog">
                    <br>
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>  
                        </div>
                    <div class="modal-title" style="text-align:center; font-size:20px; font-weight:bold;">Edit Product Name</div>
                    <div class="modal-body">
                        <form method="post">
                            <textarea class="form-control" id="firstname" style="background-color:transparent;" name="name"><?php echo ucwords($view['product_name']); ?></textarea>

                            <div class="modal-footer" style="text-align:center;">
                            <button type="submit" name="pname" class="btn btn-success" style="margin:auto; display:block;">Edit</button>
                            <button type="button"  data-dismiss="modal" class="btn btn-danger" style="margin:auto; display:block;">Cancel</button>
                            </div>
                        </form>
                    </div>
                        </div>
                </div>
                
                     </div>

                    
                    <!--Form to update the rest of the product's information-->
                    <form method="post">
                        <div class="form-row mb-4">
                            <div class="col">
                                <h6>Final Price</h6><input type="text" placeholder="<?php echo "&#8358;".number_format($view['product_price'],2) ?>" class="form-control" pattern="[0-9]{2,}" title="Entry must be a valid price of 2 or more digits" name="pprice">
                            </div>
                            <div class="col">
                                <h6>Base Price</h6><input type="text" placeholder="<?php echo "&#8358;".number_format($view['old_price'],2); ?>" class="form-control" pattern="[0-9]+([.][0-9]+)?{2,}" title="Entry must be a valid price of 2 or more digits" name="oprice">
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="col">
                                <h6>Quantity</h6><input type="text" placeholder="<?php echo $view['quantity'] ?>" class="form-control" pattern="[0-9]{2,}" title="Entry must be a valid price of 2 or more digits" name="quantity">
                            </div>
                            <div class="col">
                                <h6>Category</h6><input type="text" placeholder="<?php echo ucwords($view['category']); ?>" class="form-control" title="Entry must be a valid price of 2 or more digits" name="oprice" disabled>
                            </div>
                        </div>
                        <h6>Description</h6>
                        <textarea class="form-control" rows="10" name="details"><?php echo $view['details']; ?></textarea><br>
                        <button type="submit" name="update" class="btn btn-primary" style="float:right;"><i class="fas fa-pencil-alt"></i> Update</button>
                    </form>
                </div>

                
                <!--Side div. This containd the product image-->
                <div id="image" class="container-fluid">
                    <h4>Product Image</h4><hr>
                    
                    <img src="../uploads/<?php echo $view['image'] ?>">
                    <br>
                    <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data">
                        <input type="file" accept="image/jpg,image/gif,image/png,image/jpeg" class="form-control" placeholder="Product Image" id="file" name="pimage" style="display:none;">
                        <div class="row">
                            <div class="col-8">
                                <input type="text" class="form-control" onclick="openWin()" placeholder="Select Image" name="change" id="change" value="<?php echo $imagename; ?>" readonly>
                            </div>
                            <div class="col-4">
                                <button class="btn btn-primary" style="width:100%" type="submit" name="image">Change</button>
                            </div>
                        </div>
                    </form>
                    <script>
                            function openWin()
                            {
                                var select=document.getElementById('file').click();
                            }
                            $(document).ready(function(){
                            $('#file').change(function(e){
                                var fileName = e.target.files[0].name;
                                ('The file "' + fileName +  '" has been selected.');
                                //alert(fileName);
                                document.getElementById('change').value=fileName;
                            });
                        });
                            
                        </script>
                    <br>
                </div>
       
                    <div class="row">
                        <div class="col-10">
                            <h5 style="padding-top:10px;">
                                Status: <?php echo ucwords($orders['order_status']);?>
                            </h5>
                        </div>
                        <div class="col-2" style="padding-top:10px;">
                            <a data-toggle="modal" data-target="#edit">
                                <button class="btn btn-primary" style="float:right;"><i class="fas fa-pencil-alt"></i> Change</button>
                            </a>
                        </div>
                    
                    </div><hr>
                    <div class="modal fade" id="edit" role="dialog">
                    <div class="modal-dialog">
                    <br>
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>  
                        </div>
                    <div class="modal-title" style="text-align:center; font-size:20px; font-weight:bold;">Update Order Status</div>
                    <div class="modal-body">
                        <form method="post">
                            <input class="form-control" id="firstname" style="background-color:transparent;" name="name" value="<?php echo ucwords($orders['order_status']); ?>" readonly><br>
                            <select class="form-control" name="change" required>
                                <option value="">Change...</option>
                                <option value="pending">Pending</option>
                                <option value="shipped">Shipped</option>
                                <option value="delivered">Delivered</option>
                            </select>
                            <br><br>
                            <div class="modal-footer" style="text-align:center;">
                            <button type="submit" name="status" class="btn btn-success" style="margin:auto; display:block;">Edit</button>
                            <button type="button"  data-dismiss="modal" class="btn btn-danger" style="margin:auto; display:block;">Cancel</button>
                            </div>
                        </form>
                    </div>
                        </div>
                </div>
                
                     </div>

               
                        <p><b>Order Number: </b><br>
                        Ordered on <br>
                        Total: &#8358; </p>
                        <hr>
                        <div class='row'>
                        <div class='col-6'>
                            <p><b>Shipping:</b></p>
                            <p><b>Address:</b></p>
                        </div>
                        <div class='col-6'>
                            <h5>Payment</h5>
                            <p><b>Payment Method: <br>
                            Items Total: &#8358;<br>
                                Shipping Fee: &#8358;</b> </p>
                        </div>
                    </div> <hr><br>";
               <h4>Items in order</h4><br>
                foreach($order as $row)
                
                        <div class="row"></div>
                        <div class="row" style="width:100%;  border: 1px solid lightgray; border-radius: 6px;" id="order-item">
                                <div class='col-3'>
                                <img id='prod' src='' alt='Card Image' style='height:200px; width:200px;'></div>
                                <div class='col-9'>
                                    <h6 class='card-title' id='p-name'></h6>
                                    <p><span>&#8358;</span></p>
                                </div>
                            </div>&ensp;&ensp;
        
     
            
                <br><br>
                <div class="container-fluid" id="page-container">
                    <br>
                        <p><b>User's E-mail: </b><br>
                        Date Registered <br></p>
                        <p><b>Status: Admin </b><br>
                        <p><b>Status: User </b><br>
                        <hr>
                        <div class='row'>
                        <div class='col-6'>
                            <p><b>First Name:</b></p>
                            <p><b>Last Name:</b></p>
                            <p><b>Gender:</b> </p>
                        </div>
                        <div class='col-6'>
                            <h5>Address</h5>
                            <b>Country:<br>
                            Address:<br>
                                Phone Number:</b></p>
                        </div>
                    </div> <hr><br>
               <h4>Orders</h4><br>
                        <div class="row"></div>
                        <a id="order-list" data-toggle="modal" data-target="#view-orders"><div class="row" style="width:100%;  border: 1px solid lightgray; border-radius: 6px;" id="order-item">
                                
                                <div class='col-md-4 col-3'>
                                <p>Order ID: </p></div>
                                <div class='col-md-4 col-9'>
                                    <h6 class='card-title' id='p-name'>Date Ordered: </h6>
                                    <p>Price: <span>&#8358;</span></p>
                                </div>
                                <div class='col-md-4'>
                                <p>Items in Order: </p></div>
                            </div></a>&ensp;&ensp;
                    
                    <div class="modal fade" id="view-orders<?php echo $key; ?>" role="dialog">
                        <div class="modal-dialog"><br>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>  
                                </div>
                                <div class="modal-title" style="text-align:center; font-size:20px; font-weight:bold;">Items in Order</div>
                                <div class="modal-body">
                                    
                        <div class="row"></div>
                        <div class="row" style="width:100%;  border: 1px solid lightgray; border-radius: 6px;" id="order-item">
                                <div class='col-3'>
                                <img id='prod' src='' alt='Card Image' style='height:100px; width:100px;'></div>
                                <div class='col-9' style='float:right'>
                                    <h6 class='card-title' id='p-name'></h6>
                                    <p><span>&#8358;</span></p>
                                </div>
                            </div>&ensp;&ensp;
                 

                                    <button type="button"  data-dismiss="modal" class="btn btn-danger" style="margin:auto; display:block;">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </body>
</html>