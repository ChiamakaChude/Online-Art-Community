$(document).ready(function(){
    
    if(sessionStorage.getItem("key")!=null)
        {
            console.log(sessionStorage.getItem("key"));
            alert("the session is here");
            $("#profile-list").append(`<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-placement="bottom" title="Profile" id="end"><i class="fa fa-user fa-lg"></i></a>
                <div class="dropdown-menu">
                    <a href="../admin/index.php" class="dropdown-item">Admin Mode</a>
                    <a href="profile.php" class="dropdown-item">Profile</a>
                    <a href="" class="dropdown-item">Notifications</a>
                    <a href="../html/settings.php" class="dropdown-item">Settings</a>
                    <a data-toggle="modal" data-target="#logout" class="dropdown-item">Log Out</a>
                </div>`);
        }
});