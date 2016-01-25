<!doctype html>
<?php 
include("../connection.php");
session_start();
if(!isset($_SESSION['user']))
{
$_SESSION["message"]="Please signin to continue";
header("Location:index.php");

}
include("header.php");
$grossamt=0;
$netamount=0;
?>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script>
var dat;
$(document).ready(function() {
$("#year").on("change",function(){
var rr=document.getElementById("year").value;
  $.ajax(
    {
        url : "f_order.php?state="+rr,
        type: "GET",
        success:function(data, textStatus, jqXHR) 
        {
            //data: return data from server
	var aa=$.parseJSON(data);
        $("#us").text(aa.users);
        $("#pr").text(aa.products);
        $("#or").text(aa.orders);
        $("#gr").text(aa.gross);
        $("#net").text(aa.net);
      
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {
            //if fails      
		alert("fail");
        }
    });
});
});
/*function autosubmit()
{
window.location.href="f_product.php?id="+document.getElementById("pid").value;
}*/
</script>



Select the Range:
<select id="year"><option>Select</option><option value="Yearly">Yearly</option><option value="Weekly">weekly</option><option value="Today">Today</option></select>
<div id="content">
    <div id="usercount">No.of Users registered:<span id="us"></span></div>
<div id="productcount">No.of products:<span id="pr"></span></div>
<div id="orders">No.of Orders : <span id="or"></span> </div>
<div id="orders">Gross amount : <span id="gr"></span></div>
<div id="orders">Net Profit:<span id="net"></span> </div>

<div id="users">
<h1>List of orders</h1>

<?php
$limit=$_GET["limit"];
$pageper=5;
$select_path1="SELECT order_id,users.user_id,name,address,city,state,country,email,phone,product_name, start_date, end_date,status
FROM orders, users, products
WHERE users.user_id = orders.user_id
AND products.product_id = orders.product_id ";
$var1=mysql_query($select_path1);
$numrows=  mysql_num_rows($var1);
$noofpage=ceil($numrows/$pageper);
$select_path="SELECT order_id,users.user_id,name,address,city,state,country,email,phone,product_name, start_date, end_date,status
FROM orders, users, products
WHERE users.user_id = orders.user_id
AND products.product_id = orders.product_id LIMIT $pageper OFFSET $limit";
$var=mysql_query($select_path);
echo "<br>";
$inc=0;
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
    echo "<tr><td>".$orderid[$inc]."</td><td>".$userid[$inc]."</td><td> ".$uname[$inc]."</td><td>".$address[$inc]."</td><td>".$city[$inc]."</td><td>".$state[$inc]."</td><td>".$country[$inc]."</td><td>".$email[$inc]."</td><td>".$phone[$inc]."</td></tr>";
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
    echo "<a href='dashboard.php?limit=$li'>$d</a>";
    $i++;
}
echo "</div>";
?>
<div>
<div id="admins"></div>
</div>
</div>
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
</html>
