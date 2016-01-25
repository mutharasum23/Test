<?php 
session_start();
include ("connection.php");
if ($_GET["product"]) {
    $product = $_GET["product"];
    $userid=$_SESSION["username"];
    $dateTime1 = new DateTime($_GET["sdate"]);
    $sdate=date_format( $dateTime1, 'Y-m-d' );
     $dateTime2 = new DateTime($_GET["edate"]);
    $edate=date_format( $dateTime2, 'Y-m-d' );
    $orderid ="TR".date("Ymdhis");
    $amount=$_GET["amt"];
    $sql = "INSERT INTO orders (order_id,product_id,user_id,start_date,end_date,amount) VALUES('$orderid','$product','$userid','$sdate','$edate',$amount )";
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
$_SESSION["order"]="Product ordered sucessfully";
header("Location:profile.php");
}
else
    echo "something went wrong....";
?>
