document.getElementsByClassName("fa-meetup")[0].attributes[1].value = "false";

showEvents();



function showEvents(){

  var oReq = new XMLHttpRequest();
  oReq.onload = function() {

  var schedules = JSON.parse(this.responseText);

  for(var i=0; i<4; i++){

    var node = document.createElement("div");
    node.className = 'card w-100 upcoming-block';
    var node2 = document.createElement("div");
    node2.className = 'row no-gutters';
    var node3 = document.createElement("div");
    node3.className = 'col-md-4';
    var node4 = document.createElement("div");
    node4.className = 'col-md-8';
    var node5 = document.createElement("div");
    node5.className = 'card-body';
    var node6 = document.createElement("div");
    node6.className = 'row';

    var nodedetail1 = document.createElement("div");
    nodedetail1.className = 'col-4';
    var nodedetail2 = document.createElement("div");
    nodedetail2.className = 'col-4';
    var nodedetail3 = document.createElement("div");
    nodedetail3.className = 'col-4 event-btn';

    var icon1 = document.createElement("i");
    icon1.className = 'far fa-calendar';
    var detail1 = document.createElement("span");
    detail1.className = 'events-date';

    var icon2 = document.createElement("i");
    icon2.className = 'fas fa-map-marker-alt';
    var detail2 = document.createElement("span");
    detail2.className = 'events-location';


    var imgevents = document.createElement("img");
    imgevents.className = 'img-events';
    imgevents.src = "images/interest-groups1.png";
    imgevents.alt = "image-events";
    var title = document.createElement("h5");
    title.className = 'card-title';
    var content = document.createElement("p");
    content.className = 'card-text';
    var btn = document.createElement("a");
    btn.className = 'btn event-attend';
    btn.href ="#";
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
    var start = "Start time: "+schedules[i].start;
    var startnode = document.createTextNode(start);
    var end = "End time: "+schedules[i].end;
    var endnode = document.createTextNode(end);
    var category = "Category: "+schedules[i].category;
    var categorynode = document.createTextNode(category);

    var btntext = "ATTENDING";
    var btnnode = document.createTextNode(btntext);
    btn.appendChild(btnnode);

    var description = "In this hands-on workshop, we’ll learn about Python programming and how to write your first script while enjoying pizza together! ";
    var descriptionnode = document.createTextNode(description);

    var location = "Golding’s Free Dive 14 Leeds Street, Te Aro";
    var locationnode = document.createTextNode(location);

    detail1.appendChild(startnode);
    nodedetail1.appendChild(icon1);
    nodedetail1.appendChild(detail1);

    detail2.appendChild(locationnode);
    nodedetail2.appendChild(icon2);
    nodedetail2.appendChild(detail2);

    nodedetail3.appendChild(btn);

    node6.appendChild(nodedetail1);
    node6.appendChild(nodedetail2);
    node6.appendChild(nodedetail3);

    title.appendChild(titlenode);
    subcontent1.appendChild(descriptionnode);
    // subcontent1.appendChild(startnode);
    // subcontent2.appendChild(endnode);
    // subcontent3.appendChild(categorynode);
    content.appendChild(subcontent1);
    content.appendChild(subcontent2);
    content.appendChild(subcontent3);

    node5.appendChild(title);
    node5.appendChild(content);
    node5.appendChild(node6);

    node4.appendChild(node5);
    // node3.appendChild(imgevents);
    node3.style.backgroundImage = "url('http://localhost/cita-new/css/assets/interest-groups1.png')";
    node3.style.backgroundRepeat = "no-repeat";
    node3.style.backgroundSize = "cover";


    node2.appendChild(node3);
    node2.appendChild(node4);
    node.appendChild(node2);
    document.getElementsByClassName("upcoming-events")[0].appendChild(node);

  }
  };
  oReq.open("get","UpcomingEvent.php",true);
  oReq.send();
}
