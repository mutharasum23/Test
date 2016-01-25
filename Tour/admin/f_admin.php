<?php
include("../connection.php");
error_reporting(E_ALL);
session_start();
$select_path="select roles from users,roles where user_id='".$_GET['id']."' and users.role_no=roles.role_no";
$var=mysql_query($select_path);
$row=mysql_fetch_array($var);
if($row)
{
  echo json_encode($row);
}

else
die('Could not enter data: ' . mysql_error());
?>
