<?php
include("../connection.php");
error_reporting(E_ALL);
session_start();
$select_path="select * from products where product_id='".$_GET['id']."'";
$var=mysql_query($select_path);
$row=mysql_fetch_array($var);
if($row)
{
    $_SESSION['pid']=$row["product_id"];
    $_SESSION['pname']=$row["product_name"];
    $_SESSION['pprice']=$row["product_price"];
    $_SESSION['location']=$row["location"];
    $_SESSION['path']=$row["product_img"];
    $_SESSION['duration']=$row["duration"];
  echo json_encode($row);
}

else
die('Could not enter data: ' . mysql_error());
?>

