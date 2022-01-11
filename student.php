<?php 
include_once('loginconnection.php');
session_start();
//include('validatestud.php')
$queryy="SELECT * FROM cse";
$resultt=mysqli_query($conn,$queryy);
while($userr=mysqli_fetch_object($resultt))
{
    if($userr->enrollment_no == $_SESSION['enrollment'])
    {
        $name=$userr->name;
        $address=$userr->address;
        $email=$userr->Email;
        $mobile=$userr->mobile_no;
       
     }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Student</title>
        <link rel="stylesheet" href="department.css">
        <link rel="icon" href="simle.ico">
    </head>
    <body>
        
            
            <header class="header_style flex justify-centre">
                <h1><u>STUDENT TIMETABLE MANAGEMENT SYSTEM</u></h1>
            </header>
            <nav>   
                <div class="navbar shadow">
                    <div class="container flex justify-centre">
                        <a href="student.php" class="active"><b>Dashboard</b></a>
                        <a href="studclasstt.php"><b>View Class Time Table</b></a>
                        <a href="studexamtt.php"><b>View Exam Time Table</b></a>
                        <a href="studnotice.php"><b>Notice</b></a>
                        <a href="studholiday.php"><b>Calender</b></a>
                        <a href="studevent.php"><b>Events</b></a>
                        <a href="index.php"><b>Log out</b></a>
                    </div>
                </div>
            </nav>
            


            <nav>
                <div class="navbar box">
                    <br>
                    <h1><u>Student Details</u></h1>
                </div>
            </nav>
            <div >
                        <table class="tablec" align="center" border="black solid">
                        
                            <tr>
                            <td><b>Name</b></td>
                            <td>:</td>
                            <td><b><?php echo $name;?></b></td>
                            </tr>
                            <tr>
                            <td><b>Address</b></td>
                            <td>:</td>
                            <td><b><?php echo $address?></b></td>
                            </tr>
                            <tr>
                            <td><b>Enrollment Number</b></td>
                            <td>:</td>
                            <td><b><?php echo $_SESSION['enrollment'];?></b></td>
                            </tr>
                            <tr>
                            <td><b>Mobile Number</b></td>
                            <td>:</td>
                            <td><b><?php echo $mobile;?></b></td>
                            </tr>
                            <tr>
                            <td><b>Email Id</b></td>
                            <td>:</td>
                            <td><b><?php echo $email?></b></td>
                            </tr>
                          

                     </table>

                    </div>
                    <div>

                    </div>
                     </body>
               <br>
               <br>
               <br>
               <br>
               <br>
               <br>
               <br>
               <br>
               <br>
             <footer id="footer">
                <b>----Our Developers----</b>
                <br>
                <b>Anshu Gupta - Anusha Mandal - Archana Prakash</b>
            </footer>      
             
    </body>
</html>

