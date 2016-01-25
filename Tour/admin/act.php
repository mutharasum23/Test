<?php
include '../connection.php';
$state=$_GET['state'];
$username=$_GET['userid'];
$sql = "UPDATE users SET active_state=$state WHERE user_id= '$username' " ;
$res = mysql_query($sql); 
if($res)
{
   header("Location:viewuser.php?limit=0");
}
