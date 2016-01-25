<?php include("ret_product.php"); include("header.php");

?>

  <head>
    <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <title>Shop</title>
	  <script type="text/javascript" charset="utf-8" src="js/jquery-1.9.1.js"></script>
  <script type="text/javascript" charset="utf-8" src="js/jquery-ui-1.10.3.custom.min.js"></script>
	<script type="text/javascript">
$(document).ready(function($) {
	$("#products").sortable({
		start : function(event, ui) {
			ui.item.addClass('active');
		},
		stop : function(event, ui) {
			ui.item.removeClass('active').effect("highlight", { color: '#000' }, 1000, function() {
				/*$.each($('#products div.div.draggable'), function(index, event) {
					//$(this).children('span').html(parseInt(index, 10)+1);
				});*/
			});			
		}
	});
	$("#images").disableSelection();
});
</script>
<style>.buy1{ color: #fff;    text-align: center;
    text-decoration: none; background: #ed6347 none repeat scroll 0 0;}</style>
</head>

<div id="side">

<h3>Our Locations</h3>
<ul>
<li class="fa fa-plane"><a href="javascript:void(0);">Kodaikanal</a></li>
<li class="fa fa-plane"><a href="javascript:void(0);">Ooty</a></li>
<li class="fa fa-plane"><a href="javascript:void(0);">Yerkadu</a></li>
<li class="fa fa-plane"><a href="javascript:void(0);">Vaalparai</a></li>
<li class="fa fa-plane"><a href="javascript:void(0);">Megamalai</a></li>
<li class="fa fa-plane"><a href="javascript:void(0);">Madurai</a></li>
<li class="fa fa-plane"><a href="javascript:void(0);">Kanchipuram</a></li>
<li class="fa fa-plane"><a href="javascript:void(0);">Kanniyakumari</a></li>

</div>

<div id="products">
<?php 
$inc1=1;
$inc2=0;
$cou=count($path);
while($cou>0)
{
echo "<div id=product".$inc1.">";
echo "<a href='javascript:void(0)'><img src='admin/".$path[$inc2]."'></a>";
echo "<div id='name'>".$pname[$inc2]."</div>";
echo " <div id='price'>Package:&#8377;".$pprice[$inc2]."</div>";
echo "<div id='social'>Duration:".$duration[$inc2]."Days</div> ";
echo "<a href='order.php?id=".$inc2."' class='buy1'>Booknow</a>";    /*Passing the clicked id to the landing page */
echo "</div>";
$inc1++;
$inc2++;
$cou--;
} 	
?>			<!--<div id="product1">
					<a href="javascript:void(0)"><img src="admin/<?php if(isset($path[0])){ echo $path[0];}?>"></a>
					<div id="name"><?php if(isset($pname[0])){ echo $pname[0];}?></div>
					<div id="price">Package:&#8377; <?php if(isset($pprice[0])){ echo $pprice[0];}?></div>
					<div id="social">Duration:<?php if(isset($duration[0])){ echo $duration[0];}?> Days</div>
				</div>
				<div id="product2">
					<a href="javascript:void(0)"><img src="admin/<?php if(isset($path[1])){ echo $path[1];}?>"></a>
					<div id="name"><?php if(isset($pname[1])){ echo $pname[1];}?></div>
					<div id="price">Package:&#8377; <?php if(isset($pprice[1])){ echo $pprice[1];}?></div>
					<div id="social">Duration:<?php if(isset($duration[1])){ echo $duration[1];}?> Days</div>
				</div>
				<div id="product3">
					<a href="javascript:void(0)"><img src="admin/<?php if(isset($path[2])){ echo $path[2];}?>"></a>
					<div id="name"><?php if(isset($pname[2])){ echo $pname[2];}?></div>
					<div id="price">Package:&#8377; <?php if(isset($pprice[2])){ echo $pprice[2];}?></div>
					<div id="social">Duration:<?php if(isset($duration[2])){ echo $duration[2];}?> Days</div>
				</div>
	
			
				<div id="product4">
					<a href="javascript:void(0)"><img src="admin/<?php if(isset($path[3])){ echo $path[3];}?>"></a>
					<div id="name"><?php if(isset($pname[3])){ echo $pname[3];}?></div>
					<div id="price">Package:&#8377; <?php if(isset($pprice[3])){ echo $pprice[3];}?></div>
					<div id="social">Duration:<?php if(isset($duration[3])){ echo $duration[3];}?> Days</div>
				</div>
				<div id="product5">
					<a href="javascript:void(0)"><img src="admin/<?php if(isset($path[4])){ echo $path[4];}?>"></a>
					<div id="name"><?php if(isset($pname[4])){ echo $pname[4];}?></div>
					<div id="price">Packagar:&#8377; <?php if(isset($pprice[4])){ echo $pprice[4];}?></div>
					<div id="social">Duration:<?php if(isset($duration[4])){ echo $duration[4];}?> Days</div>
				</div>
				<div id="product6">
					<a href="javascript:void(0)"><img src="admin/<?php if(isset($path[5])){ echo $path[5];}?>"></a>
					<div id="name"><?php if(isset($pname[5])){ echo $pname[5];}?></div>
					<div id="price">Package:&#8377; <?php if(isset($pprice[5])){ echo $pprice[5];}?></div>
					<div id="social">Duration:<?php if(isset($duration[5])){ echo $duration[5];}?> Days</div>
				</div>
				<div id="product7">
					<a href="javascript:void(0)"><img src="admin/<?php if(isset($path[6])){ echo $path[6];}?>"></a>
					<div id="name"><?php if(isset($pname[6])){ echo $pname[6];}?></div>
					<div id="price">Package:&#8377; <?php if(isset($pprice[6])){ echo $pprice[6];}?></div>
					<div id="social">Duration:<?php if(isset($duration[6])){ echo $duration[6];}?> Days</div>
				</div>
				<div id="product8">
				<a href="javascript:void(0)">	<img src="admin/<?php if(isset($path[7])){ echo $path[7];}?>"></a>
					<div id="name"><?php if(isset($pname[7])){ echo $pname[7];}?></div>
					<div id="price">Package:&#8377; <?php if(isset($pprice[7])){ echo $pprice[7];}?></div>
					<div id="social">Duration:<?php if(isset($duration[7])){ echo $duration[7];}?> Days</div>
				</div>
				<div id="product9">
				<a href="javascript:void(0)">	<img src="admin/<?php if(isset($path[8])){ echo $path[8];}?>"></a>
					<div id="name"><?php if(isset($pname[8])){ echo $pname[8];}?></div>
					<div id="price">Package:&#8377; <?php if(isset($pprice[8])){ echo $pprice[8];}?></div>
					<div id="social">Duration:<?php if(isset($duration[8])){ echo $duration[8];}?> Days</div>
				</div> -->
</div>
</body>
</html>
