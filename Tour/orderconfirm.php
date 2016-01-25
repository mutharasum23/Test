<style>
#productorder{
margin-left:200px;
margin-top:50px;
float:left;
}
#ri{
margin-top:200px;
font-size:20px;
}
#name{
text-align:center;
font-size:40px;
margin-bottom:30px;
}
#price{
float: left;
margin-left: 100px;
}
#social{
    float:left;
    margin-left: 100px;
}
#ri a{
       float:left;
       margin-top:30px;
        margin-left: 165px;
}
#s{float:left; margin-left: 50px;}
#e{float:left; margin-left: 50px;}
</style>
<script>
function goBack() {
    window.history.back();
}
</script>
<?php
include('connection.php');
include('header.php');
$product=$_GET["product"];
$select_path="SELECT * from products where product_id='$product'";
$var=mysql_query($select_path);
$row4=mysql_fetch_array($var);
$price = $row4["product_price"];
$duration = $row4["duration"];
$sdate = $_GET["sdate"];
$edate = $_GET["edate"];
$datetime1 = new DateTime($sdate);
$datetime2 = new DateTime($edate);
$interval = $datetime1->diff($datetime2);
$days = $interval->format('%a');
$onedayp = $price / $duration;
$eachamt = $days * $onedayp;
$path=$row4["product_img"];
echo "<div id=productorder>";
echo "<div id='name'>".$row4['product_name']."</div>";
echo "<a href='javascript:void(0)'><img src='admin/".$path."'></a></div>";
echo "<div id='ri'>";
echo " <div id='price'>Package price:&#8377;".$price."</div><br>";
echo " <div id='price'>Total amount:&#8377;".$eachamt."</div><br>";
echo " <div id='price'>Package duration: ".$row4["duration"]." days</div><br>";
echo "<div id='social'>Selected Duration:".$days."Days</div> <br><br>";
echo "<div id='s'>START DATE:$sdate</div>";
echo "<div id='e'>END DATE:$edate</div>";
echo "<a href='bookorder.php?product=$product&sdate=$sdate&edate=$edate&amt=$eachamt' class='btn btn' id='book'>Booknow</a>";
echo "<a href='#' onclick='goBack()' class='btn btn' id='book'>Go back</a>";
echo "</div>";
/*echo "";
echo "<div id='ocw'><div id='title'> Order Confirmation</h3></div>";
echo "<div id='oc'>";
echo "<div id='pname'>Place:".$row4['product_name']."</div><div id='sdate'>Journey Start date:$sdate</div><div id='edate'>Journey end date:$edate</div> <div id='price'>Total amount:$eachamt</div>";
echo "</div> <div id='img'><img src='admin/$path'></div>";
echo "</div>";
echo "<a href='bookorder.php?product=$product&sdate=$sdate&edate=$edate&amt=$eachamt'>Book now</a>"; */
?>