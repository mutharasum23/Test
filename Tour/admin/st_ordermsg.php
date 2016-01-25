<?php
include("../connection.php");
$orid=$_POST["id"];
$msg=$_POST["msg"];
$status=$_POST["status"];
$sql = "UPDATE orders "."SET status='".$status."',msg='".$msg."' WHERE order_id='".$orid."'";
		$retval = mysql_query($sql,$conn);
		if(!$retval)
		{
  			echo('Could not enter data: '.mysql_error());
		}
                
echo $sql;
?>