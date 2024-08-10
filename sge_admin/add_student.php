<?php
    include "sge_connection.php";

    $scode = $_POST['scode'];
    $fname = $_POST['fname'];
    $midname = $_POST['midname'];
    $lname = $_POST['lname'];
    $fathername = $_POST['fathername'];
    $mothername = $_POST['mothername'];
    $dob = $_POST['dob'];
    $courseid = $_POST['courseid'];
    $gender = $_POST['gender'];
    $marstatus = $_POST['marstatus'];
    $contact = $_POST['contact'];
    $pcontact = $_POST['pcontact'];
    $email = $_POST['email'];
    $coreaddress = $_POST['coreaddress'];
    $peraddress = $_POST['peraddress'];
    $aadharcardno = $_POST['aadharcardno'];
    $xboard = $_POST['xboard'];
    $xmarks = $_POST['xmarks'];
    $xiiboard = $_POST['xiiboard'];
    $xiimarks = $_POST['xiimarks'];
    $password = $_POST['password'];
    $aadharcard = $_POST['aadharcard'];
    $profile = $_POST['profile'];

			$sql = "INSERT INTO student(`sid`, `scode`,`fname`,`midname`,`lname`,`fathername`,`mothername`,`dob`,
            `courseid`,`gender`,`marstatus`,`contact`,`pcontact`, `email`,`coreaddress`,`peraddress`,`aadharcardno`,
            `10board`,`10marks`,`12board`,`12marks`,`password`,`aadharcard`,`profile`) 
            VALUES (NULL, '$scode', '$fname','$midname','$lname','$fathername','$mothername','$dob',
            '$courseid','$gender','$marstatus','$contact','$pcontact', '$email', '$coreaddress','$peraddress','$aadharcardno',
            '$xboard','$xmarks','$xiiboard','$xiimarks','$password','$aadharcard','$profile')";
					if(mysqli_query($conn,$sql))
                    {
                        echo"New record created succesfully";
                    }
                    else
                    {
                        echo "Error: " .$sql."".mysqli_error($conn);
                    }
                mysqli_close($conn);