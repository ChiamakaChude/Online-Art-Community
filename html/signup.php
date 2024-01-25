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
        <script src="../js/jquery.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <!-- Place your stylesheet here-->
        <link href="../art_community.css" rel="stylesheet">
        <script src="../javascript/signup.js"></script>
        <title>Html</title>
        
        <br><br>
    </head>
    <body>
        <?php include "navbar.php"?>
        <form id="user_type">
            <h5>Select User Type</h5>
            <input type="button" id="student" class="btn btn-primary" class="form-control" value="Student"><br>
            <input type="button" id="staff" class="btn btn-primary" class="form-control" value="Staff"><br>
            <input type="button" id="other" class="btn btn-primary"class="form-control" value="Others">
        </form>
 
        
        <p id="data"></p>
        <form method="post" id="student_form">
            <div class="row">
                <div class="col-sm-3" style="text-align:left"><i class="fa fa-arrow-left fa-lg" id="student_back"></i></div>
                <div class="col-sm-6"><h5 style="text-align:center">STUDENT</h5></div></div><br>
            <input type="text" class="form-control" placeholder="Matriculation Number" name="matno" id="matno" pattern="[Aa]+[Uu]+[0-9]{5}" title="au/AU + 5 digits"  required/>
            <p id="matno_er" class="invalid-feedback"></p>
            <br>
            
            <input type="email" class="form-control" placeholder="E-mail" name="email" id="student_email" required/>
            <p id="email_er" class="invalid-feedback"></p><br>
            
            <div class="form-group form-inline">
                <input type="tel" class="form-control" placeholder="Phone Number" name="phone" id="student_phone" maxlength="40" pattern="[0-9]{11}" title="11 digit phone number required" required/>&ensp;&ensp;&ensp;
                <p id="phone_er" class="invalid-feedback"></p>
                
            </div>
            <input type="password" class="form-control" placeholder="Password" name="password" id="student_password" maxlength="30" pattern="(?=.*\d)(?=.*[a-zA-Z]).{8,30}" title="Password must contain at least 1 letter and 1 number"  required/>
            
            <br>
            
            <input type="submit" class="btn btn-primary" id="student_register" name="register" value="Sign Up" />
            <button type="reset" class="btn btn-danger" id="cancel">Cancel</button>
            <p style="text-align:center">Creating this account means that you have agreed with our <b>Terms of Service</b> and <b>Privacy Policy</b></p>
        </form>
        
        <form method="post" id="staff_form">
            <div class="row">
                <div class="col-sm-3" style="text-align:left"><i class="fa fa-arrow-left fa-lg" id="staff_back"></i></div>
                <div class="col-sm-6"><h5 style="text-align:center">STAFF</h5></div></div><br>
            <input type="text" class="form-control" placeholder="Staff ID" name="staff_id" id="staff_id" pattern="[Aa]+[Uu]+[Ss]+[0-9]{5}" title="aus/AUS + 5 digits"  required/>
            <p id="staffno_er" class="invalid-feedback"></p><br>
            
            <input type="email" class="form-control" placeholder="E-mail" name="email" id="staff_email" required/>
            <p id="staffemail_er" class="invalid-feedback"></p><br>
            
            <div class="form-group form-inline">
                <input type="tel" class="form-control" placeholder="Phone Number" name="phone" id="staff_phone" maxlength="40" pattern="[0-9]{11}" title="11 digit phone number required" required/>&ensp;&ensp;&ensp;
                <p id="staffphone_er" class="invalid-feedback"></p>
                
                <input type="password" class="form-control" placeholder="Password" name="password" id="staff_password" maxlength="30" pattern="(?=.*\d)(?=.*[a-zA-Z]).{8,30}" title="Password must contain at least 1 letter and 1 number"  required/>
                
            </div>
            
            
            <br>
            
            <input type="submit" class="btn btn-primary" id="staff_register" name="register" value="Sign Up" />
            <button type="reset" class="btn btn-danger" id="cancel">Cancel</button>
            <p style="text-align:center">Creating this account means that you have agreed with our <b>Terms of Service</b> and <b>Privacy Policy</b></p>
        </form>
          
        <form method="post" id="other_form">
            <div class="row">
                <div class="col-sm-3" style="text-align:left"><i class="fa fa-arrow-left fa-lg" id="other_back"></i></div>
                <div class="col-sm-6"><h5 style="text-align:center">OTHER</h5></div></div><br>
            <input type="text" class="form-control" placeholder="Username" id="other_name" maxlength="20" required/>
            <p id="username_er" class="invalid-feedback"></p><br>
            
            <input type="email" class="form-control" placeholder="E-mail" name="email" id="other_email" required/>
            <p id="otheremail_er" class="invalid-feedback"></p><br>
            
            <div class="form-group form-inline">
                <input type="tel" class="form-control" placeholder="Phone Number" name="phone" id="other_phone" maxlength="40" pattern="[0-9]{11}" title="11 digit phone number required" required/>&ensp;&ensp;&ensp;
                <p id="otherphone_er" class="invalid-feedback"></p>
                
                <select class="form-control" name="country" id="country">
                    <option value="">Select Country...</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Angola">Angola</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Australia">Australia</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Benin">Benin</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Cote dIvoire">Cote d'Ivoire</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Chad">Chad</option>
                    <option value="China">China</option>
                    <option value="Congo">Congo</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Egypt">Egypt</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="France">France</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Greece">Greece</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Hungary">Hungary</option>
                    <option value="India">India</option>
                    <option value="Iran">Iran</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Italy">Italy</option>
                    <option value="Japan">Japan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lybia">Lybia</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Mali">Mali</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Namibia">Namibia</option>
                    <option value="Netherlands">Netherlands</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="North Korea">North Korea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Russia">Russia</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="South Africa">South Africa</option>
                    <option value="South Korea">South Korea</option>
                    <option value="Spain">Spain</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Togo">Togo</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Uganda">Uganda</option>
                    <option value="United Arab Emirates">United Arab Emirates</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States of America">United States of America</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                </select>
            </div>
            
            <input type="password" class="form-control" placeholder="Password" name="password" id="other_password" maxlength="30" pattern="(?=.*\d)(?=.*[a-zA-Z]).{8,30}" title="Password must contain at least 1 letter and 1 number"  required/>
            
            <br>
            
            <input type="submit" class="btn btn-primary" id="other_register" name="register" value="Sign Up" />
            <button type="reset" class="btn btn-danger" id="cancel">Cancel</button>
            <p style="text-align:center">Creating this account means that you have agreed with our <b>Terms of Service</b> and <b>Privacy Policy</b></p>
        </form>
    </body>
</html>