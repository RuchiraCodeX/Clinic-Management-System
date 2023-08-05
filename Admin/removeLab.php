
<?php   
 include 'DBConnection.php';  
 $query = "select * from labs";  
 $run = mysqli_query($conn,$query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>Remove Labs</title>  
      <link rel="stylesheet" type="text/css" href="lstyle.css">  
 </head>  
 <body>  
 <header></header>  
 <table border="1" cellspacing="0" cellpadding="0">  
      <tr class="heading">  
           <th>Lab Id</th>  
           <th>Lab Name</th>  
           <th>Action</th> 
         
      </tr>  
      <?php   
      $i=1;  
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                    $i++;
                     echo " 
                    
                          <tr class='data'>  
                          
                               <td>".$result['Id']."</td>  
                               <td>".$result['Lab']."</td>  
                               
                               <td><a href='delete.php?Id=".$result['Id']."' id='btn'>Remove</a></td>  
                          </tr>  
                     ";  
                }  
           }  
      ?>  
 </table>  
 </body>  
 </html>  

   
