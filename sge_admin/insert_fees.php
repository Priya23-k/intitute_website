<?php
    include "sge_connection.php";
    
    $sid = $_POST['sid'];
    $courseid = $_POST['courseid'];
    $amount_paid = $_POST['amount_paid'];
    $paid_mode = $_POST['paid_mode'];
    $pay_date = $_POST['pay_date'];
   // echo $pay_date;
    $remark = $_POST['remark'];


$date = str_replace('/', '-', $pay_date);
$pay_date = date("Y-m-d", strtotime($date));

			$sql = "INSERT INTO fees(`feeid`, `sid`,`courseid`,`amount_paid`,`paid_mode`,`pay_date`,`remark`) 
            VALUES (NULL, '$sid', '$courseid','$amount_paid','$paid_mode','$pay_date','$remark')";

          //  echo $sql;
					if(mysqli_query($conn,$sql))
                    {
                        echo"New record created succesfully";
                        header("Location:add-fees.php");
                    }
                    else
                    {
                        echo "Error: " .$sql."".mysqli_error($conn);
                    }
                mysqli_close($conn);
?>\