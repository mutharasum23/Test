<?php
session_start();
include("connection.php");
	if(isset($_POST['update']))
	{  
		$fname=$_POST["fname"];
		$DOB=$_POST["dob"];
		$mail=$_POST["email"];
		$address=$_POST["address"];
		$city=$_POST["city"];
		$state=$_POST["state"];
		$phone=$_POST["phone"];
		$gender=$_POST["gender"];
		$country=$_POST["country"];
		$username=$_SESSION['username'];
$sql = "UPDATE users ". "SET name = '$fname',DOB= '$DOB',address='$address',city='$city',state='$state',country='$country',gender='$gender',phone=$phone". " WHERE user_id = '$username' " ;
echo $sql;
               
		$res = mysql_query($sql); 
		echo mysql_num_rows($res);
             
		if(res)	
		{ 
                     if(isset($_SESSION["cfm"]))
                    {
                        header("Location:shop.php");
                        exit();
                    }
			header("Location:profile.php");
		}
		else{ 
			echo "Your details did not match"; 
			die('Could not enter data: ' . mysql_error());
			exit; 
		} 
	} 

?>
