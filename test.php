<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://uicdn.toast.com/tui.time-picker/latest/tui-time-picker.css">
    <link rel="stylesheet" type="text/css" href="https://uicdn.toast.com/tui.date-picker/latest/tui-date-picker.css">
    <link rel="stylesheet" type="text/css" href="./dist/tui-calendar.css">
    <link rel="stylesheet" type="text/css" href="./css/default.css">
    <link rel="stylesheet" type="text/css" href="./css/icons.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/EventCalendar.css">
    <title></title>
    <style media="screen">
      body{
        width: 50%;
        background-color: pink;
      }
    </style>
  </head>
  <body>
    <div class="event-lists">

    </div>

  </body>
  <script src="js/calendar.js"></script>

  <!-- ==================================================================== -->


  <script type="text/javascript">

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


      var iconcategory = document.createElement("i");
      iconcategory.className = 'fas fa-mug-hot icon-category';
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

      var subcontent1 = document.createElement("p");
      subcontent1.className = 'card-subtext1';
      var subcontent2 = document.createElement("p");
      subcontent2.className = 'card-subtext2';
      var subcontent3 = document.createElement("p");
      subcontent3.className = 'card-subtext3';

      // var titletext = schedules[i].title;
      var titletext = "Headline of the event";
      var titlenode = document.createTextNode(titletext);

      var start = "Start time: "+schedules[i].start;
      var startnode = document.createTextNode(start);

      var locationdetail = "Wellington";
      var locatiodetailnnode = document.createTextNode(locationdetail);

      var totalattendees = "20 attendees";
      var totalnode = document.createTextNode(totalattendees);

      var detaildesc = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ";
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
  </script>

  <!-- ======================================================================== -->


  <script src="https://kit.fontawesome.com/bdfac7b89e.js" crossorigin="anonymous"></script>
</html>
