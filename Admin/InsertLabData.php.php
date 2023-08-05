<?php
if(isset ($_POST['submit'])) {
	include("DBConnection.php");
    
	$labname = $_POST['labname'];
	
	
	$sql = "INSERT INTO labs(Lab)VALUES('$labname')";
	$result = mysqli_query($conn, $sql);
	
	if(!$result) {
		die("Could not enter data: " . mysqli_error($conn));
	}
	else {
		
		echo "<script>alert('Entered data successfully');</script>";
		header( "Refresh:3; url=AddLabs.php");
	}
}
else {
	
	echo "<script>alert('Your form is not submitted yet. Please fill the form and vist again');</script>";
}
?>

