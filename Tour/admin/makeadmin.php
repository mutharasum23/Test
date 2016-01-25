<?php
session_start();
include ("../connection.php");
if(isset($_POST['makeadmin']))
{
  $username=$_POST["uid"];
   $role= $_POST['roles'];

$sql = "UPDATE users SET role_no=$role WHERE user_id='$username'";
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
$_SESSION["messagem"]="Role changed successfully";
header("Location:addadmin.php");
mysql_close($conn);
}
?>
