<!DOCTYPE html>
<html>
<head>

<title>Sidebar Menu using HTML, CSS - Codingscape</title>



	


</head>
<body>


		<h1>DELETE CLINIC</h1><hr>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
Enter CID:<input type="number" name="cid">
			<button type="submit" name="Submit1">Delete by CID</button>
			<br>---------OR---------<br>
Select Name:<br><?php
				require_once('DBConnection.php');
				$clinic_result = $conn->query('select * from clinic order by City,Town,CID ASC');
				?>
				
				<select name="clinicname">
				<option value="">---Select Name---</option>
				<?php
				if ($clinic_result->num_rows > 0) {
				while($row = $clinic_result->fetch_assoc()) {
				?>
				<option value="<?php echo $row["cid"]; ?>"><?php echo $row["name"].", ".$row["town"].", ".$row["city"].",(".$row["address"].")"; ?></option>
				<?php
					}
					}
				?>
				</select>
				
				<button type="submit" name="Submit2">Delete by Name</button>
</form>			
<?php
if( empty(session_id()) && !headers_sent()){
	session_start();	
		}
include 'DBConnection.php';
if(isset($_POST['Submit1']))
{
	$cid=$_POST['cid'];
	$sql = "DELETE FROM clinic WHERE CID= $cid ";

	if (mysqli_query($conn, $sql))
		{
		echo "Record deleted successfully.Refreshing....";
		header( "Refresh:2; url=deleteclinic.php");
		}
	else
		{
			echo "Error deleting record: " . mysqli_error($conn);
		}

}
if(isset($_POST['Submit2']))
{
	$cid=$_POST['clinicname'];
	$sql = "DELETE FROM clinic WHERE cid = $cid ";

	if (mysqli_query($conn, $sql))
		{
		echo "Record deleted successfully.Refreshing....";
		header( "Refresh:2; url=deleteclinic.php");
		}
	else
		{
			echo "Error deleting record: " . mysqli_error($conn);
		}

}	
if(isset($_POST['logout'])){
		session_unset();
		session_destroy();
		header( "Refresh:1; url=Login Form"); 
	}
?>			
     
</body>
</html>