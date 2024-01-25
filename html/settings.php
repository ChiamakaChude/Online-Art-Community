<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="../fontawesome-free-5.9.0-web/css/all.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="icon" href="../artplus1edited.png">
        <script src="../javascript/signup.js"></script>
        <script src="../js/jquery.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../javascript/update-profile.js"></script>
        <!-- Place your stylesheet here-->
        <link href="../art_community.css" rel="stylesheet">
                    
        <title>
            Art Plus|Profile
        </title>
    </head>
    <body>
    <div class="container-fluid">
        <?php include "navbar.php"; ?>
        <script>
                document.getElementById("side").style.width = "270px";
                //document.getElementById("page-container").style.marginLeft = "270px";
        </script>
          <div id="side" class="sidenav">
                <br><br><br><br>
                <ul>
                <li><a href="../admin">Edit Profile</a></li>
                 <li><a href="#courses" data-toggle="collapse">Change password</a></li>
                <li><a href="events.php">Skills</a>
                </li>
                <li><a href="#products" data-toggle="collapse">Emails</a></li>
                <li><a href="view-users.php">Manage Contacts</a></li>
                <li><a href="#">Privacy and Security</a></li>
                </ul>
            </div>
            &ensp;&ensp;
        <br><br><br>
        <div id="second">
            <h2 style="text-align:center">Update Profile</h2><br>
        <form method="post" id="update-form" enctype = "multipart/form-data">
            <div class="form-row mb-4">
                <div class="col">
                    <label for="uname">Username</label>
                    <input type="text" placeholder="" id="uname" class="form-control" readonly>
                </div>
                <div class="col">
                    <label for="email">Email address</label>
                    <input type="email" placeholder="" id="email" class="form-control" readonly>
                </div>
            </div>
            <div class="form-row mb-4">
                <div class="col">
                    <label for="fname">First Name</label>
                    <input type="text" placeholder="" id="fname" class="form-control">
                </div>
                <div class="col">
                    <label for="lname">Last Name</label>
                    <input type="text" placeholder="" id="lname" class="form-control">
                </div>
            </div>
            <div class="form-row mb-4">
                <div class="col">
                    <label for="number">Phone Number</label>
                    <input type="text" placeholder="" id="number" class="form-control" pattern="[0-9]{11}">
                </div>
                <div class="col">
                    <label for="country">Country</label>
                    <input type="text" placeholder="" id="country" class="form-control">
                </div>
                <div class="col">
                    <label for="gender">Gender</label>
                    <input type="text" placeholder="" id="gender" class="form-control">
                </div>
            </div>
            <br>
            <label for="dob">Date of Birth</label>
            <input type="text" placeholder="" id="dob" class="form-control">
            <br>
            <button type="submit" class="btn btn-warning" style="margin: 0 auto; display:block; font-size:20px" name="submit">Update</button>
        </form>
        </div>
        </div>
    </body>
</html>