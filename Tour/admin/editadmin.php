<?php include("header.php");
include("../connection.php");
if(($_SESSION['role'])!=3)
{
   header("Location:unauth.php");
}
?>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script>
var dat;
$(document).ready(function() {
$("#pid").on("change",function(){
var rr=document.getElementById("pid").value;
  $.ajax(
    {
        url : "f_admin.php?id="+rr,
        type: "GET",
        success:function(data, textStatus, jqXHR) 
        {
            //data: return data from server
	var aa1=$.parseJSON(data);
	$("#uid").val(aa1.user_id);
        $("#name").val(aa1.name);
     
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

<div class="aa"><a href="editadmin.php" class="pfun">Edit admin</a></div>
</div>	

<div id="content1">
<?php if(isset($_SESSION["message"])){ echo $_SESSION["message"];} ?>
<div class="user_login">
			<form name="login" action="revokeadmin.php" method="post" name="login">
				Select the admin <select name="uid1"  id="pid">
<option>Select</option>
<?php 
$select_path="SELECT user_id FROM users WHERE role_no=2";
$var=mysql_query($select_path);
$inc=0;
while($row=mysql_fetch_array($var))
{
    echo "<option value=".$row["user_id"].">".$row["user_id"]."</option>";
}
?>
</select>

					<br />
					<label>USER-ID</label>
					<input type="text" name="userid" id="uid" />
					<br />
                                        <label>Name</label>
                                        <input type="text" name="name" disabled="true" id="name"/>
                                        <br>
					<label>Give admin Password</label>
					<input type="password" name="pwd" />
					<br /> 

					<div class="action_btns">
		
						<div class="one_half"><input type="submit" name="revokeadmin" class="btn btn_red" value="Revoke admin"></div>
                                                <div class="one_half"><input type="submit" name="updateadmin" class="btn btn_red" value="Update admin"></div>
						<a href="#" class="forgot_password">Forgot password?</a>
					
					</div>
				</form>

				
			</div>

</div>
</html>
