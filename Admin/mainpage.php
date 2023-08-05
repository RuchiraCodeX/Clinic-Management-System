<?php
session_start();
if(!isset($_SESSION['firstname'])) {
	header("Location: AController.php");
}
$username = $_SESSION['firstname'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard of <?php echo $username;?></title>

   
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

   
    <link rel="stylesheet" href="style.css">
    <style type="text/css">


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


.container{
    padding: 40px;
    width: 1024px;
    justify-items: center;
    align-items: center;
    margin: auto;
    font-size: 18px;
    display: block;
}



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
        
        <div class="sidebar">
            <div class="sidebar_logo">
                <img src="img/favicon.png" alt="Codingscape">
                <a href="#">Admin Dashboard | <?php echo $username;?></a>
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
                

                <li class="sidebar_items_list">
                  <a href="PHPlogout.php" class="sidebar_nav_item">
                      <i class='bx bx-log-out'></i>
                      <p>Logout</p>
                  </a>
              </li>
            </ul>
            
          
        </div>


        <div class="container">
        
        </div>

    </div>
    
    <script src="sidebar.js"></script>

</body>
</html>