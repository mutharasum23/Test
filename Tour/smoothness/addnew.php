<!doctype html>
<?php include("header.php"); ?>
<body>
<style>
#space{
width: 681px;
}
</style>
<!--Header starts-->

<!--Header Ends-->
<!--content space-->
<h1>Admin side</h1>
<button id="but">ADD NEW</button>
<button id="rem">Remove all</button>
<div id="space">
<form id="subform" action="addproduct.php" method="post" >
	<div id="elements"></div>
	<input type="submit" id="sub" value="submit">
</form>
</div>
<!--content space-->
</body>

<script>
$(document).ready(function(){
var i=0;
var nameregex=/^[a-z0-9]+$/;
var price= /[0-9 -()+]+$/;
$("#but").click(function(){
i++;
$("<input>",{id:'f'+i,type:'file'}).appendTo('#elements').css("","");
$("<input>",{id:'pro'+i,type:'text',placeholder:'Enter product name',name:'product[]',required:'true',maxlength:'4'}).appendTo('#elements');
//$("<div>",{id:'proerr'+i,}).appendTo('#elements');
$("<input>",{id:'pri'+i,type:'number',placeholder:'Enter product price',name:'price[]',required:'true'}).appendTo('#elements');
//$("<div>",{id:'prierr'+i,}).appendTo('#elements');
$("<input>",{id:'loc'+i,type:'text',placeholder:'Enter location',name:'loc[]',required:'true'}).appendTo('#elements');
});

	
	$('input[id^="pro"]').each(function() {
		var val1=$(this).val()
		if(!val1.match(nameregex)){
		$(this).after("<div style='color:red'>enter only letters</div>");
		return false;
	}else{
     		$(this).next().text("");
	
	//return true;
		
        }
});
/*
$("#subform").submit(function(e)
{
	console.log($(this).serialize());
	var postData = $(this).serialize();
	var formURL = "addproduct.php"
	$.ajax(
	{
		url : formURL,
		type: "POST",
		data : postData,
		success:function(data, textStatus, jqXHR) 
		{
			
		},
		error: function(jqXHR, textStatus, errorThrown) 
		{
		}
	});
    e.preventDefault();	//STOP default action
});*/
$("#rem").click(function(){
$("#elements").empty();
});
});
</script>
</html>
