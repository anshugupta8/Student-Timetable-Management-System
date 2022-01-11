<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>View Class Timetable</title>
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
                        <a href="studclasstt.php" class="active" ><b>View Class Time Table</b></a>
                        <a href="studexamtt.php"><b>View Exam Time Table</b></a>
                        <a href="studnotice.php" ><b>Notice</b></a>
                        <a href="studholiday.php"><b>Holiday</b></a>
                        <a href="studevent.php"><b>Events</b></a>
                        <a href="index.php"><b>Log out</b></a>
                    </div>
                </div>
            </nav>

<?php
  if ($handle = opendir('classtt/')) {
    while (false !== ($file = readdir($handle))) {
      if ($file != "." && $file != "..") {
        $thelist .= '<li><a href="classtt/'.$file.'">'.$file.'</a></li>';
      }
    }
    closedir($handle);
  }
?>
<h1><center>Class Time Table:</center></h1>
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

