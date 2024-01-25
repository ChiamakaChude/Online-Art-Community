$(document).ready(function(){
    $("#prev-image").hide();
    if(sessionStorage.getItem("key")!=null)
    {
    sessionStorage.getItem("key");
   
    $("#file").change(function(e){
        console.log("yoyoyo");
        var fileName = e.target.files[0].name;
      const preview = document.querySelector('#prev-image');
      const file = document.querySelector('input[type=file]').files[0];
      const reader = new FileReader();

      reader.addEventListener("load", function () {
        // convert image file to base64 string
        preview.src = reader.result;
      }, false);

      if (file) {
        reader.readAsDataURL(file);
          $("#up-image").hide();
          $("#prev-image").show();
      }

        
        $("#create-form").submit(function(event){
        event.preventDefault();
        var title=$("#title").val();
        var image=fileName;
        var category=$("#category").val();
        var desc=$("#desc").val();
        var data={title:title, image:image, category:category, desc:desc, sess:sessionStorage.getItem("key")};
        console.log("its me");
        console.log(image);
        console.log(category);
        $.post( "../APIs/createApi.php",data, function( data,status ) {
        console.log("yolo");
        console.log(data);
        console.log(status);
        //var message=JSON.parse(data);
        //console.log(message);
        if(data.success=="create")
        {
            alert("Success");
            $("#image-form").submit();
        }
    });
});
        });
    loadcat();
    }
    
    else
    {
        alert("You are not logged in");    
    }
});

function catlist()
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

async function loadcat()
{
    var data=await catlist();
    $(data).ready(function(){
        console.log(data);
        if(data.error==true)
            {
                $("#sample").append(`
                    Error encountered`
                );
            }
        else if (data.error==false)
            {
                console.log(data.error);
                for (i=0;i<data.data.length;i++)
                    {
                        console.log(data.data[i].category);
                        $("#category").append(`<option value="${data.data[i].category}"> 
                                       ${data.data[i].category} 
                                  </option>`);
                    }
            }
    });
}


function openwin()
{
    var select=document.getElementById('file').click();
}
