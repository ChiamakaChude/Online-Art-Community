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
                <div class="col-6"><h3 style="padding-top:10px;">Course Registration(ESP 232)</h3></div>
                <div class="col-6" style="padding-top:10px;"><button data-toggle="popover" title="Help" data-content="This platform displayed all orders with their prices and status. At the end of the table displays the revenue from the sold products. Click the eye icons to display more information about these orders" class="btn btn-warning" style="float:right;">Help <i class="far fa-question-circle"></i></button></div>
            </div><hr>
            
            <p>All() | Pending() | Approved() | Declined()</p>
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
                        <th>Matric Number</th>
                        <th>Name</th>
                        <th>Level</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Time</th>
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
        </div>
    </body>
</html>