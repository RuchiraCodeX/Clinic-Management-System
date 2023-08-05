<?php
if(isset ($_POST['submit'])) {
	include("DBConnect.php");
	
	$did=$_POST['did'];
	$name=$_POST['firstname'];
	$gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $specialization=$_POST['specialization'];
	$contact=$_POST['tel'];
	$address=$_POST['address'];
	$username=$_POST['username'];	
	$password=$_POST['password'];
	$region=$_POST['region'];
	


	
	$sql = "INSERT INTO doctor (did, name, gender, dob,specialization,contact,address,username,password,region) VALUES ('$did','$name','$gender','$dob','$specialization','$contact','$address','$username','$password','$region') ";

	if (mysqli_query($conn, $sql)) 
	{
		echo "<h2>Account created successfully!! Redirecting to Login Page....</h2>";
		header( "Refresh:3; url=Login Form.php");

	} 
	else
	{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
}

    else{
		echo "Your form is not submitted yet please fill the form and visit again";

}
?>


