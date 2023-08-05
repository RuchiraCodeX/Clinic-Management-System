<?php   
 include 'DBConnection.php';  
 if (isset($_GET['Id'])) {  
      $id = $_GET['Id'];  
      $query = "DELETE FROM `labs` WHERE Id = '$id'";  
      $run = mysqli_query($conn,$query);  
      if ($run) {  
           header('location:removeLab.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?> 