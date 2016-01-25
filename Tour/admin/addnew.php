<!doctype html>
<?php include("header.php");?>
<body>
<div>
<div id="submenu">
<div class="aa"><a href="addnew.php" class="pfun">Add product</a></div>

<div class="aa"><a href="editproduct.php" class="pfun">Edit product</a></div>

<div class="aa"><a href="products.php" class="pfun">View product</a></div>
</div>
<h1>Add product</h1>
<div id="content1">

<div id="space">

<form name="addproduct" id="subform" enctype="multipart/form-data" action="addproduct.php" method="post" >
Enter the unique id for the product: <input type="text" name="pid"><br>
Select the Picture:<input type="file" name="pimage"><br>
Enter the product name: <input type="text" name="pname"><br>
Enter the product price: <input type="number" name="pprice"><br>
Enter the Location:<input type="text" name="plocation"><br>
Enter the Duration:<input type="number" name="pdays"><br>
<input type="submit" name="addproduct" class="btn btn_red" value="Add Product"><br>
</form>
</div>
</div>
</div>
<!--content space-->
</body>
</html>
