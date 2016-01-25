<?php
include("../connection.php");
include("header.php");
$limit=$_GET["limit"];
$pageper=5;
$select_path1="SELECT * from users";
$var1=mysql_query($select_path1);
$numrows=  mysql_num_rows($var1);
$noofpage=ceil($numrows/$pageper);
$inc=0;
?>
<style>
    #page{
        
       margin:10px;
    }
    #page a{
        margin:3px;
        border:1px;
        text-decoration: none;
        background-color: yellow;
        
    }
</style>
<h1>List of users</h1>
<div id="submenu">
<div class="aa"><a href="edituser.php" class="pfun">Edit user info</a></div>

<div class="aa"><a href="viewuser.php?limit=0" class="pfun">View order</a></div>
</div><?php
$select_path="SELECT * from users LIMIT $pageper OFFSET $limit";
$var=mysql_query($select_path);
echo "<table border=1><tr><th>user_id</th><th>Name</th><th>Address</th><th>city</th><th> state</th><th> country</th><th>EMAIL</th><th>Phone</th></tr>";
while($row=mysql_fetch_array($var))
{
    $userid[$inc]=$row["user_id"];
    $uname[$inc]=$row["name"];
    $address[$inc]=$row["address"];
    $city[$inc]=$row["city"];
    $state[$inc]=$row["state"];
    $country[$inc]=$row["country"];
    $email[$inc]=$row["email"];
    $phone[$inc]=$row["phone"];
    
    echo "<tr><td><a href='userdet.php?userid=$userid[$inc]'>".$userid[$inc]."</a></td><td> ".$uname[$inc]."</td><td>".$address[$inc]."</td><td>".$city[$inc]."</td><td>".$state[$inc]."</td><td>".$country[$inc]."</td><td>".$email[$inc]."</td><td>".$phone[$inc]."</td></tr>";
    $inc++;
}

echo "</table>";

echo "<div id='page'>";
echo "Pages";
  $i=0;  
while($i<$noofpage)
{
    $li=$i*$pageper;
    $d=$i+1;
    echo "<a href='viewuser.php?limit=$li'>$d</a>";
    $i++;
}
echo "</div>";
?>