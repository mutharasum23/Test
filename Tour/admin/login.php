<?php 
	include("../connection.php");
	session_start();
echo "ss";
	if(isset($_POST['login']))
	{  	
		$sql= "SELECT * FROM users WHERE user_id='".trim($_POST['uname'])."' and password='".trim(md5($_POST['pwd']))."' and role_no!=1"; 
		$res = mysql_query($sql);   
                $row= mysql_fetch_assoc($res);
                $state=$row["active_state"];
		if(mysql_num_rows($res)>0)
		{   
                        if($row["active_state"]==0)
                        {
                        $_SESSION["role"]=$row['role_no'];
			$_SESSION['user'] =$row['name']; 
                       
                        $username=$row['user_id'];
                        $sql1= "UPDATE users SET last_visited = Now() WHERE user_id = '$username' " ;
                        $res1 = mysql_query($sql1); 
			if($_POST['autologin']==1)
			{
				setcookie ("auto", $_SESSION['admin'], time() + 120);
			}
			unset($_SESSION["adminm"]);
			header("Location:dashboard.php?limit=0");
                        }
                        else
                        {
                            $_SESSION["adminm"]="Your account was disabled..contact admin";
                                  header("Location:index.php");
                        }

		}
		else{ 
			$_SESSION["adminm"]="Enter the correct credentials";
                        header("Location:index.php");
			die('Could not enter data: ' . mysql_error());
			exit; 
		} 
	} 
?>
