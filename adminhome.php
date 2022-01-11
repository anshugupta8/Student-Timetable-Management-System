<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Home</title>
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
                    <a href="adminhome.php" class="active"><b>Dashboard</b></a>
                    <a href="department.php" ><b>Departments</b></a>
                    <a href="adminstudent.php"><b>Students</b></a>
                    <a href="index.php"><b>Log Out</b></a>
                </div>
            </div>
        </nav>
<nav>
<div class="navbar box">
                <h1><u>Welcome System Administrator <br>Manage</u></h1>
                <div class="boxin navbar">
                    <img src="manageadmin/classtt.jpg" alt="CSE" class="logo">
                    <a href="adminclasstt.php"><b><h3>Class Time Table</h3></b></a>
                </div>
                <div class="boxin">
                    <img src="manageadmin/examtt.jpg" alt="ECE" class="logo">
                    <a href="adminexamtt.php"><h3>Exam Time Table</h3></a>
                </div>
                <div class="boxin">
                    <img src="manageadmin/notice.jpg" alt="EE" class="logo">
                    <a href="adminnotice.php"><h3>Notices</h3></a>
                </div>
                <div class="boxin">
                    <img src="manageadmin/event.png" alt="ME" class="logo">
                    <a href="adminevent.php"><h3>Upcoming Events</h3></a>
                </div>
                <div class="boxin">
                    <img src="manageadmin/calendar.jpg" alt="CE" class="logo">
                    <a href="admincalendar.php"><h3>Academic Calendar</h3></a>
                </div>
                <div class="boxin">
                    <img src="manageadmin/holiday.png" alt="IT" class="logo">
                    <a href="adminholiday.php"><h3>Holiday List</h3></a>
                </div> 
                </div>
        </nav>




</body>
</html>
<?php
include("footer.php");
?>

