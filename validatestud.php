<?php
include_once('loginconnection.php');
$query="SELECT * FROM studlogin";
$result=mysqli_query($conn,$query);

?>
<?php
function test_input($data)
{
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}
$enrollment=110100;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$username=test_input($_POST["username"]);
$password=test_input($_POST["password"]);
session_start();
while($user=mysqli_fetch_object($result))
{
  if(($user->username == $username) && ($user->password == $password))
{
 session_start();
 $_SESSION['enrollment']=$user->enrollment_no;
 header('Location: student.php'); 
}
}
echo "<script language='javascript'>";
echo 'alert("** Incorrect User Name or Password **");';
echo 'window.location.replace("studlogin.php");';
echo "</script>";
            
}

?>

