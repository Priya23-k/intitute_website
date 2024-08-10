<?php
    include "sge_connection.php";

    $eventname = $_POST['eventname'];
    $eventdate = $_POST['eventdate'];
    $eventdesc = $_POST['eventdesc'];
    $description = $_POST['description'];
    $eventimg = $_POST['eventimg'];
    $eventtime = $_POST['eventtime'];

    $date = str_replace('/', '-', $eventdate);
    $eventdate = date("Y-m-d", strtotime($date));

			$sql = "INSERT INTO  events(`eventid`,`eventname`,`eventdate`,`eventdesc`,`description`,`eventimg`,`eventtime`)
                        VALUES (NULL, '$eventname', '$eventdate','$eventdesc','$description','$eventimg','$eventtime')";
					if(mysqli_query($conn,$sql))
                    {
                        echo"New record created succesfully";
                        header("Location: add_event.php");
                    }
                    else
                    {
                        echo "Error: " .$sql."".mysqli_error($conn);
                    }
                mysqli_close($conn);
?>