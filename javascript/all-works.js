$(document).ready(async function(){

    loadworks();
    //var getval=$("#category").val();
    //console.log(getval);
});

function workslist()
{
    var settings = {
  "url": "../APIs/all-worksApi.php",
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

async function loadworks()
{
    var data=await workslist();
    $(data).ready(function(){
        console.log(data);
        if(data.error==true)
            {
                $("#user_table").append(`
                    Error encountered`
                );
            }
        else if (data.error==false)
            {
                for (i=0;i<data.data.length;i++)
                    {
                        $("#gallery").append(`<div class="mb-3 pics animation">
    <img class="img-fluid" src="../image_uploads/`+data.data[i].image+`" alt="Card image cap">
    <h6>`+data.data[i].title+`</h6>
  </div>`);
                    }
            }
    });
    //var getval=$("#category").val();
    //console.log(getval);
}