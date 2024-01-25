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
        <script src="../javascript/profile.js"></script>
        <!-- Place your stylesheet here-->
        <link href="../art_community.css" rel="stylesheet">
                    
        <title>
            Art Plus|Profile
        </title>
    </head>
    <body>
    <div class="container-fluid">
        <?php include "navbar.php"; ?>
        </div>
        <br><br>
         <form method="post" id="other_form">
            <div class="row">
                <div class="col-sm-3" style="text-align:left"><i class="fa fa-arrow-left fa-lg" id="other_back"></i></div>
                <div class="col-sm-6"><h5 style="text-align:center">Course Registration</h5></div></div><br>
            <input type="text" class="form-control" placeholder="Username" id="other_name" maxlength="20" required/><br>
            
            
            <div class="form-group form-inline">
                <select class="form-control" name="country" id="country">
                    <option>First Choice</option>
                </select>
                
                <select class="form-control" name="country" id="country">
                    <option>Second Choice</option>
                </select>
            </div>
            
            <input type="password" class="form-control" placeholder="Password" name="password" id="other_password" maxlength="30" pattern="(?=.*\d)(?=.*[a-zA-Z]).{8,30}" title="Password must contain at least 1 letter and 1 number"  required/>
            
            <br>
            
            <input type="submit" class="btn btn-primary" id="other_register" name="register" value="Sign Up" />
            <button type="reset" class="btn btn-danger" id="cancel">Cancel</button>
        </form>
    </body>
</html>