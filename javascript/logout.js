$(document).ready(function(){
    $("#logout").click(function(){
       sessionStorage.removeItem("key");
        alert("The session has been lost o hei God");
        window.location.reload();
    });
});