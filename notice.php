<?php 
include_once('loginconnection.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Notice</title>
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
                    <a href="classtt.php"><b>Class Time Table</b></a>
                    <a href="examtt.php" ><b>Exam Time Table</b></a>
                    <a href="notice.php" class="active" ><b>Notices</b></a>
                    <a href="holiday.php"><b>Holiday List</b></a>
                    <a href="calendar.php"><b>Academic Calender</b></a>
                    <a href="event.php"><b>Events</b></a>
                    <a href="index.php"><b>Log Out</b></a>
                </div>
            </div>
        </nav>
       <div class="formhai">
        <form  method="post" enctype="multipart/form-data"><center><h2>
  Select File to upload:
 </h2> <input type="file" name="fileToUpload" id="fileToUpload">
  <h3>Notice Name:</h3><input type="text" id="name" name="filenamehai">
  <input type="submit" value="Upload Notice" name="submit">
  </center>
</form>
       </div>
</body>
</html>

<?php

if (isset($_POST['submit'])) { 
// if save button on the form is clicked
    // name of the uploaded file

     $filename = $_FILES['fileToUpload']['name'];

    $tempname = $_FILES['fileToUpload']['tmp_name'];
    $folder = 'timetable/'.$filename;

    echo $filename . "<br>";
    echo $tempname . "<br>";
    echo $folder . "<br>";
    echo $_SERVER['PHP_SELF'];
    move_uploaded_file($tempname, $folder);
    //copy($_FILES['fileToUpload']['tmp_name'], 'notices/');
    /*$filename = $_FILES['fileToUpload']['name'];
    echo $filename . "<br>";
    // destination of the file on the server
    $destination = 'notices/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    //echo $filename;
    
    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['fileToUpload']['tmp_name'];
    echo $file . "<br>";
    
    echo $destination . "<br>";
    $size = $_FILES['fileToUpload']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx' , 'jpg'])) {
        echo "You file extension must be .zip, .pdf .jpg or .docx";
    } elseif ($_FILES['fileToUpload']['size'] > 10000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            //$sql = "INSERT INTO notices (filename, notice) VALUES ('$filename','$destination')";
            $sql = 'INSERT INTO NOTICES (FILENAME, NOTICE) VALUES (' . $filename . ', ' . $destination . ')';
            echo $sql;
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
        }
        } else {
            echo "Failed to upload file.";
        }
    }*/
}
?>






