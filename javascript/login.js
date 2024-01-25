$(document).ready(function(){
    
    $("#login").submit(function(event){
        event.preventDefault();
        var uname=$("#username").val();
        var pass=$("#password1").val();
        var data={uname:uname, pass:pass};
        console.log("its me");
        $.post( "../APIs/loginApi.php",data, function( data,status ) {
        console.log("yolo");
        console.log(uname);
        console.log(pass);
        console.log(data);
        console.log(status);
        //var message=JSON.parse(data);
        //console.log(message);
        if(data.success=="exists")
        {
            alert("Successfully Logged In");
            sessionStorage.setItem("key",uname);
            location.reload();
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
});
