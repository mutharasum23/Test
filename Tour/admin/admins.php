<?php
include("../connection.php");
session_start();
if(!isset($_SESSION['user']))
{
$_SESSION["message"]="Please signin to continue ";
header("Location:index.php");
}
if(($_SESSION['role'])!=3)
{
   header("Location:unauth.php");
}
include("header.php");
?>
<style>
#content2{
float:left;
width:600px;

}
h1{
margin-left:360px;
}
</style>

<h1>List of Admins</h1>
<div id="submenu">
<div class="aa"><a href="addadmin.php" class="pfun">Addnew admin</a></div>

<div class="aa"><a href="admins.php" class="pfun">View admin</a></div>
</div>	
<div id="content2">
<?php
$select_path="SELECT * from users where role_no=2 LIMIT 10";
$var=mysql_query($select_path);
$inc=0;
echo "<table border=1 cellspacing=5px> <tr><th> UserID </th><th>Name</th><th> DOB</th><th>EMAIL</th><th>Phone</th><th>Address</th><th>city</th><th>state</th><th> country</th></tr>";

while($row=mysql_fetch_array($var))
{
    $uid[$inc]=$row["user_id"];
    $uname[$inc]=$row["name"];
    $DOB[$inc]=$row["DOB"];
    $email[$inc]=$row["email"];
    $phone[$inc]=$row["phone"];
    $address[$inc]=$row["address"];
    $city[$inc]=$row["city"];
$state[$inc]=$row["state"];
$country[$inc]=$row["country"];
$admin_id[$inc]=$row["admin_id"];
    echo "<tr><td>".$uid[$inc]."</td><td>".$uname[$inc]."</td><td>".$DOB[$inc]."</td><td>".$email[$inc]."</td><td>".$phone[$inc]."</td><td>".$address[$inc]."</td><td>".$city[$inc]."</td><td>".$state[$inc]."</td><td>".$country[$inc]."</td></tr>";
    $inc++;
}

?>
</div>
