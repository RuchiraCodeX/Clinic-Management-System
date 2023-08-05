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

        

        <h1>SHOW CLINIC</h1><hr>
<?php

if( empty(session_id()) && !headers_sent()){
	session_start();	
		}
if(isset($_POST['logout'])){
		session_unset();
		session_destroy();
		header( "Refresh:1; url=Login Form.php"); 
	}
$con = mysqli_connect('localhost','root','','hms');
if (!$con)
{
    die('Could not connect: ' . mysqli_error($con));
}
$sql="SELECT * FROM clinic order by City,Town,CID ASC";
$result = mysqli_query($con,$sql);
echo "<br><h2>CLINICS=<b>".mysqli_num_rows($result)."</b></h2><br>";
echo "<table>
<tr>
<th>CID</th>
<th>Clinic Name</th>
<th>Address</th>
<th>District</th>
<th>City</th>
<th>Contact</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
	echo "<td>" . $row['cid'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['town'] . "</td>";
    echo "<td>" . $row['city'] . "</td>";
	echo "<td>" . $row['contact'] . "</td>";
	
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>





        </div>

    

</body>
</html>