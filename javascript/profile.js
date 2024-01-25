$(document).ready(function(){
    sessionStorage.getItem("key");
    
        var data={sess:sessionStorage.getItem("key")};
        console.log(data);
        $.post( "../APIs/profileApi.php",data, function( data,status ) {
        console.log("yolo");
        console.log(data);
        console.log(status);
        //var message=JSON.parse(data);
        //console.log(message);
        if(data.success=="exists")
        {
            alert("Successfully Logged In");
            sessionStorage.setItem("key",uname);
            window.location.replace("../html/index.php");
            //location.reload();
        }
        else if (data.success=="p_notexists")
        {
            //alert("Incorrect Password!");
            $("#password1").addClass("is-invalid");
            $("#passer").append("Incorrect Password");
        }
        else if (data.success=="notexists")
        {
            //alert("Username Does Not Exist");
            $("#username").addClass("is-invalid");
            $("#userer").append("Username does not exist");
        }
        });
});