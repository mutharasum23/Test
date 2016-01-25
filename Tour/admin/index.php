<?php include("header.php");
include("../connection.php");
?>
    <style>
#log{
width:500px;
margin-left:400px;
margin-top:200px;
}
#err{ color: red;}
</style>
<div id="log">	
<h1>Admin login</h1>
	<div class="user_login">
            <div id="err">   <?php                if ($_SESSION["adminm"]) {
                    echo $_SESSION["adminm"];
                }
                ?></div>
				<form name="login" action="login.php" method="post" name="login">
					<label>Email / Username</label>
					<input type="text" name ="uname"/>
					<br />
				
					<label>Password</label>
					<input type="password" name="pwd" />
					<br />

					<div class="checkbox">
						<input id="remember" type="checkbox" name="autologin" />
						<label for="remember">Remember me on this computer</label>
					</div>

					<div class="action_btns">
		
						<div class="one_half"><input type="submit" name="login" class="btn btn_red" value="Let's go"></div>
						<a href="#" class="forgot_password">Forgot password?</a>
					
					</div>
				</form>
username:user1  
password:user1
				
			</div>
 </div>
