<!doctype html>
<?php 
session_start();

include 'header.php';
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Indo-Tourism</title>
	  <link rel="stylesheet" href="css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script>$(document).ready(function(){$("#dob").datepicker({maxDate: new Date, dateFormat: "yy-mm-dd", changeMonth: true,
        changeYear: true, }).val();});</script>
<style>
#space{
width: 681px;
}
#form{
width:400px;
margin-left:300px;

}
input {
margin-left:20px;
}
</style>
</head>
<body>
<!--Header starts-->

<!--Header Ends-->
<!--content space-->
<div id="form">
<h1>Edit profile</h1>
<form method="post" action="update.php" name="register">
<label for="fname">Full name</label><input type="text" name="fname" minlength="2" maxlength="50" value="<?php echo $_SESSION['name'] ?>" required/><br /><br />
<label for="email">Email address</label>	<input type="email" name="email" value="<?php echo $_SESSION['mailid'] ?>" required /><br/><br />
<label>Date of birth</label>					<input type="date" name="dob" id="dob" value="<?php echo $_SESSION['dob'] ?>" required><br><br /><br />

<label>Phone number</label><input type="number" name="phone" value="<?php echo $_SESSION['phone'] ?>" required><br><br />
<label> ADDRESS </label><textarea name="address"><?php echo $_SESSION['address'] ?></textarea><br><br />
<label>City</label><input type="text" name="city" value="<?php echo $_SESSION['city'] ?>"><br><br />
<label>state</label><input type="text" name="state" value="<?php echo $_SESSION['state'] ?>"><br><br />
<label>Country</label><input type="text" name="country" value="<?php echo $_SESSION['country'] ?>"><div id="pwderr"></div>
<input type="submit" name="update" value="update">
</form>
</div>
<!--content space-->
</body>
</html>

