var selectedCategory;


console.log("samuel samuel function start")
displayEvents("myevents");
console.log("samuel samuel function end")

function myFunction(category) {

    location.reload();

    // document.getElementsByClassName("user-name")[0].textContent = category;
    selectedCategory = category;
    displayEvents(selectedCategory);
}


function displayEvents(selectedCategory) {
    console.log("inside display event")
    var oReq = new XMLHttpRequest();
        console.log("xml req")
    oReq.onload = function() {
        console.log("onreq onload")
        var schedules = JSON.parse(this.responseText);
        console.log("json parsed")
        
            for (var i = 1; i < 4; i++) {
                console.log("samuel samuel" + i)
                var titletext = schedules[i-1].title;
                console.log("Samuel:" + titletext)
                console.log("Samuel:")
                var titleDiv = document.getElementById("card-title"+i).innerHTML = titletext

                var start = "Start time: " + schedules[i-1].start;
                var startTimeDiv = document.getElementById("card-text"+i).innerHTML = start
                
                var locationdetail = schedules[i-1].address;
                var locationdesc = document.getElementById("card-texti"+i).innerHTML = locationdetail
  
            }
        } 
        console.log("display events finished")

    oReq.open("get", "UpcomingEvent.php", true);
    oReq.send();

    }

