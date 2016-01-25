<?php include("header.php");
include("../connection.php");?>
<h1>List of orders</h1>
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
<div id="submenu">
<div class="aa"><a href="editorder.php" class="pfun">Edit order</a></div>

<div class="aa"><a href="vieworder.php" class="pfun">View order</a></div>
</div>
<?php
$limit=$_GET["limit"];
$pageper=5;
$select_path1="SELECT order_id,users.user_id,name,address,city,state,country,email,phone,product_name, start_date, end_date,amount
FROM orders, users, products
WHERE users.user_id = orders.user_id
AND products.product_id = orders.product_id";
$var1=mysql_query($select_path1);
$numrows=  mysql_num_rows($var1);
$noofpage=ceil($numrows/$pageper);
$inc=0;
$select_path="SELECT order_id,users.user_id,name,address,city,state,country,email,phone,product_name, start_date, end_date,amount
FROM orders, users, products
WHERE users.user_id = orders.user_id
AND products.product_id = orders.product_id LIMIT $pageper OFFSET $limit";
$var=mysql_query($select_path);
echo "<table border=1> <tr><th>Order ID</th><th>user_id</th><th>Name</th><th>Address</th><th>city</th><th> state</th><th> country</th><th>EMAIL</th><th>Phone</th></tr>";
while($row=mysql_fetch_array($var))
{
    $orderid[$inc]=$row["order_id"];
    $userid[$inc]=$row["user_id"];
    $uname[$inc]=$row["name"];
    $address[$inc]=$row["address"];
    $city[$inc]=$row["city"];
    $state[$inc]=$row["state"];
    $country[$inc]=$row["country"];
    $email[$inc]=$row["email"];
    $phone[$inc]=$row["phone"];
    $productname=$row["product_name"];
    $sdate[$inc]=$row["start_date"];
    $edate[$inc]=$row["end_date"];
    $pname[$inc]=$row["product_name"];
    $amount[$inc]=$row["amount"];
    
    echo "<tr><td><a href='orderapprove.php?oid=$orderid[$inc]&uid=$userid[$inc]&uname= $uname[$inc]&add=$address[$inc]&city=$city[$inc]&state=$state[$inc]&country=$country[$inc]&email= $email[$inc]&phone=$phone[$inc]&sdate=$sdate[$inc]&edate=$edate[$inc]&pname=$pname[$inc]&amount=$amount[$inc]'>".$orderid[$inc]."</a></td><td>".$userid[$inc]."</td><td> ".$uname[$inc]."</td><td>".$address[$inc]."</td><td>".$city[$inc]."</td><td>".$state[$inc]."</td><td>".$country[$inc]."</td><td>".$email[$inc]."</td><td>".$phone[$inc]."</td></tr>";
    $inc++;
}
?>

</table>

<?php

echo "<div id='page'>";
echo "Pages";
  $i=0;  
while($i<$noofpage)
{
    $li=$i*$pageper;
    $d=$i+1;
    echo "<a href='vieworder.php?limit=$li'>$d</a>";
    $i++;
}
echo "</div>";
?>