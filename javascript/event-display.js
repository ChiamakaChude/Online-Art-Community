$(document).ready(async function(){
    
    loadevent();
});

function eventlist()
{
    var settings = {
  "url": "../APIs/eventsApi.php",
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

async function loadevent()
{
    var data=await eventlist();
    $(data).ready(function(){
        console.log(data);
        if(data.error==true)
            {
                $("#table").append(`
                    Error encountered`
                );
            }
        if(data.error==false)
            {
                for (i=0;i<data.data.length;i++)
                    {
                        $("#events").append(`
                        <div class="card" id="event-list">
                        <a data-toggle="modal" data-target="#event-details"><div class="card">
                        <div class="card-body">
                            <h4 class="card-title" id="event_title">`+data.data[i].name+`</h4>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="card-text">Location: `+data.data[i].location+`</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="card-text">Date: `+data.data[i].date+` <br>Time: `+data.data[i].time+`</p>
                                </div>
                            </div>
                        </div>
                        </div></a>
                </div><br>`);
                        
                        $("#evtitle").append(``+data.data[i].name+``);
                        $("#req").append(`Requirements:<br>`+data.data[i].req+``);
                    }
            }
    });
}