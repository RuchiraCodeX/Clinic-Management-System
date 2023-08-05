<?php
include ('DBConnect.php');
if(isset($_POST['submit'])){
    $username=$_POST['firstname'];
    $password=$_POST['password'];

$sql="SELECT * FROM users WHERE Name=? OR Email=? LIMIT 1";
$stmt=$conn->prepare($sql);
$stmt->bind_param('ss',$username,$username);
$stmt->execute();
$result=$stmt->get_result();
$user=$result->fetch_assoc();

if(password_verify($password,$user['Password'])){

    echo "You are now login";

}else{
    echo "Wrong credentials";
}


}
?>