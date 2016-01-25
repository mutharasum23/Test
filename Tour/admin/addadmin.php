<?php include("header.php");
include("../connection.php");
if(($_SESSION['role'])!=3)
{
   header("Location:unauth.php");
}
if(isset($_SESSION["messagem"]))
{
    echo $_SESSION["messagem"];
}
    
?>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script>
var dat;
$(document).ready(function() {
$("#uid").on("change",function(){
var rr=document.getElementById("uid").value;
  $.ajax(
    {
        url : "f_admin.php?id="+rr,
        type: "GET",
        success:function(data, textStatus, jqXHR) 
        {
            //data: return data from server
	var aa1=$.parseJSON(data);
	$("#role").val(aa1.roles);
     
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {
            //if fails      
		alert("fail");
        }
    });
});
});
</script>
<div id="submenu">
<div class="aa"><a href="addadmin.php" class="pfun">Addnew admin</a></div>

<div class="aa"><a href="admins.php" class="pfun">View admin</a></div>
</div>	

<div id="content1">
<?php if(isset($_SESSION["message"])){ echo $_SESSION["message"];} ?>
<div class="user_login">
			<form name="login" action="makeadmin.php" method="post" name="login">
				Select the product <select name="uid"  id="uid">
<option>Select</option>
<?php 
$select_path="SELECT user_id FROM users";
$var=mysql_query($select_path);
$inc=0;
while($row=mysql_fetch_array($var))
{
    echo "<option value=".$row["user_id"].">".$row["user_id"]."</option>";
}
?>
</select>

					<br />
					<label>Current role</label>
                                        <input type="text"  id="role" disabled="disabled" />
					<br />
					Select the role for user:
                                        <select name="roles"><option value="1">Normal user</option><option value="2">Normal Admin</option>
                                            <option value="3">Super Admin</option>
                                        </select><br>
                                        Normal admin can edit product,addproduct,approve order<br>
                                        Super admin can do all the things.


					<div class="action_btns">
		
						<div class="one_half"><input type="submit" name="makeadmin" class="btn btn_red" value="Change role"></div>
						
					
					</div>
				</form>

				
			</div>

</div>
</html>
