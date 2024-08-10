<?php
    include "sge_connection.php";

    $tname = $_POST['tname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phoneno = $_POST['phoneno'];
    $tcourseid = $_POST['tcourseid'];
    $tdegree = $_POST['tdegree'];
    $tdesignation = $_POST['tdesignation'];
    $experience = $_POST['experience'];
    $bio = $_POST['bio'];
    $timg = $_POST['timg'];
    
    $date = str_replace('/', '-', $dob);
    $dob = date("Y-m-d", strtotime($date));

			$sql = "INSERT INTO `teacher`(`tid`, `tname`,`gender`, `dob`, `email`, `address`, 
            `phoneno`, `tcourseid`, `tdegree`, `tdesignation`, `experience`, `bio`, `timg`)
             VALUES (NULL, '$tname','$gender','$dob','$email',' $address',
            '$phoneno',' $tcourseid ','$tdegree','$tdesignation','$experience','$bio','$timg')";
					if(mysqli_query($conn,$sql))
                    {
                        echo"New record created succesfully";
                        header("Location: add-teacher.php");
                    }
                    else
                    {
                        echo "Error: " .$sql."".mysqli_error($conn);
                    }
                mysqli_close($conn);
?>