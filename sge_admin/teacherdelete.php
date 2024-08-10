 <?php  if(isset($_GET['delid']))
	{
        include "sge_connection.php";
			$sql ="DELETE FROM teacher WHERE tid=".$_GET['delid'];
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