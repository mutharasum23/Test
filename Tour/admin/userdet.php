<style>
    #userdet{
        margin-left:364px;
        margin-top:150px;
        float:left;
    }
    #userdet .aa{
         color: #fff;
 text-align: center;
 text-decoration: none;
 background: #ed6347 none repeat scroll 0 0;
padding: 10px;
height:50px;
    }
    #but{
        margin-top:30px;
    }
</style>
<script>
function goBack() {
    window.history.back();
}
</script>
<?php
include '../connection.php';
include 'header.php';
$userid= $_GET["userid"];
$select_path="SELECT * from users WHERE user_id='$userid'" ;
$var=mysql_query($select_path);
$row=mysql_fetch_array($var);
echo "<div id='userdet'>";
echo "User name: ".$row["name"]."<br>";
echo "Address: ".$row["address"]."<br>";
echo "City:".$row["city"]."<br>";
echo "State:".$row["state"]."<br>";
echo "Country:".$row["country"]."<br>";
echo "Email:".$row["email"]."<br>";
echo "Phone:".$row["phone"]."<br>";
echo "<div id='but'>";
if($row["active_state"]==0)
{
    echo "<a href='act.php?state=1&userid=$userid' class='aa'>De-Activate</a>";
}
else if($row["active_state"]==1)
{
    echo "<a href='act.php?state=0&userid=$userid' class='aa'>Activate</a>";
}
echo "<a href='#' onclick='goBack()' class='btn btn' id='book'>Go back</a>";
echo "</div>";
echo "<div>";
?>



