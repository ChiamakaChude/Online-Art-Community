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
        <br><br>
        <div id="details">
            <div class="row">
                <div class="col-sm-2"><img src="../images/britz.mcmaster.ca-images-nouserimage.gif-image_view_fullscreen.gif" id="profile-pic"></div>
                <div class="col-sm-4">
                    <h2><b>ID</b></h2>
                    <h5>Fisrt name, Last name</h5>
                    <p>Bio: I love God and God loves me too. Peace everyone :)</p>
                    <a><button type="button" id="edit-but" class="btn btn-primary">Edit &ensp; <i class="fas fa-pencil-alt fa-lg"></i></button></a>
                </div>
                <div class="col-sm-2" style="float:right">
                    <a href="course-reg.php"><button class="btn btn-warning">Course Registeration</button></a>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-md  navbar-new-bottom" id="nav3">
        <ul class="navbar-nav mr-auto w-100 nav nav-pills">
            <li class="nav-item"><a data-toggle="tab" href="#clipboard" id="clipboard-link">Clipboard</a></li>
                
            <li class="nav-item"><a data-toggle="tab" href="#works" id="works-link">Works</a></li>
                
            <li class="nav-item"><a data-toggle="tab" href="#tutorials" id="tutorials-link">Tutorials</a></li>
               
            <li class="nav-item"><a data-toggle="tab" href="#likes" id="likes-link">Likes</a></li>
                
            <li class="nav-item"><a data-toggle="tab" href="#topics" id="topics-link">Topics</a></li>
        </ul>
        </nav>
    
        <br>
        <div class="tab-content">
            <div id="clipboard" class="tab-pane fade in active">
                <div id="clips"><p>Clipboard!!</p></div>
            </div>
            
            <div id="works" class="tab-pane fade">
                <div class="card-columns">
                    <div class="card bg-warning">
                        <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="tutorials" class="tab-pane fade">
            <br>
                <div class="card-columns">
                    <div class="card bg-primary">
                        <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="likes" class="tab-pane fade">
                <div class="card-columns">
                    <div class="card bg-danger">
                        <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="topics" class="tab-pane fade">
                <div id="topic"><p>Topics!!</p></div>
            </div>
        </div>
        
        
        
        <script>
            /*$(document).ready(function(){
                $("#works").hide();
                $("#tutorials").hide();
                $("#likes").hide();
                $("#topics").hide();
                $("#clipboard-link").css("background-color","#b38f00");
            
            $("#works-link").click(function(){
            //location.reload();
            $("#works-link").css("background-color","#b38f00");
            $("#works-link,#clipboard-link,#likes-link,topics-link").css("background-color","transparent");
            //$("#clipboard-link,#likes-link,#tutorials-link,topics-link").hover(function(){$(this).css("background-color","#e6b800")});
            $("#clipboard,#tutorials,#likes,#topics").hide(function(){
            $("#works").fadeIn(500);
            });
            });
            
            $("#tutorials-link").click(function(){
            $("#tutorials-link").css("background-color","#b38f00");
            //$("#works-link,#clipboard-link,#likes-link,topics-link").css("background-color","transparent");
            $("#clipboard,#works,#likes,#topics").hide(function(){
            $("#tutorials").fadeIn(500);
            });
            });
                
            $("#likes-link").click(function(){
            $("#likes-link").css("background-color","#b38f00");
            //$("#works-link,#clipboard-link,#tutorials-link,topics-link").css("background-color","transparent");
            $("#clipboard,#works,#tutorials,#topics").hide(function(){
            $("#likes").fadeIn(500);
            });
            });
                
            $("#topics-link").click(function(){
            $("#topics-link").css("background-color","#b38f00");
            //$("#works-link,#clipboard-link,#likes-link,#tutorials-link").css("background-color","transparent");
            $("#clipboard,#works,#tutorials,#likes").hide(function(){
            $("#topics").fadeIn(500);
            });
            });
                
            $("#clipboard-link").click(function(){
            $("#clipboard-link").css("background-color","#b38f00");
            //$("#works-link,#likes-link,#tutorials-link,topics-link").css("background-color","transparent");
            $("#works,#tutorials,#likes,#topics").hide(function(){
            $("#clipboard").fadeIn(500);
            });
            });
    });*/
        </script>
    </div>
    </body>
</html>