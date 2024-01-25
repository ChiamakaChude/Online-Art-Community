$(document).ready(async function(){

    loadinventory();
    //var getval=$("#category").val();
    //console.log(getval);
});

function inventorylist()
{
    var settings = {
  "url": "../admin_API/inventorylist_API.php",
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

async function loadinventory()
{
    var data=await inventorylist();
    $(data).ready(function(){
        console.log(data);
        if(data.error==true)
            {
                $("#inventable").append(`
                    Error encountered`
                );
            }
        else if (data.error==false)
            {
                $("#table").append(`
                <table id="inventable" class="table table-striped">
                <thead>
                    <tr>
                        <td><input type="checkbox"></td>
                        <th>ID <i class="fa fa-caret-down"></i><i class="fa fa-caret-up"></i></th>
                        <th>Image</th>
                        <th style="width:20%;">Name <i class="fa fa-caret-down"></i><i class="fa fa-caret-up"></i></th>
                        <th>Price(&#8358;) <a onclick="date()"><i class="fa fa-caret-down"></i></a><a><i class="fa fa-caret-up"></i></a></th>
                        <th>Quantity <i class="fa fa-caret-down"></i><i class="fa fa-caret-up"></i></th>
                        <th>Category <i class="fa fa-caret-down"></i><i class="fa fa-caret-up"></i></th>
                        <th>Description <i class="fa fa-caret-down"></i><i class="fa fa-caret-up"></i></th>
                        <th>Upload Date <i class="fa fa-caret-down"></i><i class="fa fa-caret-up"></i></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="invenview">
                
                </tbody>
                </table>
                `);
                for (i=0;i<data.data.length;i++)
                    {
                        $("#invenview").append(`
                        <tr style="cursor:pointer" id="showprod">
                        <td><input type="checkbox"></td>
                        <td>`+data.data[i].id+`</td>
                        <td><img style="height:40px; width:40px" src="../image_uploads/`+data.data[i].image+`"></td>
                        <td>`+data.data[i].name+`</td>
                        <td>`+data.data[i].price+`</td>
                        <td>`+data.data[i].quantity+`</td>
                        <td>`+data.data[i].category+`</td>
                        <td>`+data.data[i].desc+`</td>
                        <td>`+data.data[i].update+`</td>
                        <td><button onclick="deleteitem(`+"'"+data.data[i].id+"'"+`)" id="delete-user" class="btn btn-danger">Delete</button></td>
                        </tr>
                        `);
                    }
            }
    });
    //var getval=$("#category").val();
    //console.log(getval);
}

function deleteitem(item)
{
    alert(item);
    $("#delete").modal("show");
    $("#yes").click(function(){
        var id=item;
        var data={id:id};
        console.log(data);
        console.log("its me");
        $.post( "../admin_API/delete-item_API.php",data, function( data,status ) {
        console.log("yolo");
        console.log(id);
        console.log(data);
        console.log(status);
        //var message=JSON.parse(data);
        //console.log(message);
        if(data.success=="deleted")
        {
            alert("Successfully deleted "+ item );
            location.reload();
        }
        else
        {
            alert("Something went wrong");
        }
    });
        });
}