
function init() {
  cal.setCalendars(CalendarList);

  setRenderRangeText();
  setSchedules();
  setEventListener();
  // displayEvents();
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