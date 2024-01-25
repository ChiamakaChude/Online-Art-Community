$(document).ready(function(){
        //var fileName;
      $('#eimage').change(function(e){
          var fileName = e.target.files[0].name;
          //('The file "' + fileName +  '" has been selected.');
          $("#eimage-in").val(fileName);
          console.log("hello");
   });                        
       console.log("helliii"); 
    $("#event-form").submit(function(event){
        event.preventDefault();
        console.log("hehehehe");
        var ename=$("#eventname").val();
        var location=$("#location").val();
        var day=$("#eventday").val();
        var month=$("#eventmonth").val();
        var year=$("#eventyear").val();
        var time=$("#eventtime").val();
        var image=$("#eimage-in").val();
        var req=$("#requirements").val();
        console.log("hehjytrdgfhe");
        var data={ename:ename, location:location, day:day, month:month, year:year, time:time, image:image, requirements:req};
        console.log("you are fine");
        $.post( "../admin_API/events_API.php",data, function( data,status ) {
        console.log(time);
        console.log(day);
        console.log(month);
        console.log(year);
        console.log(data);
        console.log(status);
        //var message=JSON.parse(data);
        //console.log(message);
        if(data.success=="set")
        {
            alert("Event successfully added");
            $("#event-form").trigger("reset");
            $("#eimage-form").submit();
            //location.reload();
        }
        else if (data.success!="set")
            {
                alert("Something went wrong. Oops!!");
                $("#product-form").trigger("reset");
            }
        });
    });
           
    //});
    
    //loadcat();
});

function openWin()
{
    var select=document.getElementById('eimage').click();
}