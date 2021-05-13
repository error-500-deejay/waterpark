<?php include ("topnav.php");
	include("nav.php");
?>
<html>
<head>
<title>
Login
</title>
<style>
.textb {
	
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
	
.insmallhidebutton {
	
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
.putinsmall{font-size: 0px;}

.inbighidebutton {padding: 10px 10px;}
.inbighidebutton {font-size: 10px;}
fieldset{
	padding: 50px 100px;
}

@media  screen and (max-width: 600px) {
	.smallscreen{font-size: 11px;}
	fieldset{padding: 5px 5px;}
	.textb {width: 80%;}
		.texta {width: 60%;}
		
		.insmallhidebutton {padding: 0px 0px;}
		.insmallhidebutton {font-size: 0px;} 
		.button {padding: 5px 5px;}
		.button {font-size: 12px;} 
		.removeinsmall{font-size: 0px;}
		.putinsmall{font-size: 10px;
		
			}
}
</style>
</head>
<body>
<?php $currentPage="login" ?>

<?php //require "slider.php"; ?>
<?php //require "navigation.php"; ?>
<br>
<br>
<br>
<br>
<div class ="smallscreen">
<form  method= "post" action="adminhomepage.php" > 
  <fieldset>
    <legend><h2>LOGIN</h2></legend>
	
    User Id:<br>
    <input class="textb" type="text" id="userid" name="userid" value="admin"><div class="removeinsmall">
    Password:<br>
    <input class="textb"  id="spassword" name="spassword" value="password">

	
	<h5>(The Password should be min= 6 & max= 12 <br> characters and no special character allowed.)</h5>
    <br><br>
    <input class="button" type="submit" value="        Login        ">
	<br>
	</div>
	<!-- <div class="putinsmall"><center>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp New here ! Hurry up . Be a part of our wonder foodiee family . 
	&nbsp&nbsp <a href="signup.php" class="inbighidebutton">&nbsp&nbsp&nbsp&nbsp&nbsp Sign-up &nbsp&nbsp&nbsp&nbsp&nbsp</a><br>
	
	&nbsp&nbsp&nbsp&nbsp&nbsp Oh gosh ! Did you forget your passkey ? Dont worry Click here. 
	&nbsp&nbsp<a href="forgotpass.php" class="inbighidebutton">Forgot Password</a>
	</center>
	</div> -->
	
	<br>
	
	
  </fieldset>
</form>


</body>
</html>
