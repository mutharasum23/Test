<?php
session_start();
if(!isset($_SESSION['username'] ))
{
header("Location:index.php");
}
include("connection.php");

?> 

<html>
  <head>
    <meta charset="utf-8">
    <title>Indo-Tourism</title>
      <link rel="stylesheet" href="profile.css">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
      
      <script>
           function readURL(input) {
		if(input.files[0].size/1024 < 500)
	 	 {
            		if (input.files && input.files[0]) {
                	var reader = new FileReader();
                	reader.onload = function (e) {
                    	$('#dp')
                        .attr('src', e.target.result)
                	};

                	reader.readAsDataURL(input.files[0]);
                	$("#file").hide();
                	$("#change").show();
                	cosole.log(e.target);
            		}
		}
		else
		{
			alert("image should be less than 500");
		}
        }
           $(document).ready(function() {
           $("#file").hide();
               $("#change").click(function(){$(this).hide();$("#file").show();});
           });
        
      </script>
 
    </head>
    <body>
 <div id="topbar"><h2 id="heading">Your Profile</h2><h3 id="empname">hi, <?php echo $_SESSION['username'];
if($_POST["logout"])
{
session_destroy();
setcookie ("auto", $_SESSION['username'], 1);
header('Location:index.php');
}
?>
<a href="editprofile.php">Edit profile</a>
<form method="post" action="" method="post"><input type="submit" name="logout" value="Logout"></form></h3></div>
        <div id="container">
        <div id="lsidebar">
            <div class="round">
                <img src="imgavatar.jpeg" id="dp">
                <button id="change">Change picture</button>
                <input type="file"  id="file" onchange="readURL(this);" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|images/*">
            </div>
            <div id="name"><h1><?php echo $_SESSION['fname'] ?></h1></div>
            <div id="social">
    
            </div>
	 <div id="others">
        Address:<?php
         $username=$_SESSION["username"];
        $select_path1="select * from users where user_id='$username'";
$var1=mysql_query($select_path1);
$row1=mysql_fetch_array($var1);
echo $row1["address"];
echo "<br>";
echo $row1["city"];
echo "<br>";
echo $row1["state"];
echo "<br>";
echo $row1["country"];
echo "<br>";
?>
        Phone:<?php echo $row1["phone"]; ?>
        EMAIL:<?php echo $row1["email"]; ?>
            </div>
        </div>
        <div id="content">
        <div id="cheader"> My orders</div>
  
           <div id="intro">
               
               
               <?php if($_SESSION["order"]){
               echo $_SESSION["order"];
           }
          
           $select_path="SELECT order_id,product_name, start_date, end_date,status,msg
FROM orders, users, products
WHERE orders.user_id = '$username'
AND users.user_id = orders.user_id
AND products.product_id = orders.product_id ORDER BY orderplaced_at DESC ";

$var=mysql_query($select_path);
$inc=0;
echo "<table border=1> <tr><th>Order ID</th><th>Product name</th><th>Start date</th><th>End date</th><th>Status</th><th>Message</th></tr>";
while($row=mysql_fetch_array($var))
{
    $orderid[$inc]=$row["order_id"];
    $pname[$inc]=$row["product_name"];
    $sdate[$inc]=$row["start_date"];
    $edate[$inc]=$row["end_date"];
    $status[$inc]=$row["status"];
    $Message[$inc]=$row['msg'];
    echo "<tr><td>".$orderid[$inc]."</td><td>".$pname[$inc]."</td><td> ".$sdate[$inc]."</td><td>".$edate[$inc]."</td><td>$status[$inc]</td><td> $Message[$inc]</td></tr>";
    $inc++;
}
           ?>
            </div>
            </div>
           
        </div>
    </body>
</html>
