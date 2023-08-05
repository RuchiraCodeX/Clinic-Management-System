<html>
<head>
<title>Sidebar Menu using HTML, CSS - Codingscape</title>

</head>
<body>


		<h1>ADD CLINIC</h1><hr>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  CID:<input type="number" name="cid" required>
  <br>
  Clinic Name: <input type="text" name="name" required>
  <br>
  Address: <input type="text" name="address" required>
  <br>
  District: <input type="text" name="town" required>
  <br>
  City: <input type="text" name="city" required>
  <br>
  Contact no.: <input type="number" name="contact" maxlength="10" minlength="10" required>
  <br>
  <button type="submit" name="Submit">REGISTER</button>
</form>


<?php
if( empty(session_id()) && !headers_sent()){
	session_start();	
		}
if(isset($_POST['logout'])){
		session_unset();
		session_destroy();
		header( "Refresh:1; url=Login Form.php"); 
	}
function newclinic()
{
	include 'DBConnection.php';
		$cid=$_POST['cid'];
		$name=$_POST['name'];
		$town=$_POST['town'];
		$city=$_POST['city'];
		$contact=$_POST['contact'];
		$address=$_POST['address'];
		$sql = "INSERT INTO clinic (CID, Name, Address, Town, City, Contact, mid) VALUES ('$cid','$name','$address','$town','$city','$contact','')";

	if (mysqli_query($conn, $sql)) 
	{
		echo "<h2>Record created successfully!! Redirecting to Admin mainpage page....</h2>";
		header( "Refresh:3; url=addclinic.php");

	} 
	else
	{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
function checkcid()
{
	include 'DBConnection.php';
	$cid=$_POST['cid'];
	$sql= "SELECT * FROM clinic WHERE cid = '$cid'";

	$result=mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)!=0)
       {
			echo"<b><br>CID already exists!!";
       }
	else 
		if(isset($_POST['Submit']))
	{ 
		newclinic();
	}

	
}
if(isset($_POST['Submit']))
{
	if(!empty($_POST['cid'])&&!empty($_POST['name'])&&!empty($_POST['address'])&&!empty($_POST['town'])&&!empty($_POST['city']) && !empty($_POST['contact']))
			checkcid();
	else
		echo "EMPTY VALUES NOT ALLOWED";
}

?>
      
</body>
</html>
