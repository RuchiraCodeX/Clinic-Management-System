<!DOCTYPE html>
<html>
<head>

<title>Sidebar Menu using HTML, CSS - Codingscape</title>



</head>
<body>

		<h1>DELETE DOCTOR</h1><hr>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
Enter DID:<input type="number" name="did">
			<button type="submit" name="Submit1">Delete by DID</button>
			<br>---------OR---------<br>
Select Name:<br>

                <?php
				require_once('DBConnection.php');
				$doctor_result = $conn->query('select * from doctor order by did ASC');
				?>
				
				<select name="doctorname">
				<option value="">---Select Name---</option>

				<?php
				if ($doctor_result->num_rows > 0) {
				while($row = $doctor_result->fetch_assoc()) {

				?>

				<option value="<?php 
				echo $row["did"]; 
				?>">
				<?php echo "Dr.".$row["name"]; 
				 ?>
			
			</option>
				<?php
					}
					}
				?>
				</select>
				
				<button type="submit" name="Submit2">Delete by Name</button>
</form>			
<?php

	session_start();		
include 'DBConnection.php';
if(isset($_POST['Submit1']))
{
	$did=$_POST['did'];
	$sql = "DELETE FROM doctor WHERE DID= $did ";
	$sqlda = "DELETE FROM doctor_availability WHERE DID= $did ";
	if (mysqli_query($conn, $sql))
		{
		echo "Record deleted successfully from doctors table.Refreshing....";
		header( "Refresh:3; url=deletedoctor.php");
		}
	else
		{
			echo "Error deleting record: " . mysqli_error($conn);
		}
		
	if (mysqli_query($conn, $sqlda))
		{
		echo "Record deleted successfully from doctors_availability table.Refreshing....";
		header( "Refresh:3; url=deletedoctor.php");
		}
	else
		{
			echo "Error deleting record: " . mysqli_error($conn);
		}
}
if(isset($_POST['Submit2']))
{
	$did=$_POST['doctorname'];
	$sql = "DELETE FROM doctor WHERE did = $did ";
	$sqlda = "DELETE FROM doctor_availability WHERE DID= $did ";
	if (mysqli_query($conn, $sql))
		{
		echo "Record deleted successfully.Refreshing....";
		header( "Refresh:3; url=deletedoctor.php");
		}
	else
		{
			echo "Error deleting record: " . mysqli_error($conn);
		}
	if (mysqli_query($conn, $sqlda))
		{
		echo "Record deleted successfully from doctors_availability table.Refreshing....";
		header( "Refresh:3; url=deletedoctor.php");
		}
	else
		{
			echo "Error deleting record: " . mysqli_error($conn);
		}
}	
if(isset($_POST['logout'])){
		session_unset();
		session_destroy();
		header( "Refresh:1; url=Login Form.php"); 
	}
?>	
   
</body>
</html>