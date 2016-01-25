<?php include("header.php");
include("../connection.php");

$orderid=$_GET["oid"];
$uname=$_GET["uname"];
$add=$_GET["add"];
$uname=$_GET["uname"];
$city=$_GET["city"];
$state=$_GET["state"];
$country=$_GET["country"];
$email=$_GET["email"];
$phone=$_GET["phone"];
$sdate=$_GET["sdate"];
$edate=$_GET["edate"];
$pname=$_GET["pname"];
$amount=$_GET["amount"];

?>

<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script>
$(document).ready(function() {
$("#update").on("click",function(){
    alert("1");
var rr="<?php echo $orderid; ?>";
var ss=$("#status").val();
var mm=$('#msg').val();
var data="id="+rr+"&status="+ss+"&msg="+mm;
  $.ajax(
    {
        url : "st_ordermsg.php",
        type: "POST",
        data:data,
        success:function(data, textStatus, jqXHR) 
        {
            //data: return data from server
	alert(data);
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {
            //if fails      
		alert("fail");
        }
    });
});
});
function goBack() {
    window.history.back();
}
</script>
<style>
    #confirmation{
        
       margin-left: 400px;
       margin-top:20px;
       float:left;
    }
    #confirmation div{
      margin-top:10px;
    }
    #right{
        float: right;
    margin-right: 109px;
    margin-top: 150px;
    }
    #right div{
        margin-top:25px;
    }
    #aa{
        
       margin-top: 10px;
      
    }
    #aa a{
         color: #fff;
    text-align: center;
    text-decoration: none;
    background: #ed6347 none repeat scroll 0 0;
    height: 50px;
    padding: 10px;
    }
</style>
<?php
echo "<div id='confirmation'>";
echo "<h1>Order Confirmation</h1>";
echo "<div>Order ID:<span id='oid'> ".$orderid."</span></div>";
echo "<div>Product name:".$pname."</div>";
echo "<div>User name: ".$uname."</div>";
echo "<div>Address: ".$add."</div>";
echo "<div>City: ".$city."</div>";
echo "<div>State:".$state."</div>";
echo "<div>Country: ".$country."</div>";
echo "<div>Email: ".$email."</div>";
echo  "<div>Phone: ".$phone."</div>";
echo "<div>Start Date:".$sdate."</div>";
echo "<div>End Date:".$edate."</div>";
echo "<div>Total Amont:".$amount."</div>";

echo "</div>"; 
echo "<div id='right'>";
echo "<div>Update the Status:<select id='status' name='status'><option value='Confirmed'>Confirmed</option><option value='In process'>In process</option><option value='Rejected'>Rejected</option></select></div>";
echo "<div>Comments:<input type='text' name='msg' id='msg'></div>";
echo "<div id='aa'><a href='#' id='update'> Update Status</a> <a href='#' onclick='goBack()' class='btn btn' id='book'>Go back</a></div></div>";
?>