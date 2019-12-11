var selectedCategory;


console.log(getQueryVariable('id'))

displayEvents("myevents");
if (getQueryVariable('id') != false) {
    displayMainEvent(getQueryVariable('id'))
} else {
    window.location.href = './EventDetail.php?id=' + 10
}




function myFunction(category) {

    location.reload();

    // document.getElementsByClassName("user-name")[0].textContent = category;
    selectedCategory = category;
    displayEvents(selectedCategory);
}

function getQueryVariable(variable)
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}


function displayMainEvent(EventID) {
    
    //if (EventID != false) {

        var oReq = new XMLHttpRequest();
        
        oReq.onload = function() {
                
        var schedules = JSON.parse(this.responseText);
        var mainEvent;
        for (var i = 1; i < schedules.length; i++) {
            if (schedules[i].id == EventID) {
                mainEvent = schedules[i]
                break;
            }
        }    
                var titletext = mainEvent.title
                var titleDiv = document.getElementById("maintitle").innerHTML = titletext

                var start = "Start time: " + mainEvent.start;
                var startTimeDiv = document.getElementById("starttime").innerHTML = start

                var desc = mainEvent.DetailedEventDesc;
                var descDiv = document.getElementById("detailsdesc")
                
                var locationdetail = mainEvent.address;
                var locationdesc = document.getElementById("mainaddress").innerHTML = locationdetail
        
        } 

    oReq.open("get", "UpcomingEvent.php", true);
    oReq.send();

  //  } 
    } 

    



function displayEvents(selectedCategory) {
    
    var oReq = new XMLHttpRequest();
        
    oReq.onload = function() {
        
        var schedules = JSON.parse(this.responseText);
        
        
            for (var i = 1; i < 4; i++) {
                                
                var titletext = schedules[i-1].title;
                var titleDiv = document.getElementById("card-title"+i).innerHTML = titletext

                var start = "Start time: " + schedules[i-1].start;
                var startTimeDiv = document.getElementById("card-text"+i).innerHTML = start
                
                var locationdetail = schedules[i-1].address;
                var locationdesc = document.getElementById("card-texti"+i).innerHTML = locationdetail
                
                var id = schedules[i-1].id
                var idcard = document.getElementById(`card-id${i}`).innerHTML = id;
                document.getElementById("card-id"+i).style.display = "none";

                var deck = document.getElementById("card"+i)
                deck.addEventListener('click', function (e) {
                var target = e.target
                
                //document.getElementById("card-id"+i).style.display = "none";


                window.location.href = './EventDetail.php?id=' + idcard; 
                
            
                })

                
            }
        } 
        console.log("display events finished")

    oReq.open("get", "UpcomingEvent.php", true);
    oReq.send();

    }

