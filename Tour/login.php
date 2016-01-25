<?php 
	include("connection.php");
	session_start();
	if(isset($_POST['login']))
	{  	
		$sql= "SELECT * FROM users WHERE user_id='".trim($_POST['uname'])."' and password='".trim(md5($_POST['pwd']))."'"; 
		$res = mysql_query($sql);
                $row= mysql_fetch_assoc($res); 
		if(mysql_num_rows($res)>0)	
		{ 
			 if($row["active_state"]==0)
                        {
			$mail= $row['email']; 
			$_SESSION['username'] =$row['user_id'];  
                        $username=$row['user_id'];
			$_SESSION['name']=$row['name'];
			$_SESSION['mailid'] =$row['email'];  
			$_SESSION['name']=$row['name'];
			$_SESSION['dob']=$row['DOB'];
			$_SESSION['phone']=$row['phone'];
			$_SESSION['address']=$row['address'];
			$_SESSION['city']=$row['city'];
			$_SESSION['state']=$row['state'];
			$_SESSION['country']=$row['country'];
                        $sql1= "UPDATE users SET last_visited = Now() WHERE user_id = '$username' " ;
                        $res1 = mysql_query($sql1); 
			if($_POST['autologin']==1)
			{
				setcookie ("auto", $_SESSION['uname'], time() + 1200);
			}
			unset($_SESSION["error"]);
                        if(isset($_SESSION["aa"]))
                            {
                               header("Location:shop.php");
                               exit();
                             }
			header("Location:index.php");
                        }
                        else
                        {
                            $_SESSION["error"]="Your account was disabled.. contact adminstrator";
                            echo "<script>window.location.href='index.php#img1';</script>";
                        }
		}
		else{ 
			$_SESSION["error"]="Your credentials are wrong";
			echo "<script>window.location.href='index.php#img1';</script>";
		} 
	} 
?>
