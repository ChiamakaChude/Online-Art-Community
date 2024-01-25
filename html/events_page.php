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
        <script src="../js/jquery-3.5.1.min.js"></script>
        <script src="../javascript/signup.js"></script>
        <script src="../js/jquery.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../javascript/event-display.js"></script>
        <!-- Place your stylesheet here-->
        <link href="../art_community.css" rel="stylesheet">
                    
        <title>
            Art Plus|Events
        </title>
    </head>
    <body id="event-body">
        <div class="container">
        <?php include "navbar.php"; ?>
        <br><br>
            <h1 style="color:white;">EVENTS!!!!!!!!!</h1><br>
            <div id="events">
                <div class="card" id="event-list">
                    <a data-toggle="modal" data-target="#event-details"><div class="card">
                        <div class="card-body">
                            <h4 class="card-title" id="event_title">Event title</h4>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="card-text">Location</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="card-text">Date <br>Time</p>
                                </div>
                            </div>
                        </div>
                        </div></a><br>
                </div>
            </div>
            <div id="tickets">
                <div class="card" id="ticket-list">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" id="event_title">Tickets</h4>
                            <div class="column">
                                <div class="col-sm-6">
                                    <p class="card-text">Location</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="card-text">Date <br>Time</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="modal fade" id="event-details" role="dialog">
            <div class="modal-dialog">
            <br>
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>  
                    </div>
                    <div class="modal-title" id="evtitle" style="text-align:center; font-size:20px; font-weight:bold;"></div>
                    <div class="modal-body">
                        <p class="card-text" id="req"></p>
                        <div class="modal-footer" style="text-align:center;">
                            <button type="button" class="btn btn-primary" style="margin:auto; display:block;">Apply</button>
                            <button type="button"  data-dismiss="modal" class="btn btn-danger" style="margin:auto; display:block;">OK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>