$(document).ready(async function(){

    loadusers();
    //var getval=$("#category").val();
    //console.log(getval);
});

function userslist()
{
    var settings = {
  "url": "../admin_API/users_API.php",
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

async function loadusers()
{
    var data=await userslist();
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
                $("#table").append(`
                <table id="user_table" class="table table-striped">
                <thead>
                    <tr>
                        <td><input type="checkbox"></td>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name </th>
                        <th>Email </th>
                        <th>Telephone </th>
                        <th>Country </th>
                        <th>Gender </th>
                        <th>D.O.B </th>
                        <th>Level </th>
                        <th>Date Registered </th>
                        <th>User Type </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="usersview">
                
                </tbody>
                </table>
                `);
                for (i=0;i<data.data.length;i++)
                    {
                        $("#usersview").append(`
                        <tr style="cursor:pointer" id="showprod">
                        <td><input type="checkbox"></td>
                        <td>`+data.data[i].id+`</td>
                        <td>`+data.data[i].firstname+`</td>
                        <td>`+data.data[i].surname+`</td>
                        <td>`+data.data[i].email+`</td>
                        <td>`+data.data[i].phone+`</td>
                        <td>`+data.data[i].country+`</td>
                        <td>`+data.data[i].gender+`</td>
                        <td>`+data.data[i].dob+`</td>
                        <td>`+data.data[i].level+`</td>
                        <td>`+data.data[i].datereg+`</td>
                        <td>`+data.data[i].user_type+`</td>
                        <td><button onclick="deleteuser(`+"'"+data.data[i].id+"'"+`)" id="delete-user" class="btn btn-danger">Delete</button></td>
                        </tr>
                        `);
                    }
            }
    });
    //var getval=$("#category").val();
    //console.log(getval);
}

function deleteuser(user)
{
    alert(user);
    $("#delete").modal("show");
    $("#yes").click(function(){
        var id=user;
        var data={id:id};
        console.log(data);
        console.log("its me");
        $.post( "../admin_API/delete-user_API.php",data, function( data,status ) {
        console.log("yolo");
        console.log(id);
        console.log(data);
        console.log(status);
        //var message=JSON.parse(data);
        //console.log(message);
        if(data.success=="deleted")
        {
            alert("Successfully deleted "+ user );
            location.reload();
        }
        else
        {
            alert("Something went wrong");
        }
    });
        });
}