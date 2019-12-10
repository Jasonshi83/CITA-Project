var selectedCategory;

displayEvents("myevents");

function myFunction(category) {

    location.reload();

    // document.getElementsByClassName("user-name")[0].textContent = category;
    selectedCategory = category;
    displayEvents(selectedCategory);
}



function loadMain(postedID) {

}


function displayEvents(selectedCategory) {

    var oReq = new XMLHttpRequest();
    oReq.onload = function () {

        var schedules = JSON.parse(this.responseText);

        
            for (var i = 1; i < 4; i++) {

                var titletext = schedules[i-1].title;
                console.log("Samuel:" + titletext)
                var titleDiv = document.getElementById(card-title+i).innerHTML = titletext

                var start = "Start time: " + schedules[i-1].start;
                var startTimeDiv = document.getElementById(card-text+i).innerHTML = start
                

                var locationdetail = schedules[i-1].address;
                var locationdesc = document.getElementById(card-text+i+i).innerHTML = locationdetail
  
            }
        } 
    }

