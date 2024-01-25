$(document).ready(function(){

    $("#student_form").hide();
    $("#staff_form").hide();
    $("#other_form").hide();
           
    $("#student").click(function(){
        $("#user_type").fadeOut(500, function(){
            $("#student_form").fadeIn(500);
        });
    });
               
   $("#student_back").click(function(){
       $("#student_form").fadeOut(500, function(){
            $("#user_type").fadeIn(500);
        });
    });
               
   $("#staff").click(function(){
        $("#user_type").fadeOut(500, function(){
            $("#staff_form").fadeIn(500);
        });
    });
           
   $("#staff_back").click(function(){
       $("#staff_form").fadeOut(500, function(){
            $("#user_type").fadeIn(500);
        });
    });
               
   $("#other").click(function(){
        $("#user_type").fadeOut(500, function(){
            $("#other_form").fadeIn(500);
        });
    });
               
   $("#other_back").click(function(){
       $("#other_form").fadeOut(500, function(){
            $("#user_type").fadeIn(500);
           });
        });
               
    $("#student_form").submit(function(event){
        event.preventDefault();
        var username=$("#matno").val();
        var email=$("#student_email").val();
        var phone=$("#student_phone").val();
        var password=$("#student_password").val();
        var data={matno:username, email:email, phone_no:phone,  password:password};
        $.post( "../APIs/signupApi.php",data, function( data,status ) {
        console.log(username);
        console.log(data);
        console.log(status);
        var message=JSON.parse(data);
        console.log(message);
        if(message.success=="id")
            {
                $("#matno").addClass("is-invalid");
                $("#matno_er").append("Matric number already exists");
            }
        if(message.success=="email")
            {
                $("#student_email").addClass("is-invalid");
                $("#email_er").append("Email already exists");
            }
        if(message.success=="phone")
            {
                $("#student_phone").addClass("is-invalid");
                $("#phone_er").append("Phone number already exists");
            }
        if(message.success=="user")
            {
                window.location.replace("../html/gallery.php");
                alert("Successfully signed up");
            }
       // $( ".result" ).html( data );
});
        
    });  
    
    $("#staff_form").submit(function(event){
        event.preventDefault();
        var username=$("#staff_id").val();
        var email=$("#staff_email").val();
        var phone=$("#staff_phone").val();
        var password=$("#staff_password").val();
        var data={staffno:username, email:email, phone_no:phone,  password:password};
        $.post( "../APIs/signupApi.php",data, function( data,status ) {
        console.log(username);
        console.log(data);
        console.log(status);
        var message=JSON.parse(data);
        console.log(message);
        if(message.success=="id")
            {
                $("#staff_id").addClass("is-invalid");
                $("#staffno_er").append("Staff ID already exists");
            }
        if(message.success=="email")
            {
                $("#staff_email").addClass("is-invalid");
                $("#staffemail_er").append("E-mail already exists");
            }
        if(message.success=="phone")
            {
                $("#staff_phone").addClass("is-invalid");
                $("#staffphone_er").append("Phone number already exists");
            }
        if(message.success=="user")
            {
                window.location.replace("../html/gallery.php");
                alert("Successfully signed up");
            }
        });
    });  
    
    $("#other_form").submit(function(event){
        event.preventDefault();
        var username=$("#other_name").val();
        var email=$("#other_email").val();
        var phone=$("#other_phone").val();
        var country=$("#country").val();
        var password=$("#other_password").val();
        var data={username:username, email:email, phone_no:phone, country:country, password:password};
        console.log(username);
        $.post( "../APIs/signupApi.php",data, function( data,status ) {
        
        console.log(data);
        console.log(status);
        var message=JSON.parse(data);
        console.log(message);
        if(message.success=="id")
            {
                $("#username").addClass("is-invalid");
                $("#username_er").append("Username already exists");
            }
        if(message.success=="email")
            {
                $("#other_email").addClass("is-invalid");
                $("#otheremail_er").append("Email already exists");
            }
        if(message.success=="phone")
            {
                $("#other_phone").addClass("is-invalid");
                $("#otherphone_er").append("Phone number already exists");
            }
        if(message.success=="user")
            {
               alert("Successfully signed up"); window.location.replace("../html/gallery.php");
            }
        });
    });  
               
});