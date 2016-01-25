<?php
//You can also use $stamp = strtotime ("now"); But I think date("Ymdhis") is easier to understand.

$orderid ="TR".date("Ymdhis");
echo($orderid);
echo "<br>";


$date ='12-12-2007';
$dateTime = new DateTime($date);
$formatted_date=date_format ( $dateTime, 'Y-m-d' );
echo $formatted_date;
echo "<br>";
$datetime1 = new DateTime('2009-10-11');
$datetime2 = new DateTime('2009-10-13');
$interval = $datetime1->diff($datetime2);
echo $interval->format('%R%a days');
?>


