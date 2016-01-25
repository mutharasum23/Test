<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'muthu123';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db('tour_site');
if(!$conn )
{
  die('Could not connect: ' . mysql_error());
}
?>
