<?php
    include "sge_connection.php";

    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $qualification = $_POST['qualification'];
    $course_intrested = $_POST['course_intrested'];
    $why = $_POST['why'];
    $inquiry_date = $_POST['inquiry_date'];
    $comment = $_POST['comment'];

    $date = str_replace('/', '-', $inquiry_date);
    $inquiry_date = date("Y-m-d", strtotime($date));
    $inqury_query = "INSERT INTO inquiry(`iid`,`name`,`address`,`phone`,`email`,`qualification`,`course_intrested`,`why`,`inquiry_date`,`comment`) 
    VALUES (NULL,'$name','$address','$phone','$email','$qualification','$course_intrested','$why','$inquiry_date','$comment')";
				if(mysqli_query($conn,$inqury_query))
				{
					echo"New record created succesfully";
                    //header("Location:index.php");
				}
				else
				{
					echo "Error: " .$sql."".mysqli_error($conn);
				}
			mysqli_close($conn);
?>