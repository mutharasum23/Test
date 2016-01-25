<?php 
include("header.php");
include ("connection.php");
session_start();
if(!isset($_SESSION['username']))
{
    $_SESSION["aa"]="mm";
echo "<script>window.location.href='index.php#img1';</script>";
exit();
}
if(!isset($_SESSION['address']))
{
     $_SESSION["cfm"]=1;
    header("Location:editprofile.php?msg=enter your details first");
    exit();
}
$pr=$_GET["id"];
include("ret_product.php");
?>
<style>
#productorder{
margin-left:200px;
margin-top:50px;
float:left;
}
#ri{
margin-top:200px;
padding:10px;
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
margin-left: 100px;
}
#facebookcomment{
    margin-top:56px;
}
</style>
<div id="fb-root"></div>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script>
var dat;
$(document).ready(function() {
    var a;
    $( "#sdate" ).datepicker({
        minDate: new Date, dateFormat: "yy-mm-dd", changeMonth: true,
        changeYear: true,
       onSelect: function(date){

        var selectedDate = new Date(date);
        var msecsInADay = 86400000;
        var endDate = new Date(selectedDate.getTime() + msecsInADay);

        $("#edate").datepicker( "option", "minDate", endDate );
        }
     }).val();
 // $("#sdate").on("change",function(){ a=$("#sdate").datepicker("getdate");});
    $( "#edate" ).datepicker({dateFormat: "yy-mm-dd" }).val();
$("#book").on("click",function(){
var id="<?php echo $pr;?>";
var pid="<?php echo $productid[$pr]?>";
var sdate=$("#sdate").val();
var edate=$("#edate").val();
 
    window.location.href="orderconfirm.php?id="+id+"&product="+pid+"&sdate="+sdate+"&edate="+edate;
    /*$.ajax(
    {
      url : "bookorder.php?id="+id+"&product="+pid+"&sdate="+sdate+"&edate="+edate,
        type: "GET",
        success:function(data, textStatus, jqXHR) 
        {
            //data: return data from server
            window.location.href="profile.php";
     
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {
            //if fails      
		alert("fail");
        }
    });*/
});
});
</script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php
echo "<div id=productorder>";
echo "<div id='name'>".$pname[$pr]."</div>";
echo "<a href='javascript:void(0)'><img src='admin/".$path[$pr]."'></a></div>";
echo "<div id='ri'>";
echo " <div id='price'>Package price:&#8377;".$pprice[$pr]."</div><br>";
echo "<div id='social'>Duration:".$duration[$pr]."Days</div> <br><br>";
  /* TO pass the values to the order page */
echo "<div id='s'>START DATE:<input type='text' id='sdate' name='sdate' ></div>";
echo "<div id='e'>END DATE:<input type='text' id='edate' name='edate' ></div>";
echo "<a href='#' class='btn btn' id='book'>Booknow</a>";
echo "</div>";
?>


<div id="facebookcomment" class="fb-comments" data-href="https://www.facebook.com/LoveMaduraiCity" data-numposts="5"></div>