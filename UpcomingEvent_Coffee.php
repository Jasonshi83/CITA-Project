<?php

    $json = '';
    $data = array();
    class User{
        public $id;
        public $calendarId;
        public $title;
        public $category;
        public $dueDateClass;
        public $start;
        public $end;
        public $city;
        public $address;
        public $detailDesc;
        public $AttendeeLimit;
    }
//    $conn = mysqli_connect("10.140.61.247:3306", "citauser", "citauser", "cita_events") or die("could not connect to DB");
$conn = mysqli_connect("192.168.1.64:3306", "citauser", "citauser", "cita_events") or die("could not connect to DB");
    //Test
//    $result = $conn->query("select * from events where EventStart >= CURRENT_TIMESTAMP order by eventStart;");
    $result = $conn->query("select Events.id, Events.ShortDesc, Events.QRToken, Events.EventVideo, Events.EventStart, Events.EventEnd, Events.city, Events.address, Events.DetailDesc, Events.AttendeeLimit, Events.AllowGuests, Events.Category, EventsCategory.category as type FROM Events JOIN EventsCategory ON Events.Category = Eventscategory.id where Events.category = 2 and Events.EventStart >= CURRENT_TIMESTAMP order by Events.EventStart;");
//    $r = mysqli_fetch_assoc($sth)
//    $rows = array();
    if($result){
        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
//        print_r ($row);
        $user = new User();
//        $user->id = $row["Events.id"];
//        $user->calendarId = $row["EventsCategory.category"];
//        $user->title = $row["Events.ShortDesc"];
////        $user->category = $row["Events.Category"];
//        $user->category = 'allday';
//        $user->dueDateClass = '';
//        $user->start = $row["Events.EventStart"];
//        $user->end = $row["Events.EventEnd"];

        $user->id = $row["id"];
        $user->calendarId = $row["type"];
        $user->title = $row["ShortDesc"];
        $user->category = $row["type"];
//        $user->category = 'allday';
        $user->dueDateClass = '';
        $user->start = $row["EventStart"];
        $user->end = $row["EventEnd"];
        $user->address = $row["address"];
        $user->city = $row["city"];
        $user->detailDesc = $row["DetailDesc"];
        $user->AttendeeLimit = $row["AttendeeLimit"];

        $data[] = $user;
        }
        $json = json_encode($data);
        echo $json;
    }else
    {
    echo "Reading failed";
    }
    ?>
