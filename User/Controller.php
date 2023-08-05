<?php

if(isset($_POST['firstname'])) {
	session_start();
	$_SESSION['firstname']=$_POST['firstname'];
		
}


include ('DBConnect.php');
if(isset($_POST['submit'])){
    $username=$_POST['firstname'];
    $password=$_POST['password'];

$sql="SELECT * FROM patient WHERE Name=? OR Email=? LIMIT 1";
$stmt=$conn->prepare($sql);
$stmt->bind_param('ss',$username,$username);
$stmt->execute();
$result=$stmt->get_result();
$user=$result->fetch_assoc();

if(password_verify($password,$user['Password'])){

   
    header("Location:User Dashboard.php");
}else{
    echo "Wrong credentials";
    header( "Refresh:1; url=Login Form.php");
}


}
?>