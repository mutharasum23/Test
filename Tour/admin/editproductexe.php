<?php
include ("../connection.php");
session_start();
if($_POST["update"])
{
    $pid=$_POST["pid"];
    $pname=$_POST["pname"];
    $price=$_POST["pprice"];
    $location=$_POST["plocation"];
    $days=$_POST["pdays"];
   
    if(!empty(($_FILES['pimage']['name'])))
    {
        $aa=$_FILES['pimage']['name'];
        $tmp_name = $_FILES["pimage"]["tmp_name"];
        $newfilename ="tour".rand().''.end($aa);
        $name = "images/".$newfilename.$aa;
	if(move_uploaded_file($tmp_name,$name))
	{
		$sql = "UPDATE products "."SET product_name = '$pname',"."product_price= $price, "."location= '$location',"."product_img= '$name',". "duration= $days "."WHERE product_id= '$pid'";
		$retval = mysql_query($sql,$conn);
		if(!$retval)
		{
  			die('Could not enter data: '.mysql_error());
		}
		header("Location:editproduct.php");
	}
	else 
        {
            echo "err";
        }
		
    }
    else 
    { 
        echo $_POST["pimage"];
	$name=$_SESSION["path"];
	$sql = "UPDATE products "."SET product_name = '$pname',"."product_price= $price, "."location= '$location',"."product_img= '$name',". "duration= $days "."WHERE product_id= '$pid'";
	$retval = mysql_query($sql,$conn);
		if(!$retval)
		{
  			die('Could not enter data: '.mysql_error());
		}
	header("Location:editproduct.php");
    }
}
?>
