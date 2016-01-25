<?php
include ("connection.php");
if(isset($_POST['register']))
{
   $username=trim($_POST["username"]);
   $sql1="SELECT user_id FROM users WHERE user_id=$username";
   $query = mysql_query($sql1,$conn);
if(mysql_num_rows($query)==0)
{

$usernameerr="Username already exist";
header("Location:index.php?error=$usernameerr");
}
}
?>
