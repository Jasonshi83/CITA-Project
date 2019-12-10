var selectedCategory;


displayEvents("myevents");

function myFunction(category) {
    for(var i = document.getElementsByClassName("event-content")[0].childNodes[3].childNodes.length-1; i >= 0; i--)
    {
        document.getElementsByClassName("event-content")[0].childNodes[3].removeChild(document.getElementsByClassName("event-content")[0].childNodes[3].childNodes[i]);
    }
    console.log("hell worldddd---------");

    // document.getElementsByClassName("user-name")[0].textContent = category;
    selectedCategory = category;
    displayEvents(selectedCategory);
}

function displayEvents(selectedCategory) {

    var oReq = new XMLHttpRequest();
    oReq.onload = function () {

        var schedules = JSON.parse(this.responseText);

        if(schedules.length == 0) {
            alert("No Upcoming Event");
        }
        else if (schedules.length > 3) {
            for (var i = 0; i < 3; i++) {
                var node = document.createElement("div");
                node.className = 'card w-100';
                var node2 = document.createElement("div");
                node2.className = 'card-body';
                var node3 = document.createElement("div");
                node3.className = 'row date-location';
                var node3Sub1 = document.createElement("div");
                node3Sub1.className = 'col-lg-7';
                var node3Sub2 = document.createElement("div");
                node3Sub2.className = 'col-lg-5';

                var node4 = document.createElement("div");
                node4.className = 'row attendees';
                var node4Sub1 = document.createElement("div");
                node4Sub1.className = 'col-lg-7';
                var node4Sub2 = document.createElement("div");
                node4Sub2.className = 'col-lg-5';

                if(selectedCategory=="myevents"){
                  var iconcategory = document.createElement("i");
                  iconcategory.className = 'far fa-calendar-check icon-category';
                }
                else if(selectedCategory=="coffee"){
                  var iconcategory = document.createElement("i");
                  iconcategory.className = 'fas fa-mug-hot icon-category';
                }
                else if(selectedCategory=="meetup"){
                  var iconcategory = document.createElement("i");
                  iconcategory.className = 'fab fa-meetup icon-category';
                }
                else if(selectedCategory=="training"){
                  var iconcategory = document.createElement("i");
                  iconcategory.className = 'fas fa-chalkboard-teacher icon-category';
                }
                else if(selectedCategory=="techsummit"){
                  var iconcategory = document.createElement("i");
                  iconcategory.className = 'fas fa-laptop icon-category';
                }
                // var iconcategory = document.createElement("i");
                // iconcategory.className = 'fas fa-mug-hot icon-category';
                var locationicon = document.createElement("i");
                locationicon.className = 'fas fa-map-marker-alt';
                var locationdesc = document.createElement("span");
                locationdesc.className = 'location-desc';


                var title = document.createElement("h5");
                title.className = 'card-title';
                var content = document.createElement("p");
                content.className = 'card-text';

                var attendee = document.createElement("p");
                attendee.className = 'total-attendee';

                var attendee1 = document.createElement("img");
                attendee1.className = 'attendees-avatar';
                attendee1.src = "images/login-avatar-small.png";
                var attendee2 = document.createElement("img");
                attendee2.className = 'attendees-avatar';
                attendee2.src = "images/avatar-small2.png";
                var attendee3 = document.createElement("img");
                attendee3.className = 'attendees-avatar';
                attendee3.src = "images/avatar-small3.png";

                // var btn = document.createElement("a");
                // btn.className = 'btn btn-primary read-more';
                // btn.href ="#";

                /*Added for button "apply"*/
                // var btn_Apply = document.createElement("a");
                // btn_Apply.className = 'btn btn-primary apply';
                // btn_Apply.href ="#";
                /*-----------------------*/

                var subcontent1 = document.createElement("p");
                subcontent1.className = 'card-subtext1';
                var subcontent2 = document.createElement("p");
                subcontent2.className = 'card-subtext2';
                var subcontent3 = document.createElement("p");
                subcontent3.className = 'card-subtext3';

                var titletext = schedules[i].title;
                var titlenode = document.createTextNode(titletext);

                // var text = "Start time: "+schedules[i].start+"End time: "+schedules[i].end+"</br>"
                // var textnode = document.createTextNode(text);
                // var start = "Start time: "+schedules[i].start;
                var start = "Start time: " + schedules[i].start;
                var startnode = document.createTextNode(start);
                // var end = "End time: "+schedules[i].end;
                // var end = "End time: ";
                // var endnode = document.createTextNode(end);
                // var category = "Category: "+schedules[i].category;
                // var category = "Category: ";
                // var categorynode = document.createTextNode(category);

                // var btntext = "READ MORE";
                // var btnnode = document.createTextNode(btntext);
                // btn.appendChild(btnnode);

                /*Added text for button "apply"*/
                // var btntext_Apply = "ATTENDING";
                // var btnnode_Apply = document.createTextNode(btntext_Apply);
                // btn_Apply.appendChild(btnnode_Apply);

                var locationdetail = schedules[i].address;
                var locatiodetailnnode = document.createTextNode(locationdetail);

                var totalattendees = "Attendee Limit: " + schedules[i].AttendeeLimit;
                var totalnode = document.createTextNode(totalattendees);

                var detaildesc = schedules[i].detailDesc;
                var detaildescnode = document.createTextNode(detaildesc);

                title.appendChild(titlenode);
                subcontent1.appendChild(detaildescnode);
                content.appendChild(subcontent1);
                locationdesc.appendChild(locatiodetailnnode);
                attendee.appendChild(totalnode);

                node4Sub2.appendChild(attendee1);
                node4Sub2.appendChild(attendee2);
                node4Sub2.appendChild(attendee3);
                node4Sub1.appendChild(attendee);
                node4.appendChild(node4Sub1);
                node4.appendChild(node4Sub2);

                node3Sub2.appendChild(locationicon);
                node3Sub2.appendChild(locationdesc);
                node3Sub1.appendChild(startnode);
                node3.appendChild(node3Sub1);
                node3.appendChild(node3Sub2);

                node2.appendChild(iconcategory);
                node2.appendChild(node3);
                node2.appendChild(title);
                node2.appendChild(content);
                node2.appendChild(node4);

                node.appendChild(node2);
                document.getElementsByClassName("event-lists")[0].appendChild(node);
            }
        } else {
            for (var i = 0; i < schedules.length; i++) {
                var node = document.createElement("div");
                node.className = 'card w-100';
                var node2 = document.createElement("div");
                node2.className = 'card-body';
                var node3 = document.createElement("div");
                node3.className = 'row date-location';
                var node3Sub1 = document.createElement("div");
                node3Sub1.className = 'col-lg-7';
                var node3Sub2 = document.createElement("div");
                node3Sub2.className = 'col-lg-5';

                var node4 = document.createElement("div");
                node4.className = 'row attendees';
                var node4Sub1 = document.createElement("div");
                node4Sub1.className = 'col-lg-7';
                var node4Sub2 = document.createElement("div");
                node4Sub2.className = 'col-lg-5';


                if(selectedCategory=="myevents"){
                  var iconcategory = document.createElement("i");
                  iconcategory.className = 'far fa-calendar-check icon-category';
                }
                else if(selectedCategory=="coffee"){
                  var iconcategory = document.createElement("i");
                  iconcategory.className = 'fas fa-mug-hot icon-category';
                }
                else if(selectedCategory=="meetup"){
                  var iconcategory = document.createElement("i");
                  iconcategory.className = 'fab fa-meetup icon-category';
                }
                else if(selectedCategory=="training"){
                  var iconcategory = document.createElement("i");
                  iconcategory.className = 'fas fa-chalkboard-teacher icon-category';
                }
                else if(selectedCategory=="techsummit"){
                  var iconcategory = document.createElement("i");
                  iconcategory.className = 'fas fa-laptop icon-category';
                }

                // var iconcategory = document.createElement("i");
                // iconcategory.className = 'fas fa-mug-hot icon-category';
                var locationicon = document.createElement("i");
                locationicon.className = 'fas fa-map-marker-alt';
                var locationdesc = document.createElement("span");
                locationdesc.className = 'location-desc';


                var title = document.createElement("h5");
                title.className = 'card-title';
                var content = document.createElement("p");
                content.className = 'card-text';

                var attendee = document.createElement("p");
                attendee.className = 'total-attendee';

                var attendee1 = document.createElement("img");
                attendee1.className = 'attendees-avatar';
                attendee1.src = "images/login-avatar-small.png";
                var attendee2 = document.createElement("img");
                attendee2.className = 'attendees-avatar';
                attendee2.src = "images/avatar-small2.png";
                var attendee3 = document.createElement("img");
                attendee3.className = 'attendees-avatar';
                attendee3.src = "images/avatar-small3.png";

                // var btn = document.createElement("a");
                // btn.className = 'btn btn-primary read-more';
                // btn.href ="#";

                /*Added for button "apply"*/
                // var btn_Apply = document.createElement("a");
                // btn_Apply.className = 'btn btn-primary apply';
                // btn_Apply.href ="#";
                /*-----------------------*/

                var subcontent1 = document.createElement("p");
                subcontent1.className = 'card-subtext1';
                var subcontent2 = document.createElement("p");
                subcontent2.className = 'card-subtext2';
                var subcontent3 = document.createElement("p");
                subcontent3.className = 'card-subtext3';

                var titletext = schedules[i].title;
                var titlenode = document.createTextNode(titletext);

                // var text = "Start time: "+schedules[i].start+"End time: "+schedules[i].end+"</br>"
                // var textnode = document.createTextNode(text);
                // var start = "Start time: "+schedules[i].start;
                var start = "Start time: " + schedules[i].start;
                var startnode = document.createTextNode(start);
                // var end = "End time: "+schedules[i].end;
                // var end = "End time: ";
                // var endnode = document.createTextNode(end);
                // var category = "Category: "+schedules[i].category;
                // var category = "Category: ";
                // var categorynode = document.createTextNode(category);

                // var btntext = "READ MORE";
                // var btnnode = document.createTextNode(btntext);
                // btn.appendChild(btnnode);

                /*Added text for button "apply"*/
                // var btntext_Apply = "ATTENDING";
                // var btnnode_Apply = document.createTextNode(btntext_Apply);
                // btn_Apply.appendChild(btnnode_Apply);

                var locationdetail = schedules[i].address;
                var locatiodetailnnode = document.createTextNode(locationdetail);

                var totalattendees = "Attendee Limit: " + schedules[i].AttendeeLimit;
                var totalnode = document.createTextNode(totalattendees);

                var detaildesc = schedules[i].detailDesc;
                var detaildescnode = document.createTextNode(detaildesc);

                title.appendChild(titlenode);
                subcontent1.appendChild(detaildescnode);
                content.appendChild(subcontent1);
                locationdesc.appendChild(locatiodetailnnode);
                attendee.appendChild(totalnode);

                node4Sub2.appendChild(attendee1);
                node4Sub2.appendChild(attendee2);
                node4Sub2.appendChild(attendee3);
                node4Sub1.appendChild(attendee);
                node4.appendChild(node4Sub1);
                node4.appendChild(node4Sub2);

                node3Sub2.appendChild(locationicon);
                node3Sub2.appendChild(locationdesc);
                node3Sub1.appendChild(startnode);
                node3.appendChild(node3Sub1);
                node3.appendChild(node3Sub2);

                node2.appendChild(iconcategory);
                node2.appendChild(node3);
                node2.appendChild(title);
                node2.appendChild(content);
                node2.appendChild(node4);

                node.appendChild(node2);
                document.getElementsByClassName("event-lists")[0].appendChild(node);
            }
        }
    };
    if(selectedCategory=="myevents"){
        oReq.open("get","UpcomingEvent.php",true);
        oReq.send();
        // document.getElementsByClassName("user-name")[0].textContent = selectedCateory;
    }
    else if(selectedCategory=="coffee"){
        oReq.open("get","UpcomingEvent_Coffee.php",true);
        oReq.send();
        // document.getElementsByClassName("user-name")[0].textContent = selectedCateory;
    }
    else if(selectedCategory=="meetup"){
        oReq.open("get","UpcomingEvent_Meetup.php",true);
        oReq.send();
        // document.getElementsByClassName("user-name")[0].textContent = selectedCateory;
    }
    else if(selectedCategory=="training"){
        oReq.open("get","UpcomingEvent_Training.php",true);
        oReq.send();
        // document.getElementsByClassName("user-name")[0].textContent = selectedCateory;
    }
    else if(selectedCategory=="techsummit"){
        oReq.open("get","UpcomingEvent_TechSummit.php",true);
        oReq.send();
        // document.getElementsByClassName("user-name")[0].textContent = selectedCateory;
    }
    // oReq.open("get", "UpcomingEvent_CasualLunch.php", true);
    // oReq.send();

}

(function($) {
    $(document).ready( function() {
        $('.sub-category-mode').click( function() {
            $('.sub-category-mode').removeClass('active');
            $(this).addClass('active');
        });
    });
})(jQuery);
