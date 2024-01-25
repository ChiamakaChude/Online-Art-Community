$(document).ready(async function(){
        //var fileName;
    
       $('#file').change(function(e){
        var fileName = e.target.files[0].name;
        //alert('The file "' + fileName +  '" has been selected.');
        document.getElementById('file-in').value=fileName;
//    });                        
    
    //console.log(fileName);
    
    $("#product-form").submit(function(event){
        event.preventDefault();
        var pname=$("#pname").val();
        var price=$("#price").val();
        var quantity=$("#quantity").val();
        var pimage=fileName;
        var category=$("#category").val();
        var desc=$("#proddesc").val();
        var data={pname:pname, price:price, quantity:quantity,  pimage:pimage, category:category, desc:desc};
        $.post( "../admin_API/add-products_API.php",data, function( data,status ) {
        console.log(category);
        console.log(desc);
        console.log(data);
        console.log(status);
        var message=JSON.parse(data);
        console.log(message);
        if(message.success=="inserted")
        {
            alert("Product successfully added");
            $("#product-form").trigger("reset");
            $("#image-form").submit();
            //location.reload();
        }
        else if (message.success!="inserted")
            {
                alert("Something went wrong. Oops!!");
                $("#product-form").trigger("reset");
            }
        });
    });
           
       });
    

    $('#cat-file').change(function(e){
    var catfileName = e.target.files[0].name;
    ('The file "' + catfileName +  '" has been selected.');
    document.getElementById('cat-file-in').value=catfileName;
            
    $("#new-category").submit(function(event){
        event.preventDefault();
        var name=$("#cat-name").val();
        var image=catfileName;
        var desc=$("#cat-desc").val();
        var data={name:name, image:image, description:desc};
        $.post( "../admin_API/add-products_API.php",data, function( data,status ) {
        console.log(image);
        console.log(data);
        console.log(status);
        var message=JSON.parse(data);
        console.log(message);
        if(message.success=="id")
            {
                $("#cat-name_er").html("This category already exists");
                $("#cat-name").css("border-color","red");
            }
        else if (message.success=="category")
            {
                $("#catimage-form").submit();
                alert("Category successfully created");
                $("#cat-close").click();
                $("#new-category").trigger("reset");
                //location.reload();
            }
        });
    });
    });
    loadcat();
    //var getval=$("#category").val();
    //console.log(getval);
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
    //var getval=$("#category").val();
    //console.log(getval);
}

function openWin()
{
    var select=document.getElementById('cat-file').click();
}

function openwin()
    {
        var select=document.getElementById('file').click();
    }