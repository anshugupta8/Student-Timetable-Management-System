<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>View Exam Timetable</title>
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
                        <a href="student.php" ><b>Dashboard</b></a>
                        <a href="studclasstt.php" ><b>View Class Time Table</b></a>
                        <a href="studexamtt.php" class="active" ><b>View Exam Time Table</b></a>
                        <a href="studnotice.php" ><b>Notice</b></a>
                        <a href="studholiday.php"><b>Holiday</b></a>
                        <a href="studevent.php"><b>Events</b></a>
                        <a href="index.php"><b>Log Out</b></a>
                    </div>
                </div>
            </nav>

<?php
  if ($handle = opendir('examtt/')) {
    while (false !== ($file = readdir($handle))) {
      if ($file != "." && $file != "..") {
        $thelist .= '<li><a href="examtt/'.$file.'">'.$file.'</a></li>';
      }
    }
    closedir($handle);
  }
?>
<h1><center>Exam Time Table:</center></h1>
<ul style="color:blue; font-size:20px; background-color:pink"><b><?php echo $thelist; ?></b></ul>
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
