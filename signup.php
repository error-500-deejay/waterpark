<html>
<head>
<title>
Signup
</title>
<script>
function validation(){
var x=document.signup.spassword.value;
var y=document.signup.rpassword.value;
var a=document.signup.spassword.value.length;
var b=document.signup.rpassword.value.length;
if(x!=y){
alert("Passwords do not match!");
return false;
}
else if(a<6||a>12||b<6||b>12){
alert("Enter password between 6 and 12 characters!!!");
return false;
}
else{
return true;
}
}
</script>
<style>
body {font-size: 17px;
font-family: sans-serif}
.textb {
	
	 border: "5";
	  padding: 10px 15px;
	  margin: 4px 2px;
	  width : 900px;
	 
	   cursor: pointer;
}
.texta {
	
	 border: "5";
	  padding: 10px 15px;
	  margin: 4px 2px;
	  width : 300px;
	 
	   cursor: pointer;
}
	
.button {
	
    background-color: #0066FF;
    border: none;
    color: white;
    padding: 15px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
fieldset{
	padding: 50px 100px;
}
@media  screen and (max-width: 600px) {
	.smallscreen{font-size: 11px;}
	fieldset{padding: 5px 5px;}
	.textb {width: 80%;}
		.texta {width: 60%;}
		.button {padding: 5px 5px;}
		.button {font-size: 12px;} 
}
</style>
</head>
<body>
<?php $currentPage="signup" ?>

<?php require "nav.php"; ?>
<?php require "topnav.php"; ?>
<br>
<br>
<br>
<br>
<div class="smallscreen">
<form action= "connectsignup.php" method= "post" name="signup"> 
  <fieldset>
    <legend><h2>Sign-Up</h2></legend>

    
    First Name: <input class="textb"  type="text" name="firstname" required><br><br>
	Last Name:  <input class="textb"  type="text" name="lastname"  required> <br><br>
	Email-Id:  &nbsp&nbsp <input class="textb" type="email" name="userid" required> <br><br>
	Address:&nbsp&nbsp&nbsp&nbsp <input class="textb" type="text" name="address" required> <br><br>
	City:  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp    <input class="texta" type="text" name="city" pattern ="[A-Za-z]+" required> <br><br>
	PinCode:  &nbsp&nbsp&nbsp  <input class="texta" type="text" name="pincode" pattern="[0-9]+" required> <br><br>
	Phone:     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <input class="texta" pattern="[0-9]+" minlength ="10" maxlength ="10" type="text" name="phone" required> <br><br>
	Password: &nbsp&nbsp  <input class="textb" minlength="6" pattern ="[A-Za-z0-9]+" type="password"  maxlength="12" name="spassword" id="spassword"  required>
	<h5>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	(The Password should be min= 6 & max= 12 characters and no special character allowed.)</h5>
	Retype Pass:<input class="textb" minlength="6" pattern ="[A-Za-z0-9]+" type="password"  maxlength="12" name="rpassword" id="password_confirm" required><br><br>
	<input  class="button" type="submit" value="Sign-Up" onclick="return validation()">

	</fieldset>
</form>
</div>
</body>
</html>
