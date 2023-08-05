<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>NewForm</title>
	
	<style type="text/css">
		
* {
		box-sizing: border-box;
        font-family: sans-serif;
}

.background-image {
	
	background-image: url("Pixel_Working_03.jpg");
	background-size:cover;
	background-repeat: no-repeat;
	width: 100%;
	height: 100vh;
}
		
body{
    margin: 0;
	padding: 0;
		}
		
.Main.form{
    max-width: 500px;
    width: 100%;
    background:white;
    margin: -548px auto;
    box-shadow: 1px 1px 2px rgba(0,0,0,0.125);
    padding: 30px;
}
		
		
.textbox {
	margin-bottom: 15px;
    display: flex;
    align-items: center;
}
		
.Main.form .Title {
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 25px;
    color: #07e7fe;
    text-transform: uppercase;
    text-align: center;
}
		
label {
    width: 200px;
    color: #757575;
    margin-right: 10px;
    font-size: 14px;
	

}
		
.textbox input.input {
    width: 100%;
    outline: none;
    border: 1px solid #d5dbd9;
    font-size: 15px;
    padding: 8px 10px;
    border-radius: 3px;
    transition: all 0.3s ease;
}
		
input[type="email"] {
			
	width: 100%;
    outline: none;
    border: 1px solid #d5dbd9;
    font-size: 15px;
    padding: 8px 10px;
    border-radius: 3px;
    transition: all 0.3s ease;
}

input[type="password"] {
			
	width: 100%;
    outline: none;
    border: 1px solid #d5dbd9;
    font-size: 15px;
    padding: 8px 10px;
    border-radius: 3px;
    transition: all 0.3s ease;
}
		
				
label.check {
			
	width: 15px;
    height: 15px;
    position: relative;
    display: block;
    cursor: pointer;
}
		


p {
	font-size: 14px;
    color: #757575;
}

.textbox input.btn {
	width: 100%;
    padding: 8px 10px;
    font-size: 15px;
    border: 0px;
    background: #fec107;
    color: #fff;
    cursor: pointer;
    border-radius: 3px;
    outline: none;
}

		
.textbox input.btn {
	width: 100%;
    padding: 8px 10px;
    font-size: 15px;
    border: 0px;
    background: #07e7fe;
    color: #fff;
    cursor: pointer;
    border-radius: 3px;
    outline: none;
}

input.btn:hover{
    background: #8eedf7;
    transform:0.5s;
}

.Main.form .SecTitle {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 25px;
    color: #a7a6a4;
    text-align: center;
    font-family: ui-monospace;
}

img.logo {
    width: 196px;
    margin-left: 130px;
    margin-bottom: -35px;
    margin-top: -55px;
}



select {
	
	appearance: none;
    outline: none;
    width: 100%;
    height: 100%;
    border: 0px;
    padding: 8px 10px;
    font-size: 15px;
    border: 1px solid #d5dbd9;
    border-radius: 3px;
	font-family: inherit;
}
		
.Gselect {
	position: relative;
    width: 100%;
    height: 37px;
}

.Gselect:before{
    content: "";
    position: absolute;
    top: 12px;
    right: 10px;
    border: 8px solid;
    border-color: #d5dbd9 transparent transparent transparent;
    pointer-events: none;
}

input#age {
	width: 100%;
    outline: none;
    border: 1px solid #d5dbd9;
    font-size: 15px;
    padding: 8px 10px;
    border-radius: 3px;
    transition: all 0.3s ease;

}

input#tel {
	width: 100%;
    outline: none;
    border: 1px solid #d5dbd9;
    font-size: 15px;
    padding: 8px 10px;
    border-radius: 3px;
    transition: all 0.3s ease;

}

input#address {

    width: 100%;
    outline: none;
    border: 1px solid #d5dbd9;
    font-size: 15px;
    padding: 8px 10px;
    border-radius: 3px;
    transition: all 0.3s ease;
}
		
		
	</style>


<script type="text/javascript">
    function formValidation()
    {
        

    var uname = document.Admin.firstname;
    var uemail = document.Admin.email;
    var uaddress=document.Admin.address;
    var utel=document.Admin.tel;
    var uage=document.Admin.age;
    // Convert user entered age to a number
    var ugender=document.Admin.gender;
    var upassword= document.Admin.password;
    var uconfirmpassword = document.Admin.confirmpassword;
   
    
    if(Emptyfield(uname,uemail,uaddress,utel,ugender,upassword,uconfirmpassword))
    {
        if(allLetter(uname))
        {
            if(ValidateEmail(uemail))
            { 
                if(ValidateAddress(uaddress))
                {
                    if(ValidateTel(utel))
                    {
                        if(ValidateAge(uage))
                        {
                            if(ValidatePassword())
                            {
                    
                       
                    
                        
                    return true;
                    }
    
    
                }
                    }
}
            }
    }
    }
    return false;
    } //End of Form Validation
    


    function Emptyfield(uname,uemail,uaddress,utel,uage,upassword,uconfirmpassword)
    { 
    var uname_len = uname.value.length;
    var uemail_len = uemail.value.length;
    var uaddress_len=uaddress.value.length;
    var utel_len=utel.value.length;
    var uage_len=uage.value.length;
    var upassword_len = upassword.value.length;
    var uconfirmpassword_len = uconfirmpassword.value.length;
    
    if (uname_len == 0 || uemail_len == 0|| uaddress_len==0 ||  utel_len==0 || uage_len==0 ||upassword_len == 0||uconfirmpassword_len == 0)
    {
    alert("Fields should not be empty ");
    return false;
    }
    else
    {
    return true;
    }
    }// End of Empty Field
    

    
    function allLetter(uname)
    { 
    var letters = /^[A-Za-z]+$/;
    if(uname.value.match(letters))
    {
    return true;
    }
    else
    {
    alert('Username must have alphabet characters only');
    uname.focus();
    return false;
    }
    }
    
    
    
    
    
    function ValidateEmail(uemail)
    {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(uemail.value.match(mailformat))
    {
    return true;
    }
    else{
    alert("You have entered an invalid email address!");
    uemail.focus();
    return false;
    }
    }
    
    function ValidateAddress(uaddress){

    var regex = /[,#-\/\s\!\@\$.....]/gi; // ... add all the characters you need
    if (regex.test(uaddress)) {
    return true;

    }else{

    alert("You have entered an invalid address!");
    uaddress.focus();
    return false;
}
    }



function ValidateTel(utel)
   {
      var numbers = /^[0-9]+$/;
      if(utel.value.match(numbers))
      {
     
      return true;
      }
      else
      {
      alert('Please provide a correct phone number');
      utel.focus();
      return false;
      }
   } 



    function ValidateAge(uage){

        uage = parseInt(uage, 10);

//check if age is a number or less than or greater than 100
if (isNaN(uage) || uage < 1 || uage > 100)
{ 
    return true;
}else{
  alert("The age must be a number between 1 and 100");
  uage.focus();
  return false;
}
    }

     



    function ValidatePassword()
   {
  var password = document.getElementById("password").value;  
  var confirmPassword = document.getElementById("confirmpassword").value;

  //check empty password field  
  if(password == "" && confirmPassword=="") {  
     
     alert("Fill the password please!");  
     return false;  
  } 

  //check the password is less than 8
  if(password.length < 8 && confirmPassword.length < 8) {  
     
     alert( "Password length must be atleast 8 characters");   
     return false;  
  }  
   //check the password and confirm password are match
  if (password != confirmPassword) {
     alert("Passwords does Not match");
     return false;

        }

        return true;
    }

  
   
    

    </script>
</head>

<body>
	
 
<form name='Admin' method="post" action="InsertData.php" onSubmit="return formValidation()">

<div class="background-image"></div>

<div class="Main form">
<img src="logo.png" class="logo">
  <div class="Title">Create Account</div>
  
		<div class="Form">
			
	<div class="textbox">
          <label>Name</label>
          <input type="text" class="input" name="firstname" id="firstname">
       </div>  
	
	<div class="textbox">
          <label>Email</label>
		  <input type="email" placeholder="Your@email.com" name="email" id="email">
	   </div>

       <div class="textbox">
          <label>Address</label>
          <input type="text" placeholder="Your Address" name="address" id="address">
       </div> 


       <div class="textbox">
          <label>Tel</label>
		  <input type="text" placeholder="Your Phone Number" name="tel" id="tel">
	   </div>

       <div class="textbox">
          <label>Age</label>
		  <input type="text" placeholder="Your Age" name="age" id="age">
	   </div>

      

       <div class="textbox">
          <label>Gender</label>
          <div class="Gselect">
            <select name="gender" id="gender">
              <option value="">Select</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
       </div> 
			
	<div class="textbox">
          <label>Password</label>
		  <input type="password" name="password" id="password">
	   </div>	

       <div class="textbox">
        <label>Confirm Password</label>
        <input type="password" name="confirmpassword" id="confirmpassword">
     </div>
	
	<div class="textbox">
       
        <input type="submit" name="submit" id="submit" value="Submit" class="btn">

      </div>
			
	
			
		</div>

</div>
</form>
</body>
</html>
