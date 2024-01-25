$(document).ready(function(){
    if(sessionStorage.getItem("key")!=null)
        {
            
            //console.log("hello");
        var data={sess:sessionStorage.getItem("key")};
        //console.log("its me");
        $.post( "../APIs/profileApi.php",data, function( data,status ) {
        //console.log("yolo");
        console.log(data);
        console.log(status);
        //var message=JSON.parse(data);
        //console.log(message);
        if(data.error==false)
            {
                //console.log(data.data[0].id);
                for (i=0;i<data.data.length;i++)
                    {
                        $("#uname").attr("placeholder",data.data[i].id);
                        $("#email").attr("placeholder",data.data[i].email);
                        $("#fname").attr("placeholder",data.data[i].firstname);
                        $("#lname").attr("placeholder",data.data[i].surname);
                        $("#number").attr("placeholder",data.data[i].phone);
                        $("#country").attr("placeholder",data.data[i].country);
                        $("#gender").attr("placeholder",data.data[i].gender);
                        $("#dob").attr("placeholder",data.data[i].dob);
                    }
            }
            
    });
            
        $("#update-form").submit(function(event){
        event.preventDefault();
        var fname=$("#fname").val();
        var lname=$("#lname").val();
        var number=$("#number").val();
        var country=$("#country").val();
        var gender=$("#gender").val();
        var data={fname:fname, lname:lname, number:number, country:country, gender:gender, sess:sessionStorage.getItem("key")};
        console.log("its me");
        $.post( "../APIs/update-profileApi.php",data, function( data,status ) {
        console.log("yolo");
        console.log(data);
        console.log(status);
        //var message=JSON.parse(data);
        //console.log(message);
        if(data.success=="done")
        {
            location.reload();
        }
        
});
});
        }
    });