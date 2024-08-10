<?php
    include "sge_connection.php";

    $coursename = $_POST['coursename'];
    $courseimg = $_POST['courseimg'];
    $coursedesc = $_POST['coursedesc'];
    $description = $_POST['description'];
    $duration = $_POST['duration'];
    $totalstudent = $_POST['totalstudent'];
    $type = $_POST['type'];

			$sql = "INSERT INTO course(`courseid`,`coursename`,`courseimg`,`coursedesc`,`description`,`duration`,`totalstudent`,`type`)
                        VALUES (NULL, '$coursename', '$courseimg','$coursedesc','$description','$duration','$totalstudent','$type')";
					if(mysqli_query($conn,$sql))
                    {
                        echo"New record created succesfully";
                        header("Location: all-subject.php");
                    }
                    else
                    {
                        echo "Error: " .$sql."".mysqli_error($conn);
                    }
                mysqli_close($conn);
?>