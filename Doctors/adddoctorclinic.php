<html>
<head>
<script src="jquerypart.js" type="text/javascript"></script>
 
<script>
function getState(val) {
	$.ajax({
	type: "POST",
	url: "getclinic.php",
	data:'city='+val,
	success: function(data){
		$("#clinic-list").html(data);
	}
	});
}
function getDoctorRegion(val) {
	$.ajax({
	type: "POST",
	url: "getdoctorregion.php",
	data:'city='+val,
	success: function(data){
		$("#doctor-list").html(data);
	}
	});
}

</script>
</head>
<body>

<h1>ASSIGN DOCTOR TO A CLINIC</h1><hr>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<label style="font-size:20px" >City:</label>
		<select name="city" id="city-list" class="demoInputBox"  onChange="getState(this.value);getDoctorRegion(this.value);">
		<option value="">Select City</option>
		<?php
		include 'DBConnect.php';
		$sql1="SELECT distinct City FROM clinic";
         $results=$conn->query($sql1); 
		while($rs=$results->fetch_assoc()) { 
		?>
		<option value="<?php echo $rs["City"]; ?>"><?php echo $rs["City"]; ?></option>
		<?php
		}
		?>
		</select>
        
	
		<label style="font-size:20px" >Clinic:</label>
		<select id="clinic-list" name="clinic"  >
		<option value="">Select Clinic</option>
		</select>
		
		<label style="font-size:20px" >Doctor:</label>
		<select name="doctor" id="doctor-list">
		<option value="">Select Doctor</option>
		</select>
		
		<label style="font-size:20px" >
		Available Days<br>
		<table>
		<tr><td>Monday:</td><td><input type="checkbox" value="Monday" name="daylist[]"/></td></tr>
		<tr><td>Tuesday:</td><td><input type="checkbox" value="Tuesday" name="daylist[]"/></td></tr>
		<tr><td>Wednesday:</td><td><input type="checkbox" value="Wednesday" name="daylist[]"/></td></tr>
		<tr><td>Thursday:</td><td><input type="checkbox" value="Thursday" name="daylist[]"/></td></tr>
		<tr><td>Friday:</td><td><input type="checkbox" value="Friday" name="daylist[]"/></td></tr>
		<tr><td>Saturday:</td><td><input type="checkbox" value="Saturday" name="daylist[]"/></td></tr>
		</table>
		Availability(24 hour Format):<br>
		From:<input type="time" name="starttime"><br>
		To:<input type="time" name="endtime"> &nbsp &nbsp &nbsp
		
		</label>
		<button name="Submit" type="submit">Submit</button>
	</form>
<?php
session_start();
if(isset($_POST['logout'])){
		session_unset();
		session_destroy();
		header( "Refresh:1; url=Login Form.php"); 
	}
if(isset($_POST['Submit']))
{
		include 'DBConnect.php';
		$cid=$_POST['clinic'];
		$did=$_POST['doctor'];
		$starttime=$_POST['starttime'];
		$endtime=$_POST['endtime'];
		
		foreach($_POST['daylist'] as $daylist)
		{
				$sql = "INSERT INTO doctor_availability (CID, DID, Day, Starttime, Endtime) VALUES ('$cid','$did','$daylist','$starttime','$endtime')";
				if (mysqli_query($conn, $sql)) 
				{
					echo "<h2>Record created successfully( CID=$cid DID=$did Day=$daylist )!!</h2>";
				} 
				else
				{
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
		}
}

?>

</body>
</html>