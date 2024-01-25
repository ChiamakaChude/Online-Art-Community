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
            Admin Mode|Sales
        </title>
        
    </head>
    
    <body onload="<?php //sleep(3);?>">
        <?php include 'admin-nav.php'; ?>
        <br><br>
        <div class="container-fluid" id="page-container">
            
            <div class="row">
                <div class="col-6"><h3 style="padding-top:10px;">Sales</h3></div>
                <div class="col-6" style="padding-top:10px;"><button data-toggle="popover" title="Help" data-content="This platform displayed all products sold with their prices. At the end of the table displays the revenue from the sold products" class="btn btn-warning" style="float:right;">Help <i class="far fa-question-circle"></i></button></div>
            </div>
            <hr>
            
            <p>All()</p>
            <div class="form-inline">
                <a href="../cart.php"><button type="button" class="btn btn-info" data-toggle="tootlip" title="Add to sales. Make order Now">Add</button></a>&ensp;
                <button type="submit" class="btn btn-info" name="export">Export to Excel</button>&ensp;
                <button type="button" class="btn btn-danger">Delete</button>&ensp;
                <select placeholder="Search..." class="form"><option>Select Action</option></select>&ensp;
                <button type="button" class="btn btn-info">Confirm</button>&ensp;
                <button type="button" class="btn btn-info">Filter</button>&ensp;
                
                
                <script>
                $(document).ready(function(){
                  $('[data-toggle="popover"]').popover(); 
                });
                </script>
            </div>
            <br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td><input type="checkbox" class="selectall"></td>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Price(&#8358;)</th>
                        <th>Date</th>
                        <th>Customer</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a href=""><i class="fas fa-eye fa-lg"></i></a></td>
                        </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>