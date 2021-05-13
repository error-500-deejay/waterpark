<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
<style>
.navul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color: #f3f3f3;
     position:absolute;
     display:inline-block;
      display:inline-block;
      z-index:10;
      top: 84px;
      left: 133px;
}

li {
    float: left;
    
}

li a {
    display: block;
    color: #666;
    text-align: center;
    padding: 14px 36px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #ddd;
}

li a.active {
    color: white;
    background-color: #4CAF50; 
    
}
</style>
</head>
<body>


<ul class="navul">
  
 <li><a class="active" href="../homepage.php">Homepage</a></li>
  <li><a href="#news">Entry Rates </a></li>
  
  <li><a href="../offers_content.php">Offers</a></li>
<li><a href="#about">About</a></li>
  <li><a href="../contact.php">Contact Us</a></li>
<li><a href="#v">Timing & Directions</a></li>
<img src="../pics/logo.webp" height="30" width="30" >
<?php 
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) 
{
   echo '<a href="../userhomepage.php" target="_blank"> Hii , '.$_SESSION['firstname'].' ! </a>';
   echo '<a href="../connectlogout.php">Logout</a>';
}
else
{
echo '<a href="../signup.php" >Want to signup </a> or have a account then <a href="../login.php"> login here</a>';
}

?>
</ul>

</body>
</html>
