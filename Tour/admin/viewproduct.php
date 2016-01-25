<html>
<head></head>
<body>
<?php
include("../connection.php");
$select_path="select * from products";
$var=mysql_query($select_path);
$inc=0;
echo "<table border=1 cellspacing='10px'><tr> <th>ProductID</th> <th>Name</th>  <th>Price</th> <th>Location</th> <th>Path</th> <th>Duration</th> </tr>";
while($row=mysql_fetch_array($var))
{
    $pid[$inc]=$row["product_id"];
    $pname[$inc]=$row["product_name"];
    $pprice[$inc]=$row["product_price"];
    $plocation[$inc]=$row["location"];
    $path[$inc]=$row["product_img"];
    $duration[$inc]=$row["duration"];
    echo "<tr><td>".$pid[$inc]."</td><td>".$pname[$inc]."</td><td>".$pprice[$inc]."</td><td>".$plocation[$inc]."</td><td>".$duration[inc]."</td></tr>";
    $inc++;
}
echo "</table>";
?>

</body>
</html>
