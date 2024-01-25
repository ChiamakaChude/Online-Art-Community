$(document).ready(async function(){
    
    
       /*var settings = {
  "url": "../admin_API/categorylist_API.php",
  "method": "POST",
  "timeout": 0,
  "headers": {
    "Content-Type": "application/x-www-form-urlencoded"
  },
};

$.ajax(settings).done(function (response) {
  console.log(response);
  console.log(response.data.category);
    $("#sample").html(response.error);
});
$("#student_form").submit(function(event){
    event.preventDefault();
    var mat=$("#matno").val();
    var settings = {
  "url": "../admin_API/categorylist_API.php",
  "method": "POST",
  "timeout": 0,
  "headers": {
    "Content-Type": "application/x-www-form-urlencoded"
  },
  "data": {
    "id": "au00098"
  }
};

$.ajax(settings).done(function (response) {
  console.log(response);
});
});
    $("#student_form").submit(function(event){
        event.preventDefault();
        var username=$("#matno").val();
        var data={id:username};
        $.post( "../admin_API/categorylist_API.php",data, function( data,status ) {
        console.log(username);
        console.log(data);
        console.log(status);
        var message=JSON.parse(data);
        console.log(message);
        });
    });*/
    
    loadDiv();
});





function testAPi()
{
    var settings = {
  "url": "../admin_API/categorylist_API.php",
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

async function loadDiv()
{
    var data=await testAPi();
    $(data).ready(function(){
        if(data.error==true)
            {
                $("#sample").append(`
                    Error encountered`
                );
            }
        else if (data.error==false)
            {
                $("#sample").append(`
                <table class="table">
                <thead>
                <tr>
                <th>Category</th>
                <th>Image</th>
                <th>Description</th>
                </tr>
                </thead>
                <tbody id="cat-id">
                
                </tbody>
                </table>
                `);
                for (i=0;i<data.data.length;i++)
                    {
                        $("#cat-id").append(`
                        <tr>
                        <td>`+data.data[i].category+`</td>
                        <td>`+data.data[i].image+`</td>
                        <td>`+data.data[i].description+`</td>
                        </tr>
                        `);
                    }
            }
    });
}