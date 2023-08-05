<?php

if(isset($_POST['firstname'])) {
	session_start();
	$_SESSION['firstname']=$_POST['firstname'];
		
}

include ('DBConnection.php');
if(isset($_POST['submit'])){
    $username=$_POST['firstname'];
    $password=$_POST['password'];

$sql="SELECT * FROM admin WHERE Name=? OR Email=? LIMIT 1";
$stmt=$conn->prepare($sql);
$stmt->bind_param('ss',$username,$username);
$stmt->execute();
$result=$stmt->get_result();
$user=$result->fetch_assoc();


if(password_verify($password,$user['Password'])){

    header("Location: mainpage.php");
 }else{
    $msg = "Your email or passsword is invalid";
    header( "Refresh:3; url=Login Form.php");
 }
 echo "<script type='text/javascript'>
 alert('$msg');
 </script>";
}

?>