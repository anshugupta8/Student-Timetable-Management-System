<?php
include('header.php');
include('meta.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="iw=edge">
     <link rel="stylesheet" href="login.css">
     <title>Login Page</title>
</head>
<body>

<div class="login-box">
<h2><center>Login</center></h2>
<form action="adlog.php" method="post">
    <div class="adminlogin">
     <input class="button" type="submit" name="login" value="Sign in as Administrator">
    </div>
</form>
<form action="studlogin.php" method="post">
    <div class="studlogin">
     <input class="button" type="submit" name="login" value="Sign in as Student">
    </div>
</form>
</div>
</body>
</html>

