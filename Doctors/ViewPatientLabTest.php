<!DOCTYPE html>
<html>
<head>


<style type="text/css"></style>

</head>

<body>
    <center>
    <form action="" method="post" enctype="multipart/form-data">
    <h1>LAB TEST</h1><hr>

    
        <table border="1">
    <thead>
        <tr>
        <th>ID</th>
        <th>Patient Name</th>
        <th>Area</th>
        <th>Lab</th>
        <th>Phone Number</th>
        <th>Prescription</th>
        </tr>
</thead>


<?php

$con = mysqli_connect('localhost','root','','hms');
if (!$con)
{
    die('Could not connect: ' . mysqli_error($con));
}
$sql="SELECT * FROM labtest ";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
    ?>

    <tr>
	<td><?php echo $row['Id'] ?></td>
    <td><?php echo $row['PatientName'] ?></td>
    <td><?php echo $row['Area'] ?></td>
    <td><?php echo $row['Lab'] ?></td>
	<td><?php echo $row['PhoneNumber'] ?></td>
    <td><?php echo '<img src="data:image;base64,'.base64_encode($row['image_url']).'" alt="Image" style="width:300px; height:300px;" >'; ?> </td>
    </tr>
	<?php
    
    
}

?>


</table>

    </form>   

</center>     
</body>
</html>