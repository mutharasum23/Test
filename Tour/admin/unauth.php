<?php

session_start();
if(!isset($_SESSION['user']))
{
$_SESSION["message"]="Please signin to continue";
header("Location:index.php");

}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<html>
    <body><h1>ACCESS DENIED</h1>
        <h3>You do not have the permission to access this page.Contact administrator</h3>
        <a href="dashboard.php">Go to home</a>
    </body>
</html>