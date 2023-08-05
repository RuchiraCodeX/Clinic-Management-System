<html>
<head>
<title>Sidebar Menu using HTML, CSS - Codingscape</title>


    <style type="text/css">


        </style>
</head>
<body>
    
      <h1>ADD DOCTOR</h1><hr>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  DID:<input type="number" name="did" required>
  <br>
  Name: <input type="text" name="name" required>
  <br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <br>
  DOB: <input type="date" name="dob" required>
  <br>
  Specialization:<input type="text" name="specialization" required>
  <br>
  Contact no.: <input type="number" name="contact" maxlength="10" minlength="10" required>
  <br>
  Address: <input type="text" name="address" required>
  <br>
  Username: <input type="text" name="username" required>
  <br>
  Password: <input type="password" name="pwd" required>
  <br>
  Region: <input type="text" name="region" required>
  <br>
  
  <button type="submit" name="Submit">REGISTER</button>
</form>


<?php
 if( empty(session_id()) && !headers_sent()){
	session_start();	
		
if(isset($_POST['logout'])){
		session_unset();
		session_destroy();
		header( "Refresh:1; url=Login Form.php"); 
	}
}
function newUser()
{
	include 'DBConnect.php';
		$did=$_POST['did'];
		$name=$_POST['name'];
		$gender=$_POST['gender'];
		$dob=$_POST['dob'];
		$specialization=$_POST['specialization'];
		$contact=$_POST['contact'];
		$address=$_POST['address'];
		$username=$_POST['username'];
		$password=$_POST['pwd'];
		$region=$_POST['region'];
		$sql = "INSERT INTO doctor (did, name, gender, dob,specialization,contact,address,username,password,region) VALUES ('$did','$name','$gender','$dob','$specialization','$contact','$address','$username','$password','$region') ";

	if (mysqli_query($conn, $sql)) 
	{
		echo "<h2>Record created successfully!! Redirecting to Admin mainpage page....</h2>";
		header( "Refresh:3; url=Login Form.php");

	} 
	else
	{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
function checkdid()
{
	include 'DBConnect.php';
	$did=$_POST['did'];
	$sql= "SELECT * FROM doctor WHERE DID = '$did'";

	$result=mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)!=0)
       {
			echo"<b><br>DID already exists!!";
       }
	else 
		if(isset($_POST['Submit']))
	{ 
		newUser();
	}

	
}
function checkusername()
{
	include 'DBConnect.php';
	$usn=$_POST['username'];
	$sql= "SELECT * FROM doctor WHERE Username = '$usn'";

	$result=mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)!=0)
       {
			echo"<b><br>Username already exists!!";
       }
	else 
		if(isset($_POST['Submit']))
	{ 
		checkdid();
	}

	
}
if(isset($_POST['Submit']))
{
	if(!empty($_POST['did']) && !empty($_POST['username']) && !empty($_POST['pwd'])&& !empty($_POST['region']) &&!empty($_POST['specialization']) &&!empty($_POST['name']) &&!empty($_POST['dob'])&& !empty($_POST['gender']) &&!empty($_POST['address']) && !empty($_POST['contact']))
		checkusername();
	else
		echo "EMPTY VALUES NOT ALLOWED";
}

?>
      
</body>
</html>