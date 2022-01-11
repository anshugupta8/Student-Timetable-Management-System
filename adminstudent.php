<?php 
include_once('loginconnection.php');
$queryy="SELECT * FROM cse";
$resultt=mysqli_query($conn,$queryy);
?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Students</title>
        <link rel="stylesheet" href="department.css">
        <link rel="icon" href="smile.ico">
    </head>
    <body>
        <header class="header_style flex justify-centre">
            <h1>STUDENT TIMETABLE MANAGEMENT SYSTEM</h1>
        </header>
        <nav>   
            <div class="navbar shadow">
                <div class="container flex justify-centre">
                    <a href="adminhome.php"><b>Dashboard</b></a>
                    <a href="department.php" ><b>Departments</b></a>
                    <a href="adminstudent.php" class="active"><b>Students</b></a>
                    <a href="index.php"><b>Log Out</b></a>
                </div>
            </div>
        </nav>
        <nav>
                <div class="navbar box">
                    <br>
                    <h1><u>Students Details</u></h1>
                </div>
        </nav>
        <h3><center>Computer Science</center></h3>
        <table class="tablec" align="center" border="black solid">
            <tr>
                <th>User Id</th>
                <th>Name </th>
                <th>Address</th>
                <th>Email</th>
                <th>Mobile No.</th>
                <th>Enrollment No.</th>
            </tr>
           
           <?php while($user=mysqli_fetch_object($resultt)){ ?>
            <tr>
            <td><?php echo $user->u_id; ?></td>
            <td><?php echo $user->name; ?></td>
            <td><?php echo $user->address; ?></td>
            <td><?php echo $user->Email; ?></td>
            <td><?php echo $user->mobile_no; ?></td>
            <td><?php echo $user->enrollment_no; ?></td>
            </tr>
            <?php } ?>   
        </table>
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
