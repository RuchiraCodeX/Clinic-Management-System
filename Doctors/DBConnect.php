<html>
    <head>
    <title>
Connecting mysql server
    </title>
</head>
    <body>
    <?php

$dbhost = 'localhost';
$dbbuser='root';
$dbpass='';
$conn = mysqli_connect($dbhost,$dbbuser,$dbpass);

if(! $conn ) {
	die('Could not connect:' . mysqli_error());
}
    echo 'Connected Successfully';


//mysql_close($conn); 

$db=mysqli_select_db($conn,'hms');

if(!$db)
{
	echo ' Select the Database';
	
}
else
    echo ' Database Selected';
 ?>


</body>
</html>