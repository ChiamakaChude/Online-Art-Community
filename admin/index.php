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
            Admin Mode|Dashboard
        </title>
        
        
    </head>
    
    <body onload="<?php //sleep(3);?>">
        <?php include 'admin-nav.php'; ?>
        <br><br>
        <div class="container-fluid" id="page-container">
            
            <h3 style="padding-top:10px;">Admin Dashboard</h3><hr>
            <br>
            <div class="row" style="margin-left:15px;">
               <a href="view-products.php" id="dashcard"><div class="card" style="background-color: darkviolet; opacity:0.9;" id="totalp">
                    <div class="row">
                        <div class="col-6" style="font-size:20px; padding-left:-15px; font-weight:bold; text-align:center;">Total Products <br><br>
                        </div>
                        <div class="col-6" style="font-size:25px;"><i class="fas fa-tags fa-3x" id="dashicons" style="color:#600080;"></i></div>
                    </div>
                </div></a>&ensp;&ensp;
                
                <a id="dashcard" href="events.php"><div class="card" style="background-color: deeppink; opacity:0.9;" id="totalo">
                    <div class="row">
                        <div class="col-6" style="font-size:20px; font-weight:bold; text-align:center;">Current Events <br></div>
                        <div class="col-6" style="font-size:25px;"><i class="fas fa-truck fa-3x" id="dashicons" style="color:#cc0066;"></i></div>
                    </div>
                </div></a>&ensp;&ensp;
                
                <a id="dashcard" href="#"><div class="card" style="background-color: deepskyblue; opacity:0.9;" id="profit">
                    <div class="row">
                        <div class="col-6" style="font-size:20px; font-weight:bold; text-align:center;">Profit <br> &#8358;</div>
                        <div class="col-6" style="font-size:25px;"><i class="far fa-money-bill-alt fa-3x" id="dashicons" style="color:#00a3cc;"><!--&#8358;--></i></div>
                    </div>
                </div></a>&ensp;&ensp;
                <a id="dashcard" href="view-users.php"><div class="card" style="background-color: yellow; opacity:0.9;" id="totalu">
                    <div class="row">
                        <div class="col-6" style="font-size:20px; font-weight:bold; text-align:center;">Users <br></div>
                        <div class="col-6" style="font-size:25px;"><i class="fas fa-users fa-3x" id="dashicons" style="color:#cccc00;"></i></div>
                    </div>
                </div></a>&ensp;&ensp;
            </div>
            <br><br>
            <div class="row" style="margin-left:9px; width:100%;">
                <div class="card" id="dashdet" style="width:57%;">
                    <h4>Summary</h4>
                        <img src="chart.png" class="card-image-bottom" style="height:350px;">
                </div>&ensp;
                <div class="card" id="dashdet" style="width:41%;">
                    <h4>Recent Orders</h4>
                   
                </div>
            </div><br><br>
            
            <div class="row" style="margin-left:9px; width:100%;">
                <div class="card" id="recent">
                    <h3>Recent Products</h3>
                    
                </div>&ensp;&ensp;
                <div class="card" id="recent">
                    <h3>Recent Buyers</h3>
                    
                </div>&ensp;&ensp;
                <div class="card" id="recent">
                    <h3>Something here</h3>
                    
                </div>
            </div>
        </div>
    </body>
</html>