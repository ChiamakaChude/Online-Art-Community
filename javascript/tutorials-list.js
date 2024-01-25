$(document).ready(function(){
loadtut();
    //var getval=$("#category").val();
    //console.log(getval);
});

function tutlist()
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

async function loadtut()
{
    var data=await tutlist();
    $(data).ready(function(){
        console.log(data);
        if(data.error==true)
            {
                $("#tutslist").append(`
                    Error encountered`
                );
            }
        else if (data.error==false)
            {
                console.log(data.error);
                for (i=0;i<data.data.length;i++)
                    {
                        console.log(data.data[i].category);
                        $("#tutslist").append(`<a href="tutorials.php" class="dropdown-item">`+ data.data[i].category +`</a>`);
                    }
            }
    });
    //var getval=$("#category").val();
    //console.log(getval);
}
