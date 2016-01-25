<?php
include("connection.php");
$select_path="select * from products";
$var=mysql_query($select_path);
$inc=0;
while($row=mysql_fetch_array($var))
{
    $productid[$inc]=$row["product_id"];
    $pname[$inc]=$row["product_name"];
    $pprice[$inc]=$row["product_price"];
    $plocation[$inc]=$row["location"];
    $path[$inc]=$row["product_img"];
    $duration[$inc]=$row["duration"];
    $inc++;
}
?>
