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

</head>

<body>
	
 
<form name='AdminAddLabs' method="post" action="InsertLabData.php" onSubmit="">

<div class="background-image"></div>

<div class="Main form">
<img src="logo.png" class="logo">
  <div class="Title">Add Lab</div>
  
		<div class="Form">
			
	<div class="textbox">
          <label>Lab Name</label>
          <input type="text" class="input" name="labname" id="labname">
       </div>  
	
  
	<div class="textbox">
       
        <input type="submit" name="submit" id="submit" value="Submit" class="btn">

      </div>
			
	
			
		</div>

</div>
</form>
</body>
</html>
