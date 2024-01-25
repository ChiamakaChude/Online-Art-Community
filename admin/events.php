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
    <script src="../javascript/events.js"></script>
    <!-- Place your stylesheet here-->
    <link href="admin.css" rel="stylesheet">
                    
        <title>
            Admin Mode|Events
        </title>
        
    </head>
    
    <body onload="<?php //sleep(3);?>">
        <?php include 'admin-nav.php'; ?>
        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_FILES['eimage']['name']))
            {
                $image=$_FILES['eimage']['name'];
                $target_dir="../image_uploads";
                $target_file=basename($_FILES['eimage']['name']);
                //echo "<br><br><br><br><br>".$image;
                move_uploaded_file($_FILES['eimage']['tmp_name'],$target_dir."/".$target_file);
            }  
        ?>
        <br><br>
        <div class="container-fluid" id="page-container">
            <div class="row">
                <div class="col-8"><h3 style="padding-top:10px;">Events</h3></div>
                <div class="col-4" style="padding-top:10px;">
                    <a data-toggle="modal" data-target="#newevent"><button class="btn btn-primary" style="float:left; margin-left:145px;">New Event <i class="fas fa-plus"><span class="sr-only">current</span></i></button></a> 
                <button data-toggle="popover" title="Help" data-content="This platform displayed all orders with their prices and status. At the end of the table displays the revenue from the sold products. Click the eye icons to display more information about these orders" class="btn btn-warning" style="float:right;">Help <i class="far fa-question-circle"></i></button></div>
            </div><hr>
            
            <p>All() | Pending() | Shipped() | Delivered()</p>
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
            <div id="table"></div>
            <!--<table id="event-table" class="table table-striped">
                
                <thead>
                    <tr>
                        <td><input type="checkbox"></td>
                        <th>Event ID</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Requirements</th>
                        <th>Poster</th>
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
                            <td></td>
                            <td><a href=""><i class="fas fa-eye fa-lg"></i></a></td>
                        </tr>
                      
                </tbody>
            </table>-->
             <div class="modal fade" id="newevent" role="dialog">
                <div class="modal-dialog">
                <br>
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>  
                    </div>
                    <div class="modal-title" style="text-align:center; font-size:20px; font-weight:bold;">New Event</div>
                    <div class="modal-body">
                        <form method="post" id="event-form" enctype="multipart/form-data">
                            <input class="form-control" id="eventname" max="30" type="text" placeholder="Event Name" required><br>
                            <input class="form-control" id="location" max="30" type="text" placeholder="Location" required><br>
                            <div class="form-row">
                                <div class="col">
                                    <select class="form-control" id="eventday" required>
                                        <option>- Day -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select><br>
                                </div>
                                <div class="col">
                                    <select class="form-control" id="eventmonth" required>
                                        <option>- Month -</option>
                                        <option value="January">January</option>
                                        <option value="Febuary">Febuary</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select><br>
                                </div>
                                <div class="col">
                                    <select class="form-control" id="eventyear" placeholder="Year">
                                        <option>- Year -</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>    
                                        <option value="2030">2030</option>    
                                    </select><br>
                                </div>
                            </div>
                            <input class="form-control" id="eventtime" type="time" placeholder="time"><br>
                            <div class="form-row mb-4">
                            <div class="col-10">
                                <input type="text" class="form-control" placeholder="Image" id="eimage-in" readonly>
                            </div>
                            <div class="col-2">
                                <button type="button" onclick="openWin()" class="btn btn-primary" id="open" style="width:100%;">Select</button>
                            </div>
                            <script>
                                /*function openWin()
                                {
                                    var select=document.getElementById('cimage').click();
                                }
                                $(document).ready(function(){
                                $('#cimage').change(function(e){
                                    var fileName = e.target.files[0].name;
                                    //('The file "' + fileName +  '" has been selected.');
                                    document.getElementById('cimage-in').value=fileName;
                                });
                            });*/

                            </script>
                        </div>
                            <textarea class="form-control" id="requirements" style="background-color:transparent;" name="nbrand" placeholder="Requirements"></textarea>

                            <div class="modal-footer" style="text-align:center;">
                            <button type="submit" name="create" class="btn btn-primary" style="margin:auto; display:block;">Create</button>
                            <button type="button"  data-dismiss="modal" class="btn btn-danger" style="margin:auto; display:block;">Cancel</button>
                            </div>
                        </form>
                    </div>
                        </div>
                </div>
                
                     </div>
            <form method="post" id="eimage-form" enctype="multipart/form-data">
                <input type="file" accept="image/jpg,image/gif,image/png,image/jpeg" class="form-control" placeholder="Image" id="eimage" name="eimage" style="display:none;">
            </form>
        </div>
           <div class="modal fade" id="delete" role="dialog">
    <div class="modal-dialog">
    <br>
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" id="cat-close" class="close" data-dismiss="modal">&times;</button>  
        </div>
        <div class="modal-title" style="text-align:center; font-size:18px; font-weight:bold;">Are you sure you want to delete this event?</div>
        <div class="modal-body">
          
                <div class="modal-footer" style="text-align:center;">
                    <button type="submit" id="yes" name="create" class="btn btn-primary" style="margin:auto; display:block;">Yes</button>
                    <button type="button"  data-dismiss="modal" class="btn btn-danger" style="margin:auto; display:block;">Cancel</button>
                </div>
                       
        </div>
    </div>
    </div>
</div>
    </body>
</html>