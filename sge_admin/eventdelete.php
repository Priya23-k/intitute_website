
<?php  if(isset($_GET['delid']))
	{
		include "sge_connection.php";
			$sql ="DELETE FROM events WHERE eventid=".$_GET['delid'];
			if(mysqli_query($conn,$sql))
			{
				echo mysqli_affected_rows($conn);
			}
			else
			{
				echo "no";
			}
	}  
	mysqli_close($conn);
	?>
