<?php 
session_start();
if(isset($_SESSION["username"]))
{
echo "Welcome,"."<a href='profile.php'>".$_SESSION["name"]."</a>";
unset($_SESSION["message"]);
echo "<form method='post' action='' method='post'><input type='submit' name='logout' value='Logout'></form>";
}
else
{
echo "<a href='index.php#img1'><img src='images/login.png'></a>";
echo $_SESSION["message"];
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
    <title>Indo-Tourism</title>
    <link rel="stylesheet" href="css/bjqs.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- load jQuery and the plugin -->
    <script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/bjqs-1.3.min.js"></script>
  </head>
  <body>
<div id="main">
<!--Header starts-->
<div id="header">
<?php
if($_POST["logout"])
{
session_destroy();
setcookie ("auto", $_SESSION['username'], 1);
header('Location:index.php');
}
?>
	<div id="logo"><a href="index.php"><img src="images/logo.png"></a></div>
	   <div id="menu">
		<ul class="shadow">
		  <li><a href="index.php">Home</a></li>
                  <li><a href="javascript:void(0);">About us</a></li>
                  <li><a href="Combo.html">Combos</a></li>
                  <li><a href="shop.php">Packages</a></li>
		</ul>
	</div>
</div>
</div>