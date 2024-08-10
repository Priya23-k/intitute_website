<?php
	
	//create connection
	$conn = mysqli_connect("localhost","root","","sge");
   if(isset($_GET['selcat1']))
   {
	   //echo "here";
   $qrysel="select student.fname,student.sid from student Left Join course ON student.courseid= course.courseid where student.courseid=".$_GET['selcat1'];
	$rs=mysqli_query($conn , $qrysel);
   //echo $rs;
   $str = "";
	   if(!$rs)
	   {
		   echo"<font color=red size=4>Incorrect my sql query</font>";
		   echo"<br>".$qrysel;
		   die();
	   }
	   else
	   {
		   $str = '<option value="1">Select Student Name</option>';
			
			while($v=mysqli_fetch_array($rs, MYSQLI_ASSOC))
			{
				$str .= '<option value='.$v["sid"].'>'.$v["fname"].'</option>';
			}
			
	   }
	  // header('Content-type:application/html;charset=utf-8');
	   echo $str;
   }

   if(isset($_GET['delid']))
	{
			$sql ="DELETE FROM fees WHERE feeid=".$_GET['delid'];
			if(mysqli_query($conn,$sql))
			{
				echo mysqli_affected_rows($conn);
			}
			else
			{
				echo 0;
			}
	} 


	   
	mysqli_close($conn);
	
?>
