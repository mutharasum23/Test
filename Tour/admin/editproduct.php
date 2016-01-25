<!doctype html>
<?php include("header.php");
include("../connection.php");
session_start();
?>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script>
var dat;
$(document).ready(function() {
$("#pid").on("change",function(){
var rr=document.getElementById("pid").value;
  $.ajax(
    {
        url : "f_product.php?id="+rr,
        type: "GET",
        success:function(data, textStatus, jqXHR) 
        {
            //data: return data from server
	var aa1=$.parseJSON(data);
	$("#pn1").val(aa1.product_name);
	$("#pp1").val(aa1.product_price);
	$("#pl1").val(aa1.location);
	$("#pd1").val(aa1.duration);
	$("#img1").attr("src",aa1.product_img);
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
<body>
<div>
<div id="submenu">
<div class="aa"><a href="addnew.php" class="pfun">Add product</a></div>

<div class="aa"><a href="editproduct.php" class="pfun">Edit product</a></div>

<div class="aa"><a href="products.php" class="pfun">View product</a></div>
</div>
<h1>Edit product</h1>
<div id="content1">
<div id="space">
<form name="addproduct" id="subform" enctype="multipart/form-data" action="editproductexe.php" method="post" >
Select the product <select name="pid"  id="pid">
<option>Select</option>
<?php 
$select_path="select * from products";
$var=mysql_query($select_path);
$inc=0;
while($row=mysql_fetch_array($var))
{
    echo "<option value=".$row["product_id"].">".$row["product_id"]."</option>";
}
?>
</select><br>
Change the Picture:<input type="file" name="pimage" id="i1">  <img src= "" height="100px" width="100px" id="img1"><br> 
Change the product name: <input type="text" name="pname" id="pn1" value=""><br>
Change the product price: <input type="number" name="pprice" id="pp1" value=""><br>
Change the Location:<input type="text" name="plocation" id="pl1" value=""><br>
Change the Duration:<input type="number" name="pdays" id="pd1" value=""><br>
<input type="submit" name="update" class="btn btn_red" value="Update info"><br>
</form>
</div>
</div>
</div>
<!--content space-->
</body>
</html>
