<?php
echo "connected";
            $conn = mysqli_connect("localhost", "cita", "cita", "cita_events") or die("could not connect to DB");
            //Test
            echo "<script>console.log('hello world')</script>";
            $sth = mysqli_query($conn, "SELECT * from EVENTS");
            $rows = array();
            if($sth)
            {
             while($r = mysqli_fetch_assoc($sth)) {
                            $rows[] = $r;
                        }
                        print json_encode($rows);
                        echo "connected3";
            }
//            while($r = mysqli_fetch_assoc($sth)) {
//                $rows[] = $r;
//            }
//            print json_encode($rows);
//            echo "connected3";
            ?>
