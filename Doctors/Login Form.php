
<!DOCTYPE html>
<html lang="en">
<head>

    
  <title>Login Form</title>
  <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
*{
    margin: 0;
    padding: 0;
    font-family: 'poppins',sans-serif;
}

body {
    background: url(27.svg)no-repeat;
    background-position: right;
    /* background-size: cover; */
    margin-right: 227px;
    float: right;
}



section {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    width: 100%;
    /* margin-left: 500px; */
    padding-left: 186px;
}

.form-box{
    position: relative;
    width: 400px;
    height: 450px;
    background: transparent;
    border: 1px solid rgba(190, 190, 190, 0.5);
    border-radius: 7px;
    backdrop-filter: blur(15px);
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 700px;
    

}
h2{
    font-size: 24px;
    font-weight: 400;
    color: #080808;
    text-align: center;
}
.inputbox{
    position: relative;
    margin: 30px 0;
    width: 310px;
    border-bottom: 2px solid #e7e6e6;
}
.inputbox label{
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    color: #5f5f5f;
    font-size: 1em;
    pointer-events: none;
    transition: .5s;
}
input:focus ~ label,
input:valid ~ label{
top: -5px;
}
.inputbox input {
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
    padding:0 35px 0 5px;
    color: #050505;
}
.inputbox ion-icon{
    position: absolute;
    right: 8px;
    color: #a8a8a8;
    font-size: 1.2em;
    top: 20px;
}


input#submit {
    width: 100%;
    height: 40px;
    border-radius: 40px;
    background: #07e7fe;
    border: none;
    outline: none;
    cursor: pointer;
    font-family: "Google Sans",Roboto,Arial,sans-serif;
    color: #f3f3f3;
    font-size: .875rem;
    letter-spacing: .0107142857em;
    font-weight: 600;
    text-transform: none;
}

img.logo {
    width: 196px;
    margin-left: 50px;
    margin-bottom: -55px;
    margin-top: -66px;
}


.register{
    font-size: 13px;
    color: #242424;
    text-align: center;
    margin: 25px 0 10px;
}
.register p a{
    text-decoration: none;
    color: #1a73e8;
    font-size:13px;
    font-family: "Google Sans",Roboto,Arial,sans-serif;
}
.register p a:hover{
    text-decoration: underline;
}
    </style>
</head>
<body>



<?php
session_start();
if(count($_POST)>0) {
	include "DBConnect.php";
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql = "SELECT * FROM doctor WHERE username='$username' and password='$password'";
	$result = mysqli_query($conn, $sql);
	
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$_SESSION['doctor'] = $row['username'];
	if(mysqli_num_rows($result) == 1) {
		header("Location: mainpage.php");
	}
	else {
		$msg = "Your username or passsword is invalid";
        header( "Refresh:1; url=Login Form.php");
	}
	echo "<script type='text/javascript'>
	alert('$msg');
	</script>";
}
?>

    <form name='Login' method="post" action="" onSubmit="">
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="">
                <img src="logo.png" class="logo">
                   

                    <div class="inputbox">
                        
                        <input type="text" name="username" id="username" required>
                        <label >Username</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" id="password" required>
                        <label >Password</label>
                    </div>
                    
                    <div class="button">
                    <input type="submit" name="submit" id="submit" value="Login">
                    </div>

                    <div class="register">
                        <p>Don't have a account <a href="Registration.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </form>
</body>
</html>