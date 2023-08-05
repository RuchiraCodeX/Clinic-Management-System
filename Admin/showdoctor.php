<!DOCTYPE html>
<html>
<head>


<style type="text/css">

table{
    width: 75%;
    border-collapse: collapse;
	border: 4px solid black;
    padding: 5px;
	font-size: 25px;
}

th{
border: 4px solid black;
	background-color: #4CAF50;
    color: white;
	text-align: left;
}
tr,td{
	border: 4px solid black;
	background-color: white;
    color: black;
}





</style>

</head>

<body>
       

        <h1>SHOW DOCTOR</h1><hr>
<?php

if( empty(session_id()) && !headers_sent()){
	session_start();	
		}

$con = mysqli_connect('localhost','root','','hms');
if (!$con)
{
    die('Could not connect: ' . mysqli_error($con));
}
$sql="SELECT * FROM Doctor order by DID ASC";
$result = mysqli_query($con,$sql);
echo "<br><h2>DOCTORS=<b>".mysqli_num_rows($result)."</b></h2><br>";
echo "<table>
<tr>
<th>DID</th>
<th>Doctor Name</th>
<th>DOB</th>
<th>Specialization</th>
<th>Address</th>
<th>Contact</th>
<th>Region</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
	echo "<td>" . $row['did'] . "</td>";
    echo "<td>Dr. " . $row['name'] . "</td>";
    echo "<td>" . $row['dob'] . "</td>";
    echo "<td>" . $row['specialization'] . "</td>";
	echo "<td>" . $row['address'] . "</td>";
	echo "<td>" . $row['contact'] . "</td>";
	echo "<td>" . $row['region'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
if(isset($_POST['logout'])){
		session_unset();
		session_destroy();
		header( "Refresh:1; url=Login Form.php"); 
	}
?>
   

</body>
</html>