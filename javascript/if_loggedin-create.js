$(document).ready(function(){
    
    if(sessionStorage.getItem("key")!=null)
        {
            $("#create-container").append(`<a href="create.php"><button id="create" class="btn"><i style="color:white" class="fa fa-plus fa-2x"></i></button></a>`);
        }
});