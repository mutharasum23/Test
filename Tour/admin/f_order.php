<?php
include("../connection.php");
session_start();
if ($_GET["state"] == "Weekly") {
    $result4 = mysql_query("SELECT order_id,users.user_id,duration,orderplaced_at,product_price,name,address,city,state,country,email,phone,product_name, start_date, end_date,status
FROM orders, users, products
WHERE users.user_id = orders.user_id
AND products.product_id = orders.product_id AND orderplaced_At > DATE_SUB(NOW(), INTERVAL 1 WEEK)");
    $inc3 = 0;
    while ($row4 = mysql_fetch_array($result4)) {
        $price[$inc3] = $row4["product_price"];
        $duration[$inc3] = $row4["duration"];
        $sdate[$inc3] = $row4["start_date"];
        $edate[$inc3] = $row4["end_date"];
        $datetime1 = new DateTime($sdate[$inc3]);
        $datetime2 = new DateTime($edate[$inc3]);
        $interval = $datetime1->diff($datetime2);
        $days[$inc3] = $interval->format('%a');
        $onedayp[$inc3] = $price[$inc3] / $duration[$inc3];
        $eachamt[$inc3] = $days[$inc3] * $onedayp[$inc3];
        $inc3++;
    }
    $amount["gross"] = array_sum($eachamt);
    $amount["net"]=(72*$amount["gross"])/100;
    $amount["users"] = mysql_num_rows(mysql_query("SELECT * FROM users where created_at > DATE_SUB(NOW(), INTERVAL 1 WEEK)"));
    $amount["products"] = mysql_num_rows(mysql_query("SELECT * FROM products where added > DATE_SUB(NOW(), INTERVAL 1 WEEK)"));
    $amount["orders"] =mysql_num_rows(mysql_query("SELECT * FROM orders"));
   echo json_encode($amount);
} else if ($_GET["state"] == "Yearly") {
      $result4 = mysql_query("SELECT order_id,users.user_id,duration,orderplaced_at,product_price,name,address,city,state,country,email,phone,product_name, start_date, end_date,status
FROM orders, users, products
WHERE users.user_id = orders.user_id
AND products.product_id = orders.product_id AND orderplaced_At > DATE_SUB(NOW(), INTERVAL 1 YEAR)");
    $inc3 = 0;
    while ($row4 = mysql_fetch_array($result4)) {
        $price[$inc3] = $row4["product_price"];
        $duration[$inc3] = $row4["duration"];
        $sdate[$inc3] = $row4["start_date"];
        $edate[$inc3] = $row4["end_date"];
        $datetime1 = new DateTime($sdate[$inc3]);
        $datetime2 = new DateTime($edate[$inc3]);
        $interval = $datetime1->diff($datetime2);
        $days[$inc3] = $interval->format('%a');
        $onedayp[$inc3] = $price[$inc3] / $duration[$inc3];
        $eachamt[$inc3] = $days[$inc3] * $onedayp[$inc3];
        $inc3++;
    }
    $amount["gross"] = array_sum($eachamt);
    $amount["net"]=(72*$amount["gross"])/100;
    $amount["users"] = mysql_num_rows(mysql_query("SELECT * FROM users where created_at > DATE_SUB(NOW(), INTERVAL 1 YEAR)"));
    $amount["products"] = mysql_num_rows(mysql_query("SELECT * FROM products where added > DATE_SUB(NOW(), INTERVAL 1 YEAR)"));
    $amount["orders"] =mysql_num_rows(mysql_query("SELECT * FROM orders"));
   echo json_encode($amount);
}
else if ($_GET["state"] == "Today") {
      $result4 = mysql_query("SELECT order_id,users.user_id,duration,orderplaced_at,product_price,name,address,city,state,country,email,phone,product_name, start_date, end_date,status
FROM orders, users, products
WHERE users.user_id = orders.user_id
AND products.product_id = orders.product_id AND orderplaced_At > DATE_SUB(NOW(), INTERVAL 1 DAY)");
    $inc3 = 0;
    while ($row4 = mysql_fetch_array($result4)) {
        $price[$inc3] = $row4["product_price"];
        $duration[$inc3] = $row4["duration"];
        $sdate[$inc3] = $row4["start_date"];
        $edate[$inc3] = $row4["end_date"];
        $datetime1 = new DateTime($sdate[$inc3]);
        $datetime2 = new DateTime($edate[$inc3]);
        $interval = $datetime1->diff($datetime2);
        $days[$inc3] = $interval->format('%a');
        $onedayp[$inc3] = $price[$inc3] / $duration[$inc3];
        $eachamt[$inc3] = $days[$inc3] * $onedayp[$inc3];
        $inc3++;
    }
   $amount["gross"] = array_sum($eachamt);
    $amount["net"]=(72*$amount["gross"])/100;
    $amount["users"] = mysql_num_rows(mysql_query("SELECT * FROM users where created_at > DATE_SUB(NOW(), INTERVAL 1 DAY)"));
    $amount["products"] = mysql_num_rows(mysql_query("SELECT * FROM products where added > DATE_SUB(NOW(), INTERVAL 1 DAY)"));
    $amount["orders"] =mysql_num_rows($result4);
   echo json_encode($amount);
}
?>
