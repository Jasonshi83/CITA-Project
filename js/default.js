


function init() {
  cal.setCalendars(CalendarList);

  setRenderRangeText();
  setSchedules();
  setEventListener();
  displayEvents();
}

function displayEvents(){

  var oReq = new XMLHttpRequest();
  oReq.onload = function() {
    // This is where you handle what to do with the response.
    // The actual data is found on this.responseText
    var schedules = JSON.parse(this.responseText);
    // schedules = "{\"events\": " +schedules+ "}";
    // var schedules = [{"id":"2","calendarId":"3","title":"Morning Tea","category":"time","dueDateClass":"","start":"2019-12-25 06:50:00","end":"2019-12-25 08:51:21"},{"id":"2","calendarId":"3","title":"Education","category":"time","dueDateClass":"","start":"2019-12-07 18:52:31","end":"2019-12-07 20:52:38"},{"id":"2","calendarId":"3","title":"Lunch Party","category":"time","dueDateClass":"","start":"2020-01-01 11:53:10","end":"2020-01-01 12:53:25"},{"id":"2","calendarId":"3","title":"Game","category":"time","dueDateClass":"","start":"2019-12-09 22:18:11","end":"2019-12-12 22:18:16"}];

  // var node = document.createElement("DIV");
  // var node2 = document.createElement("DIV");
  // var text = "Title: "+schedules[i].title+"</br>"
  // +"Start time: "+schedules[i].start+"</br>End time: "+schedules[i].end+"</br>"
  // var textnode = document.createTextNode(text);
  // node.appendChild(textnode);
  // node2.appendChild(node);
  // document.getElementsByClassName("event-lists")[0].appendChild(node);

  for(var i=0; i<4; i++){

    var node = document.createElement("div");
    node.className = 'card w-100';
    var node2 = document.createElement("div");
    node2.className = 'card-body';
    var title = document.createElement("h5");
    title.className = 'card-title';
    var content = document.createElement("p");
    content.className = 'card-text';
    var btn = document.createElement("a");
    btn.className = 'btn btn-primary';
    btn.href ="#";
    var subcontent1 = document.createElement("p");
    subcontent1.className = 'card-subtext1';
    var subcontent2 = document.createElement("p");
    subcontent2.className = 'card-subtext2';
    var subcontent3 = document.createElement("p");
    subcontent3.className = 'card-subtext3';

    var titletext = schedules[i].title
    var titlenode = document.createTextNode(titletext);

    // var text = "Start time: "+schedules[i].start+"End time: "+schedules[i].end+"</br>"
    // var textnode = document.createTextNode(text);
    var start = "Start time: "+schedules[i].start
    var startnode = document.createTextNode(start);
    var end = "End time: "+schedules[i].end
    var endnode = document.createTextNode(end);
    var category = "Category: "+schedules[i].category
    var categorynode = document.createTextNode(category);

    var btntext = "BUTTON"
    var btnnode = document.createTextNode(btntext);
    // var btn = document.createElement("a");
    // btn.className = 'btn btn-primary';
    // btn.href = "#";
    // var text ="BUTTON";
    // btn.appendChild(text);
    btn.appendChild(btnnode);
    // content.appendChild(textnode);
    title.appendChild(titlenode);
    subcontent1.appendChild(startnode);
    subcontent2.appendChild(endnode);
    subcontent3.appendChild(categorynode);
    content.appendChild(subcontent1);
    content.appendChild(subcontent2);
    content.appendChild(subcontent3);

    node2.appendChild(title);
    node2.appendChild(content);
    node2.appendChild(btn);

    node.appendChild(node2);
    document.getElementsByClassName("event-lists")[0].appendChild(node);

    //***************************************
    // var node = document.createElement("DIV");
    // var node2 = document.createElement("DIV");
    // var text = "Title: "+schedules[i].title+"</br>"
    // +"Start time: "+schedules[i].start+"</br>End time: "+schedules[i].end+"</br>"
    // var textnode = document.createTextNode(text);
    // node.appendChild(textnode);
    // node2.appendChild(node);
    // document.getElementsByClassName("event-lists")[0].appendChild(node);
    //***************************************8


    // var node = document.createElement("div");
    //  var textnode = document.createTextNode("Water");
    //  node.appendChild(textnode);
    //  document.getElementsByClassName("event-lists").appendChild(node);

    // document.getElementsByClassName("event-details")[0].innerHTML = "Title: "+schedules[i].title+"</br>"
    // +"Start time: "+schedules[i].start+"</br>End time: "+schedules[i].end+"</br>";
  }
  };
  oReq.open("get","UpcomingEvent.php",true);
  oReq.send();

}

function getDataAction(target) {
  return target.dataset ? target.dataset.action : target.getAttribute('data-action');
}

function setDropdownCalendarType() {
  var calendarTypeName = document.getElementById('calendarTypeName');
  var calendarTypeIcon = document.getElementById('calendarTypeIcon');
  var options = cal.getOptions();
  var type = cal.getViewName();
  var iconClassName;

  if (type === 'day') {
    type = 'Daily';
    iconClassName = 'calendar-icon ic_view_day';
  } else if (type === 'week') {
    type = 'Weekly';
    iconClassName = 'calendar-icon ic_view_week';
  } else if (options.month.visibleWeeksCount === 2) {
    type = '2 weeks';
    iconClassName = 'calendar-icon ic_view_week';
  } else if (options.month.visibleWeeksCount === 3) {
    type = '3 weeks';
    iconClassName = 'calendar-icon ic_view_week';
  } else {
    type = 'Monthly';
    iconClassName = 'calendar-icon ic_view_month';
  }

  calendarTypeName.innerHTML = type;
  calendarTypeIcon.className = iconClassName;
}

function onClickMenu(e) {
  var target = $(e.target).closest('a[role="menuitem"]')[0];
  var action = getDataAction(target);
  var options = cal.getOptions();
  var viewName = '';

  switch (action) {
    case 'toggle-daily':
      viewName = 'day';
      break;
    case 'toggle-weekly':
      viewName = 'week';
      break;
    case 'toggle-monthly':
      options.month.visibleWeeksCount = 0;
      viewName = 'month';
      break;
    case 'toggle-weeks2':
      options.month.visibleWeeksCount = 2;
      viewName = 'month';
      break;
    case 'toggle-weeks3':
      options.month.visibleWeeksCount = 3;
      viewName = 'month';
      break;
    case 'toggle-narrow-weekend':
      options.month.narrowWeekend = !options.month.narrowWeekend;
      options.week.narrowWeekend = !options.week.narrowWeekend;
      viewName = cal.getViewName();

      target.querySelector('input').checked = options.month.narrowWeekend;
      break;
    case 'toggle-start-day-1':
      options.month.startDayOfWeek = options.month.startDayOfWeek ? 0 : 1;
      options.week.startDayOfWeek = options.week.startDayOfWeek ? 0 : 1;
      viewName = cal.getViewName();

      target.querySelector('input').checked = options.month.startDayOfWeek;
      break;
    case 'toggle-workweek':
      options.month.workweek = !options.month.workweek;
      options.week.workweek = !options.week.workweek;
      viewName = cal.getViewName();

      target.querySelector('input').checked = !options.month.workweek;
      break;
    default:
      break;
  }

  cal.setOptions(options, true);
  cal.changeView(viewName, true);

  setDropdownCalendarType();
  setRenderRangeText();
  setSchedules();
}

function onClickNavi(e) {
  var action = getDataAction(e.target);

  switch (action) {
    case 'move-prev':
      cal.prev();
      break;
    case 'move-next':
      cal.next();
      break;
    case 'move-today':
      cal.today();
      break;
    default:
      return;
  }

  setRenderRangeText();
  setSchedules();
}

function setRenderRangeText() {
  var renderRange = document.getElementById('renderRange');
  var options = cal.getOptions();
  var viewName = cal.getViewName();
  var html = [];
  if (viewName === 'day') {
    html.push(moment(cal.getDate().getTime()).format('YYYY.MM.DD'));
  } else if (viewName === 'month' &&
    (!options.month.visibleWeeksCount || options.month.visibleWeeksCount > 4)) {
    html.push(moment(cal.getDate().getTime()).format('YYYY.MM'));
  } else {
    html.push(moment(cal.getDateRangeStart().getTime()).format('YYYY.MM.DD'));
    html.push(' ~ ');
    html.push(moment(cal.getDateRangeEnd().getTime()).format(' MM.DD'));
  }
  renderRange.innerHTML = html.join('');
}

function setSchedules() {
  cal.clear();
  generateSchedule(cal.getViewName(), cal.getDateRangeStart(), cal.getDateRangeEnd());
  cal.createSchedules(ScheduleList);

  // var schedules = [
  //   {id: 489273, title: 'Dev Team dinner party', isAllDay: false, start: '2019-12-10T11:30:00+13:00', end: '2019-12-10T12:00:00+13:00', goingDuration: 30, comingDuration: 30, color: '#ffffff', isVisible: true, bgColor: '#69BB2D', dragBgColor: '#69BB2D', borderColor: '#69BB2D', calendarId: 'logged-workout', category: 'time', dueDateClass: '', customStyle: 'cursor: default;', isPending: false, isFocused: false, isReadOnly: true, isPrivate: false, location: '', attendees: '', recurrenceRule: '', state: ''},
  //   {id: 18073, title: 'Jason will get a free meal on that day', isAllDay: false, start: '2019-12-20T09:00:00+13:00', end: '2019-12-20T10:00:00+13:00', color: '#ffffff', isVisible: true, bgColor: '#54B8CC', dragBgColor: '#54B8CC', borderColor: '#54B8CC', calendarId: 'workout', category: 'time', dueDateClass: '', customStyle: '', isPending: false, isFocused: false, isReadOnly: false, isPrivate: false, location: '', attendees: '', recurrenceRule: '', state: ''},
  //   {
  //     id: '1',
  //     calendarId: '1',
  //     title: 'Happy Christmas!!',
  //     category: 'time',
  //     dueDateClass: '',
  //     start: '2019-12-24T10:30:00+13:00',
  //     end: '2019-12-24T12:30:00+13:00'
  //   },
  //   {
  //     id: '3',
  //     calendarId: '1',
  //     title: 'Testing!!',
  //     category: 'time',
  //     dueDateClass: '',
  //     start: '2019-12-24T13:30:00+13:00',
  //     end: '2019-12-24T14:30:00+13:00'
  //   },
  //   {
  //     id: '2',
  //     calendarId: '1',
  //     title: 'Where is my Christmas gift??!!',
  //     category: 'time',
  //     dueDateClass: '',
  //     start: '2019-12-25T10:30:00+13:00',
  //     end: '2019-12-25T12:30:00+13:00'
  //   }
  // ];



  //Pass Php file to variable in JS file.
  var oReq = new XMLHttpRequest();
  oReq.onload = function() {
    // This is where you handle what to do with the response.
    // The actual data is found on this.responseText
    var schedules = JSON.parse(this.responseText);
    // var schedules = [{"id":"2","calendarId":"3","title":"Morning Tea","category":"time","dueDateClass":"","start":"2019-12-25 06:50:00","end":"2019-12-25 08:51:21"},{"id":"2","calendarId":"3","title":"Education","category":"time","dueDateClass":"","start":"2019-12-07 18:52:31","end":"2019-12-07 20:52:38"},{"id":"2","calendarId":"3","title":"Lunch Party","category":"time","dueDateClass":"","start":"2020-01-01 11:53:10","end":"2020-01-01 12:53:25"},{"id":"2","calendarId":"3","title":"Game","category":"time","dueDateClass":"","start":"2019-12-09 22:18:11","end":"2019-12-12 22:18:16"}];
    cal.createSchedules(schedules);
    refreshScheduleVisibility();
  };
  oReq.open("get","DBTesting.php",true);
  oReq.send();




  // var schedules = [{"id":"2","calendarId":"3","title":"Morning Tea","category":"time","dueDateClass":"","start":"2019-12-25 06:50:00","end":"2019-12-25 08:51:21"},{"id":"2","calendarId":"3","title":"Education","category":"time","dueDateClass":"","start":"2019-12-07T18:52:31+13:00","end":"2019-12-07T20:52:38+13:00"},{"id":"2","calendarId":"3","title":"Lunch Party","category":"time","dueDateClass":"","start":"2020-01-01T11:53:10+13:00","end":"2020-01-01T12:53:25+13:00"}];
  // var schedules = [{"id":"2","calendarId":"3","title":"Morning Tea","category":"time","dueDateClass":"","start":"2019-12-25 06:50:00","end":"2019-12-25 08:51:21"},{"id":"2","calendarId":"3","title":"Education","category":"time","dueDateClass":"","start":"2019-12-07 18:52:31","end":"2019-12-07 20:52:38"},{"id":"2","calendarId":"3","title":"Lunch Party","category":"time","dueDateClass":"","start":"2020-01-01 11:53:10","end":"2020-01-01 12:53:25"},{"id":"2","calendarId":"3","title":"Game","category":"time","dueDateClass":"","start":"2019-12-09 22:18:11","end":"2019-12-12 22:18:16"}];


  // var schedules = [];
  //
  // cal.createSchedules(schedules);
  // refreshScheduleVisibility();
}


function refreshScheduleVisibility() {
  var calendarElements = Array.prototype.slice.call(document.querySelectorAll('#calendarList input'));

  CalendarList.forEach(function(calendar) {
    cal.toggleSchedules(calendar.id, !calendar.checked, false);
  });

  cal.render(true);

  calendarElements.forEach(function(input) {
    var span = input.nextElementSibling;
    span.style.backgroundColor = input.checked ? span.style.borderColor : 'transparent';
  });
}

resizeThrottled = tui.util.throttle(function() {
  cal.render();
}, 50);

function setEventListener() {
  $('.dropdown-menu a[role="menuitem"]').on('click', onClickMenu);
  $('#menu-navi').on('click', onClickNavi);
  window.addEventListener('resize', resizeThrottled);
}

cal.on({
  'clickTimezonesCollapseBtn': function(timezonesCollapsed) {
    if (timezonesCollapsed) {
      cal.setTheme({
        'week.daygridLeft.width': '77px',
        'week.timegridLeft.width': '77px'
      });
    } else {
      cal.setTheme({
        'week.daygridLeft.width': '60px',
        'week.timegridLeft.width': '60px'
      });
    }

    return true;
  }
});

init();
