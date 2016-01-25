<?php
session_start();
include ("../connection.php");

if(isset($_POST['revokeadmin']))
{
    
  $admin1=$_POST["uid1"];
$sql = "DELETE FROM admin where admin_id='".$admin1."'";
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
$_SESSION["message"]="Admin Access Revoked";
header("Location:editadmin.php");
}
if(isset($_POST['updateadmin']))
{
   
}
?>
