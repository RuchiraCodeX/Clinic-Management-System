<?php
if(isset($_POST['firstname'])) {
	session_start();
	$_SESSION['firstname']=$_POST['firstname'];
	header("Location: AController.php");	
}
?>



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
.Title {
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 25px;
    color: black;
    text-transform: uppercase;
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
    margin-left: 58px;
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

    <form name='Login' method="post" action="AController.php">
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="">
                <img src="logo.png" class="logo">
                <div class="Title">Admin Login</div>
                  

                    <div class="inputbox">
                        
                        <input type="text" name="firstname" id="firstname" required>
                        <label for="">Name or Email</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" id="password" required>
                        <label for="">Password</label>
                    </div>
                    
                    <div class="button">
                    <input type="submit" name="submit" id="submit" value="Login">
                    </div>

                    <div class="register">
                        <p>Don't have a account <a href="http://localhost/hospital/Admin/Registration.php">Register</a></p>
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