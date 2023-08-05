<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset ($_POST['search'])) {
	include("DBConnect.php");
    
	if($_POST['name']) {
		$search = $_POST['name'];
		$sql = 'SELECT * FROM search WHERE ServiceName = "' . $search . '"';
		$result = mysqli_query($conn, $sql) or die("Could not execute query: " . mysqli_error($conn));
		//print_r($result);
		if(mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_array($result);

            if ($search == "Chemical pathology") {
               
                header("Location: CHEMICAL PATHOLOGY.html");
                
                }
                else if($search == "Haematology") {
                
               
                header("Location: HAEMATOLOGY.html");
                }
                else if($search == "Microbiology") {
                
               
                    header("Location:  MICROBIOLOGY.html");
                    }
                    else{
                        header("Location:  Notfound.html");
                    }
               
                
                
            
?>

<?php
		
		}
		else {//if mysqli_num_rows($result)>0)
			header("Location:  Notfound.html");
		}
	}
	else {
		header("Location: User Dashboard.html");
	}
}
?>
</body>
</html>
