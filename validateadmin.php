<?php
include_once('loginconnection.php');
$query="SELECT * FROM adminlogin";
$result=mysqli_query($conn,$query);
session_start();

?>
<?php
function test_input($data)
{
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$adminname=test_input($_POST["adminname"]);
$password=test_input($_POST["password"]);

while($user=mysqli_fetch_object($result))
{
  if(($user->adminname == $adminname) && ($user->password == $password))
{
 $adminname='';
  $password='';
 header('Location: adminhome.php'); 
}
}
echo "<script language='javascript'>";
echo 'alert("** Incorrect Admin Name or Password **");';
session_destroy();
echo 'window.location.replace("adlog.php");';
echo "</script>";
            
}

?>


