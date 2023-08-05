<?php 

	$errors = array();

	if (isset($_POST['submit'])) {
		

		$file_name = $_FILES['image']['name'];
		$file_type = $_FILES['image']['type'];
		$file_size = $_FILES['image']['size'];
		
		if ($file_type != 'image/jpeg') {
			$errors[] = '';
			echo "<script>alert('Only JPEG files are allowed.');</script>";
		}

	
		if ($file_size > 500000) {
			$errors[] = '';
			echo "<script>alert('File size should be less than 500kb.');</script>";
		}
		
	}

?>



<html>
<head>
<link rel="stylesheet" href="main.css">
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
</head>

<?php include "DBConnect.php"; ?>


<body>
	

<?php 
			if (!empty($errors)) {
				
				
				echo "<script>alert('File not uploaded.');</script>";
				foreach ($errors as $error) {
					echo "<script>alert('- ' . $error );</script>";
				}
				
			}

		 ?>

	<form action="Lab Test Form.php" method="post" enctype="multipart/form-data">

	<div class="sucontainer">
		<label><b>Patient Name</b></label><br>
		<input type="text" placeholder="Enter Name" name="fname" required><br>
		

		<label style="font-size:20px" >Area</label><br>
		<select name="city" id="city-list" class="demoInputBox"  onChange="" style="width:100%;height:35px;border-radius:9px">
		<option value="">Select Area</option>
		<?php
		$sql1="SELECT distinct(city) FROM clinic";
         $results=$conn->query($sql1); 
		while($rs=$results->fetch_assoc()) { 
		?>
		<option value="<?php echo $rs["city"]; ?>"><?php echo $rs["city"]; ?></option>
		<?php
		}
		?>
		</select>
        <br>
	
		<label style="font-size:20px" >Lab</label><br>
		<select id="#lab-list" name="Lab" onChange="" style="width:100%;height:35px;border-radius:9px">
		<option value="">Select the Lab</option>
        <?php
		$sql1="SELECT distinct(Lab) FROM labs";
         $results=$conn->query($sql1); 
		while($rs=$results->fetch_assoc()) { 
		?>
		<option value="<?php echo $rs["Lab"]; ?>"><?php echo $rs["Lab"]; ?></option>
		<?php
		}
		?>
		</select><br>
		

        
		<label><b>Phone Number</b></label><br>
		<input type="text" placeholder="07XXXXXXXX" name="number" required><br>
	

        <input type="file" name="image" id="image">
        
		
		<div class="container">
			<button type="submit" style="position:center" name="submit" value="Submit">Submit</button>
		</div>

       
		</form>
		
	
</body>
       
<?php


if(isset($_POST['submit']))
{
		
		include ("DBConnect.php");
		$fname=$_POST['fname'];
		$area=$_POST['city'];
		$lab=$_POST['Lab'];
        $number=$_POST['number'];
		$imgfile=$_FILES["image"]["name"];
        $file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

		 //this returns a part of a string. //returns the length of a string
		$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
	
		$allowed_extensions = array(".jpg","jpeg",".png",".gif");

		if(!in_array($extension,$allowed_extensions))
{
//echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
header( "Refresh:2; url=Lab Test Form.php");
}

else
{
//rename the image file
$imgnewfile=md5($imgfile).$extension;
// move image into directory
move_uploaded_file($_FILES["image"]["tmp_name"],"C:\wamp64\www\Hospital\User".$imgnewfile);







		$sql = "INSERT INTO labtest (PatientName,Area,Lab,PhoneNumber,image_url) VALUES ('$fname','$area','$lab','$number','$file') ";
		$result = mysqli_query($conn, $sql);
		
        if(!$result) {
			
            die("Could not enter data: " . mysqli_error($conn));
			}


			else{
					echo '<script>alert("Upload successful!")</script>';
					header( "Refresh:2; url=Lab Test Form.php");


				} 
			}
			

}


?>

</html>