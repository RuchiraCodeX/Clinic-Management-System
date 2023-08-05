<!DOCTYPE html>
<html>
<head>

<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

<!--Style-->
<link rel="stylesheet" href="style.css">
<style type="text/css">

table{
    width: 75%;
    border-collapse: collapse;
	border: 4px solid black;
    padding: 5px;
	font-size: 25px;
}

th{
border: 4px solid black;
	background-color: #4CAF50;
    color: white;
	text-align: left;
}
tr,td{
	border: 4px solid black;
	background-color: white;
    color: black;
}

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body{
    display: block;
    position: relative;
    background: #e9e2fcb1;
    font-family: 'Poppins', sans-serif;

}

.wrapper{
    display: flex;
    position: relative;
}

.sidebar{
    display: block;
    width: 320px;
    background: #2c1049;
    max-height: 100vh;
    overflow-y: scroll;
}

.sidebar .sidebar_logo{
    padding: 10px 24px;
    font-size: 24px;
    text-align: center;
    border-bottom: 2px solid #3e2f6590;
    display: flex;
    position: sticky;
    top: 0;
    z-index: 999;
    background: #2c1049;
}

.sidebar .sidebar_logo img{
    width: 36px;
    height: 36px;
    padding: 4px;
    display: none;
}

.sidebar .sidebar_logo a{
    text-decoration:none;
    color: #fff;
    text-transform: uppercase;
    font-weight: 600;
}

.sidebar ul li a{
    list-style: none;
    text-decoration: none;
    color: #fff;
    display: flex;
    column-gap: 14px;
}

.sidebar .sidebar_items{
    background: #2c1049;
    padding-top: 10px;
    padding-bottom: 10px;
    height: 100vh;
}

.sidebar .sidebar_items_list{
    padding: 10px 18px;
    margin: 2px 0px;
    cursor: pointer;
}
.sidebar .sidebar_items_list:hover{
    background: #b7a3ec90;
    border-left: 4px solid #613fb8;
}

.sidebar .sidebar_items_list i{
    font-size: 24px;
}

.sidebar .sidebar_items_list_info{
    color: #efefef50;
    padding: 10px 15px;
    text-transform: uppercase;
    font-weight: 600;
}

.sidebar .sidebar-toggle{
    bottom: 0;
    display: flex;
    width: 100%;
    padding: 10px;
    background: #613fb8;
    cursor: pointer;
    color: #fff;
    position: sticky;
}

.sidebar .sidebar-toggle i{
    padding: 8px;
    font-size: 24px;
}
.sidebar .sidebar-toggle p{
    margin-top: 5px;
    font-size: 18px;
}

/*** Active functionality ***/
.sidebar.active{
    display: inline-block;
    position: relative;
    width: 80px;
    background: transparent;
    height: 100vh;
}

.sidebar.active .sidebar_logo{
    padding: 8px;
}

.sidebar.active .sidebar_logo a{
    display: none;
}
.sidebar.active .sidebar_logo img{
    width: 48px;
    height: 48px;
    padding: 0px;
    display: block;
}

.sidebar.active .sidebar_items_list p{
    display: none;
}
.sidebar.active .sidebar_items_list_info{
    display: none;
}

.sidebar.active .sidebar-toggle p{
    display: none;
}
/**container**/

.container{
    padding: 40px;
    width: 1024px;
    justify-items: center;
    align-items: center;
    margin: auto;
    font-size: 18px;
    display: block;
}

/***scrollbar **/

::-webkit-scrollbar{
    width: 8px;
}
::-webkit-scrollbar-track{
    background: #efeafc;
}
::-webkit-scrollbar-thumb{
    background: #613fb8;
}

::-webkit-scrollbar-thumb:hover{
    background: #3e2f65;
}


</style>

</head>
<body>

<div class="wrapper">
        <!--Sidebar-->
        <div class="sidebar">
            <div class="sidebar_logo">
                <img src="img/favicon.png" alt="Codingscape">
                <a href="#">Admin Dashboard</a>
            </div>

            <ul class="sidebar_items">
                <li class="sidebar_items_list">
                    <a href="#" class="sidebar_nav_item">
                        <i class='bx bx-home-alt-2'></i>
                        <p>Home</p>
                    </a>
                </li>

                <li class="sidebar_items_list_info">
                    <span>MANAGE</span>
                </li>

                <li class="sidebar_items_list">
                    <a href="#" class="sidebar_nav_item">
                        <i class='bx bxs-dashboard'></i>
                        <p>Dashboard</p>
                    </a>
                </li>
              
                
                <li class="sidebar_items_list">
                    <a href="adddoctor.php" class="sidebar_nav_item">
                        <i class='bx bx-task'></i>
                        <p>Add Doctor</p>
                    </a>
                </li>
                
                <li class="sidebar_items_list">
                    <a href="deletedoctor.php" class="sidebar_nav_item">
                        <i class='bx bx-task'></i>
                        <p>Remove Doctor</p>
                    </a>
                </li>

                <li class="sidebar_items_list">
                    <a href="viewpatientappointments.php" class="sidebar_nav_item">
                        <i class='bx bx-task'></i>
                        <p>View Patient Appointments</p>
                    </a>
                </li>

                <li class="sidebar_items_list">
                    <a href="showdoctor.php" class="sidebar_nav_item">
                        <i class='bx bx-task'></i>
                        <p>View Doctors</p>
                    </a>
                </li>


                <li class="sidebar_items_list">
                    <a href="showdoctorschedule.php" class="sidebar_nav_item">
                        <i class='bx bx-task'></i>
                        <p>View Doctor Schedule</p>
                    </a>
                </li>

            
                <li class="sidebar_items_list">
                    <a href="addclinic.php" class="sidebar_nav_item">
                        <i class='bx bx-task'></i>
                        <p>Add Clinic</p>
                    </a>
                </li>

                <li class="sidebar_items_list">
                    <a href="AddLabs.php" class="sidebar_nav_item">
                        <i class='bx bx-task'></i>
                        <p>Add Lab</p>
                    </a>
                </li>


                <li class="sidebar_items_list">
                    <a href="removeLab.php" class="sidebar_nav_item">
                        <i class='bx bx-task'></i>
                        <p>Remove Labs</p>
                    </a>
                </li>

                <li class="sidebar_items_list">
                    <a href="deleteclinic.php" class="sidebar_nav_item">
                        <i class='bx bx-task'></i>
                        <p>Remove Clinic</p>
                    </a>
                </li>

                

                <li class="sidebar_items_list">
                    <a href="adddoctorclinic.php" class="sidebar_nav_item">
                        <i class='bx bx-task'></i>
                        <p>Assign Doctor to Clinic</p>
                    </a>
                </li>

                <li class="sidebar_items_list">
                    <a href="deletedoctorclinic.php" class="sidebar_nav_item">
                        <i class='bx bx-task'></i>
                        <p>Remove Doctor from Clinic</p>
                    </a>
                </li>

                <li class="sidebar_items_list">
                    <a href="showclinic.php" class="sidebar_nav_item">
                        <i class='bx bx-task'></i>
                        <p>View Clinic</p>
                    </a>
                </li>

                <li class="sidebar_items_list">
                    <a href="ViewPatientLabTest.php" class="sidebar_nav_item">
                        <i class='bx bx-task'></i>
                        <p>View Patient Lab Reports</p>
                    </a>
                </li>
                	
                <li class="sidebar_items_list">
                

                <button type="submit" name="logout" >Log Out</button>
                        <i class='bx bx-log-out'></i>
                     
                 
                </li>
            </ul>
            <!--toggle bar-->
            <div class="sidebar-toggle">
                <i class="bx bxs-chevron-left"></i>
                <p>Hide Sidebar</p>
            </div>
        </div>


        <div class="container">
      


        <h1>DOCTOR SCHEDULE</h1><hr>
<?php



if( empty(session_id()) && !headers_sent()){
	session_start();
}
$con = mysqli_connect('localhost','root','','hms');
if (!$con)
{
    die('Could not connect: ' . mysqli_error($con));
}
$sql="SELECT * FROM doctor_availability order by DID,CID ASC";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>CID</th>
<th>Clinic Name</th>
<th>DID</th>
<th>Doctor Name</th>
<th>Day</th>
<th>Time</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
	$sql1="SELECT * from doctor where DID=".$row["did"];
	$result1= mysqli_query($con,$sql1);
	while($row1= mysqli_fetch_array($result1))
	{
	$sql2="SELECT * from clinic where CID=".$row["cid"];
	$result2= mysqli_query($con,$sql2);
	while($row2= mysqli_fetch_array($result2))
	{
    echo "<tr>";
	echo "<td>" . $row['cid'] . "</td>";
    echo "<td>" . $row2['name']."-".$row2['town'] . "</td>";
	echo "<td>" . $row['did'] . "</td>";
    echo "<td>" . $row1['name'] . "</td>";
	echo "<td>" . $row['day'] . "</td>";
    echo "<td>" . $row['starttime']."-".$row['endtime']. "</td>";
    echo "</tr>";
	}
	}
}
echo "</table>";
mysqli_close($con);
if(isset($_POST['logout'])){
		session_unset();
		session_destroy();
		header( "Refresh:1; url=Login Form.php"); 
	}
?>

        </div>

    </div>
    <!--script-->
    <script src="sidebar.js"></script>


</body>
</html>