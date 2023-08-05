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
function getDoctorday(val) {
	$.ajax({
	type: "POST",
	url: "getdoctorday.php",
	data:'cid='+val,
	success: function(data){
		$("#doctor-list").html(data);
	}
	});
}

</script>

</head>


<body>

        

		<h1>REMOVE DOCTOR FROM A CLINIC</h1><hr>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<label style="font-size:20px" >City:</label>
		<select name="city" id="city-list" class="demoInputBox"  onChange="getState(this.value);">
		<option value="">Select City</option>
		<?php
		include 'DBConnection.php';
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
		<select id="clinic-list" name="clinic" onchange="getDoctorday(this.value);" >
		<option value="">Select Clinic</option>
		</select>
		
		<label style="font-size:20px" >Doctor & Time:</label>
		<select name="doctor" id="doctor-list" >
		<option value="">Select Day & Time</option>
		</select>
		
		
		<button name="Submit" type="submit">Submit</button>
	</form>
<?php
if( empty(session_id()) && !headers_sent()){
	session_start();	
		}
include 'DBConnection.php';
if(isset($_POST['Submit']))
{
	$cid=$_POST['clinic'];
	$rest=$_POST['doctor'];
	$sql = "DELETE FROM doctor_availability WHERE CID= $cid AND DID= $rest";

	if (mysqli_query($conn, $sql))
		{
		echo "Record deleted successfully.Refreshing....";
		header( "Refresh:2; url=deletedoctorclinic.php");
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