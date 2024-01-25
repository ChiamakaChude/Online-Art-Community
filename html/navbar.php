<!DOCTYPE html>
<?php
  /*  $search="";
    function test($data)
            {
                $data=trim($data);
                $data=stripslashes($data);
                $data=htmlspecialchars($data);
                return $data;
            }
    if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['search']))
    {
        $search=test($_POST["search"]);
        if(empty($_POST['search']))
        {
            $message="You cant search for a null product";
            echo "<script type='text/javascript'>alert('$message');</script>"; 
        }
        else
        {
            $_SESSION['search']=$search;
            echo "<script>window.location.href='search-result.php';</script>";
        }
    }*/
?>
<script src="../javascript/login.js"></script>
<script src="../javascript/login_session.js"></script>
<script src="../javascript/logout.js"></script>
<script src="../javascript/tutorials-list.js"></script>
<nav class="fixed-top">
    <nav class="navbar navbar-expand-md flex-nowrap navbar-new-top" id="nav1">
            <ul class="nav navbar-nav" id="nav1ul">
                <li><a id="fb" href="https://www.facebook.com/chiamakachude"><i class="fab fa-facebook-f"  aria-hidden="true"></i></a></li>
                <li><a id="twttr" href="https://twitter.com/chiamakachude"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                <li><a id="gplus"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
                <li><a id="ig" href="https://instagram.com/maraji_"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                <li><a id="pin" href="https://pinterest.com/chiamakachude/"><i class="fab fa-pinterest" aria-hidden="true"></i></a></li>
            </ul>
           
            <ul class="nav navbar-nav mr-auto"></ul>
            <ul class="navbar-nav flex-row" id="nav1second">
                <li class="form-group has-search" id="search">
                    <form method="post" action="">
                    <input type="search" placeholder="Search.." name="search">
                    <button type="submit" id="search-btn" name="submit"><i class="fa fa-search fa-lg"></i></button>
                    </form>
                </li>
                <li class="nav-item" id="sign"><a data-toggle="modal" data-target="#signin"><p>Login</p></a></li>
                <li style="color:white" id="bar">|</li>
                <li class="nav-item" id="sign"><a href="signup.php"><p>Register</p></a></li>
            </ul>
    </nav>
        
        
    <nav class="navbar navbar-expand-md  navbar-new-bottom" id="nav">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#pets" aria-controls="nav-collapse" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars fa-lg"></i></button>
        <a href="" class="navbar-brand"><img src="logo1.png" alt="Logo" id="logo"></a>

        <div class="collapse navbar-collapse" id="pets">
        <ul class="navbar-nav mr-auto w-100">
            <li class="nav-item active"><a class="nav-link" data-toggle="tootlip" data-placement="bottom" title="Home" href="index.php"><i class="fa fa-home fa-lg"><span class="sr-only">current</span></i></a></li>
                
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" id="link">Tutorials</a>
                <div id="tutslist" class="dropdown-menu">
                </div>
            </li>
                
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" id="link">Store</a>
                <div class="dropdown-menu">
                    <a href="products_display.php?animal=cat&category=dry food" class="dropdown-item">Dry food</a>
                    <a href="products_display.php?animal=cat&category=wet food" class="dropdown-item">Wet food</a>
                </div>
                </li>
               
            <li class="nav-item dropdown"><a href="events_page.php" class="nav-link" id="link">Events</a></li>
                
            <li class="nav-item dropdown"><a href="gallery.php" class="nav-link" id="link">Gallery</a></li>
            <li><a href="find_a_vet.php">About</a></li>
                
                           
            <ul class="nav navbar-nav mr-auto"> </ul>
            <!-- Display profile and cart icons-->
            <li id="profile-list" class="nav-item dropdown">
            </li>
            
            <li class="nav-item"><a class="nav-link" data-toggle="tootlip" data-placement="bottom" title="Cart" href="cart.php" id="end"><i class="fas fa-shopping-cart fa-lg" style="font-size:27px;"></i><span class="badge badge-notify" style="font-size:10px;"></span></a></li>
            </ul>
        </div> 
    </nav>
</nav>
<div class="modal fade" id="signin" role="dialog">
    <div class="modal-dialog">
    <br>
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" id="cat-close" class="close" data-dismiss="modal">&times;</button>  
        </div>
        <div class="modal-title" style="text-align:center; font-size:20px; font-weight:bold;">Sign In</div>
        <div class="modal-body">
            <form method="post" id="login" enctype = "multipart/form-data">
                <input type="text" placeholder="Username" class="form-control" id="username" required>
                <div id="userer" class="invalid-feedback">
                </div>
                <br>
                
                <input type="password" placeholder="Password" class="form-control" id="password1" required>
                <div id="passer" class="invalid-feedback">
                </div>
                <br>
                
                <div class="modal-footer" style="text-align:center;">
                    <button type="submit" name="create" class="btn btn-primary" style="margin:auto; display:block;">Sign In</button>
                    <button type="button"  data-dismiss="modal" class="btn btn-danger" style="margin:auto; display:block;">Cancel</button>
                </div>
            </form>
                       
        </div>
    </div>
    </div>
</div>
    
    <div class="modal fade" id="logout" role="dialog">
    <div class="modal-dialog">
    <br>
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" id="cat-close" class="close" data-dismiss="modal">&times;</button>  
        </div>
        <div class="modal-title" style="text-align:center; font-size:20px; font-weight:bold;">Are you sure you want to logout?</div>
        <div class="modal-body">
          
                <div class="modal-footer" style="text-align:center;">
                    <button type="submit" name="create" class="btn btn-primary" style="margin:auto; display:block;">Yes</button>
                    <button type="button"  data-dismiss="modal" class="btn btn-danger" style="margin:auto; display:block;">Cancel</button>
                </div>
                       
        </div>
    </div>
    </div>
</div>
<br><br><br>