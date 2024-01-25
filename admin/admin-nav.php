<script>
            function openNav() 
            {
                document.getElementById("side").style.width = "270px";
                //document.getElementById("page-container").style.marginLeft = "270px";
            }

            /* Set the width of the side navigation to 0 */
            function closeNav() 
            {
                document.getElementById("side").style.width = "0";
                document.getElementById("page-container").style.marginLeft = "auto";
            }
        </script>

<nav class="navbar navbar-expand-md fixed-top">
            <div id="side" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <br><br><br>
                <ul>
                <li><a href="../admin"><i class="fas fa-home"></i> Home</a></li>
                 <li><a class="dropdown-toggle" href="#courses" data-toggle="collapse"><i class="fas fa-tags"></i> Courses</a>
                    <div id="courses" class="collapse">
                    <ul>
                        <li><a href="course-registration.php"><i class="fas fa-plus"></i> Course Registration</a></li>
                        <li><a href="view-courses.php"><i class="fas fa-eye"></i> View Courses</a></li>
                    </ul>
                    </div>    
                </li>
                <li><a href="events.php"><i class="fas fa-truck"></i> Events</a>
                </li>
                <li><a class="dropdown-toggle" href="#products" data-toggle="collapse"><i class="fas fa-tags"></i> Inventory</a>
                    <div id="products" class="collapse">
                    <ul>
                        <li><a href="add-products.php"><i class="fas fa-plus"></i> New Item</a></li>
                        <li><a href="view-products.php"><i class="fas fa-eye"></i> View Items</a></li>
                    </ul>
                    </div>    
                </li>
                <li><a href="view-users.php"><i class="fas fa-users"></i> Users</a></li>
                <li><a href="#"><i class="fas fa-poll"></i> Reports</a></li>
                </ul>
            </div>
            <span onclick="openNav()" id="open" class="icon"><img src="logo1.png" alt="Logo" id="logo"></span>
            &ensp;&ensp;
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-collapse" aria-controls="nav-collapse" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars fa-lg"></i></button>
            <ul class="navbar-nav mr-auto w-100">
           
            
            <div class="form-group has-search">
                <form method="post">
                    <input type="search" name="search" placeholder="Search..." id="search"><button type="submit" id="search-btn"><i class="fas fa-search"></i></button>
                </form>
            </div>
                <div class="collapse navbar-collapse" id="nav-collapse">
             <ul class="nav navbar-nav mr-auto"> </ul>
            <ul class="navbar-nav" id="left-nav">
                <li class="nav-item active"><a class="nav-link" data-toggle="tootlip" data-placement="bottom" title="Add Product" href="add-products.php"><i class="fas fa-plus fa-lg"><span class="sr-only">current</span></i></a></li>
                <li class="nav-item active"><a class="nav-link" data-toggle="tootlip" data-placement="bottom" title="Home" href="../index.php"><i class="fas fa-bell fa-lg"><span class="sr-only">current</span></i></a></li>
                <li class="nav-item active"><a class="nav-link" data-toggle="tootlip" data-placement="bottom" title="Home" href="../html/gallery.php"><i class="fas fa-sign-out-alt fa-lg"><span class="sr-only">current</span></i></a></li>
            </ul>
        </div>
        </ul>
        </nav>