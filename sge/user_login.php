<?php
 include "sge_connection.php";
	session_start();

	$email = $_POST['email'];
	$password = $_POST['password'];
    echo $email;
	// if($email == null && $password == null)
	// {
	// 	echo "please enter your email and password.";
	// }

	// $sql = "select * from student WHERE email='$email' AND password='$password'";

	// $rs = mysqli_query($conn, $sql);

	// if(mysqli_num_rows($rs)>0)
	// {
	// 	$row = mysqli_fetch_assoc($rs);
	// 	if($row['email'] == $email && $row['password'] == $password)
	// 	{
	// 		$_SESSION['email'] = $row['email'];
	// 		$_SESSION['fname'] = $row['fname'];

	// 		//header("Location:index.php");
	// 	}else {
	// 		echo "This credential is not matching our record ";
	// 	}
	// }else {
	// 	echo "This credential is not matching our record ";
	// }
	// mysqli_close($conn);
?>