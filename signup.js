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
        var data={user_id:username, email:email, phone_no:phone,  password:password};
        $.post( "../APIs/signupApi.php",data, function( data,status ) {
        console.log(username);
        console.log(data);
        console.log(status);
        var message=JSON.parse(data);
        console.log(message);
        if(message.success=="matno")
            {
                $("#matno_er").html("Matric number already exists bitch!!!!!!!");
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
        var data={user_id:username, email:email, phone_no:phone,  password:password};
        $.post("../APIs/signupApi.php",data, function(data,status){
        console.log(username);
        console.log(data);
        console.log(status);
        });
    });  
    
    $("#other_form").submit(function(event){
        event.preventDefault();
        var username=$("#username").val();
        var email=$("#other_email").val();
        var phone=$("#other_phone").val();
        var country=$("#country").val();
        var password=$("#other_password").val();
        var data={username:username, email:email, phone_no:phone, country:country, password:password};
        $.post("../APIs/signupApi.php",data, function(data,status){
        console.log(username);
        console.log(data);
        console.log(status);
        });
    });  
               
});