<?php
session_start();
include ("connection.php");
if(isset($_POST['register']))
{
  $username=trim($_POST["username"]);
  /* $sql1="SELECT user_id FROM users WHERE user_id=$username";
   $query = mysql_query($sql1,$conn);
if(mysql_num_rows($query)==0)
{
$usernameerr="Username already exist";
header("Location:http://localhost/Php_practices/Tour/index.php#img2?$usernameer");
} */
   $fname = trim($_POST['fname']);
   $mailid=trim($_POST['email']);
   $password=trim(md5($_POST['password']));
   $emailupdate=$_POST['emailupdate'];

$sql = "INSERT INTO users (name,user_id, email, password,email_update) ".
       "VALUES('$fname','$username','$mailid','$password','$emailupdate' )";
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
$_SESSION["message"]="Login to continue";
header("Location:index.php");
mysql_close($conn);
}
?>
