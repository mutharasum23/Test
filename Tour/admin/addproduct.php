<?php
include ("../connection.php");
if($_POST["addproduct"])
{
$pid=$_POST["pid"];
$pname=$_POST["pname"];
$price=$_POST["pprice"];
$location=$_POST["plocation"];
$days=$_POST["pdays"];
$aa=$_FILES['pimage']['name'];
$tmp_name = $_FILES["pimage"]["tmp_name"];
$newfilename ="tour".rand(). '' .end($aa);
$name = "images/".$newfilename.$aa;
if(move_uploaded_file($tmp_name,$name))
{
	$sql = "INSERT INTO products".
		"(product_id,product_name,product_price,location,product_img,duration) ". "VALUES('$pid','$pname',$price,'$location','$name',$days)";
	$retval = mysql_query($sql,$conn);
		if(!$retval)
		{
  			die('Could not enter data: '.mysql_error());
		}
header("Location:addnew.php");
}
else 
echo "err";
}
?>
