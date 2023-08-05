<?php
if(isset ($_POST['submit'])) {
	include("DBConnection.php");
	
	$firstname=$_POST['firstname'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$tel=$_POST['tel'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$password=$_POST['password'];
	$password=password_hash($password,PASSWORD_DEFAULT);
	
	$sql="INSERT INTO admin (Name,Email,Address,Tel,Age,Gender,Password) VALUES (?,?,?,?,?,?,?)";
	$stmt=$conn->prepare($sql);
	$stmt->bind_param('sssiiss',$firstname,$email,$address,$tel,$age,$gender,$password);
	
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