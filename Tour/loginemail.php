<html>   
<title>Indo-Tourism</title>
    <link rel="stylesheet" href="css/bjqs.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- load jQuery and the plugin -->
    <script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/bjqs-1.3.min.js"></script>
    <a href='loginemail.php#img1'><img src='images/login.png'></a>"
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script>
var dat;
$(document).ready(function() {
$("#login").on("click",function(){
  
var rr=document.getElementById("username").value;
  $.ajax(
    {
        url : "loginemailexe.php?id="+rr,
        type: "GET",
        success:function(data, textStatus, jqXHR) 
        {
            //data: return data from server
	
	$("#response").text(data);
	
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
    <div id="gallery">
    <div class="lightbox" id="img1">
        <div class="box">

            <a class="close" href="#">X</a>
            <p class="title">Login</p>
            <div class="content">
                <div class="user_login">
                
                   
                        <label>Email / Username</label>
                        <input type="text" name ="uname" id="username"/>
                        <br />

                        <div class="action_btns">

                            <div class="one_half"><input type="submit" name="login"  id="login" class="btn btn_red" value="Let's go"></div>
                     
                        </div>
                        <div id='response'></div>
                   


                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>   
</html>