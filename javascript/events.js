$(document).ready(async function(){
        //var fileName;
      $('#eimage').change(function(e){
          var fileName = e.target.files[0].name;
          //('The file "' + fileName +  '" has been selected.');
          $("#eimage-in").val(fileName);
//    });                        
        
    $("#event-form").submit(function(event){
        event.preventDefault();
        var ename=$("#eventname").val();
        var location=$("#location").val();
        var day=$("#eventday").val();
        var month=$("#eventmonth").val();
        var year=$("#eventyear").val();
        var time=$("#eventtime").val();
        var image=$("#eimage-in").val();
        var req=$("#requirements").val();
        var data={ename:ename, location:location, day:day, month:month, year:year, time:time, image:image, requirements:req};
        console.log("its me");
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
           
    });
    
    loadevent();
});

function eventlist()
{
    var settings = {
  "url": "../admin_API/view-events_API.php",
  "method": "POST",
  "timeout": 0,
  "headers": {
    "Content-Type": "application/x-www-form-urlencoded"
  },
};
    return new Promise(resolve=>{
      $.ajax(settings).done(function (response) {
    resolve(response);
});  
    });
}

async function loadevent()
{
    var data=await eventlist();
    $(data).ready(function(){
        console.log(data);
        if(data.error==true)
            {
                $("#table").append(`
                    Error encountered`
                );
            }
        if(data.error==false)
            {
                $("#table").append(`
                <table id="event-table" class="table table-striped">
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
                <tbody id="eventsview">
                
                </tbody>
                </table>
                `);
                for (i=0;i<data.data.length;i++)
                    {
                        $("#eventsview").append(`
                        <tr style="cursor:pointer" id="showprod">
                        <td><input type="checkbox"></td>
                        <td>`+data.data[i].id+`</td>
                        <td>`+data.data[i].name+`</td>
                        <td>`+data.data[i].location+`</td>
                        <td>`+data.data[i].date+`</td>
                        <td>`+data.data[i].time+`</td>
                        <td>`+data.data[i].requirements+`</td>
                        <td><img style="height:40px; width:70px" src="../image_uploads/`+data.data[i].poster+`"></td>
                        <td><button onclick="deleteEvent(`+"'"+data.data[i].id+"'"+`)" id="delete-user" class="btn btn-danger">Delete</button></td>
                        </tr>
                        `);
                    }
            }
    });
}

function openWin()
{
    var select=document.getElementById('eimage').click();
}

function deleteEvent(event)
{
    alert(event);
    $("#delete").modal("show");
    $("#yes").click(function(){
        var id=event;
        var data={id:id};
        console.log(data);
        console.log("its me");
        $.post( "../admin_API/delete-event_API.php",data, function( data,status ) {
        console.log("yolo");
        console.log(id);
        console.log(data);
        console.log(status);
        //var message=JSON.parse(data);
        //console.log(message);
        if(data.success=="deleted")
        {
            alert("Successfully deleted "+ event );
            location.reload();
        }
        else
        {
            alert("Something went wrong");
        }
    });
        });
}