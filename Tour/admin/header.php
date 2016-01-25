<?php 
session_start();
if(isset($_SESSION["user"]))
{
echo "welcome,".$_SESSION["user"];
unset($_SESSION["message"]);
echo "<form method='post' action='' method='post'><input type='submit' name='logout' value='Logout'></form>";
}
if($_POST["logout"])
{
session_destroy();
setcookie ("auto", $_SESSION['username'], 1);
header('Location:index.php');
}
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Indo-Tourism- ADMIN</title>
    <link rel="stylesheet" href="../css/bjqs.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- load jQuery and the plugin -->
    <script src="../js/jquery-1.7.1.min.js"></script>
    <script src="../js/bjqs-1.3.min.js"></script>
  </head>
<div id="main">
<!--Header starts-->
<div id="header">
	<div id="logo"><a href="index.php"><img src="../images/logo.png"></a></div>
	   <div id="menu">
		<ul class="shadow">
		  <li><a href="dashboard.php?limit=0">Dashboard</a></li>
                  <li><a href="viewuser.php?limit=0">Users</a></li>
                  <li><a href="admins.php">Admins</a></li>
                  <li><a href="products.php">Products</a></li>
                  <li><a href="vieworder.php?limit=0">Orders</a></li>
		</ul>
	     </div>
	</div>
</div>

<!--Header Ends-->
