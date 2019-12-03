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
    }
    $conn = mysqli_connect("10.140.61.247:3306", "citauser", "citauser", "cita_events") or die("could not connect to DB");
    //Test
    $result = $conn->query("SELECT * from EVENTS");
//    $r = mysqli_fetch_assoc($sth)
//    $rows = array();
    if($result){
        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $user = new User();
        $user->id = '';
        $user->calendarId = 'allday';
        $user->title = $row["ShortDesc"];
        $user->category = 'time';
        $user->dueDateClass = '';
        $user->start = $row["EventStart"];
        $user->end = $row["EventEnd"];
        $data[] = $user;
        }
        $json = json_encode($data);
        echo $json;
    }else
    {
    echo "Reading failed";
    }
    ?>
