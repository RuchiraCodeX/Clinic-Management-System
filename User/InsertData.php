<?php
if(isset ($_POST['submit'])) {
	include("DBConnect.php");
	
	$firstname=$_POST['firstname'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$tel=$_POST['tel'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$password=$_POST['password'];
	$password=password_hash($password,PASSWORD_DEFAULT);
	$username=$_POST['username'];
	
	$sql="INSERT INTO patient (Name,Email,Address,Tel,Age,Gender,Password,username) VALUES (?,?,?,?,?,?,?,?)";
	$stmt=$conn->prepare($sql);
	$stmt->bind_param('sssiisss',$firstname,$email,$address,$tel,$age,$gender,$password,$username);
	
	if($stmt->execute()){
		echo "Success";
	}
	else{
		echo "Faild to register";
		
	}
	
}

    else{
		echo "Your form is not submitted yet please fill the form and visit again";

}
?>