
<?php session_start();

include_once 'ticketing/config.php';
require('topnav.php');
require('nav.php');
?>

<html>
<head>
<style>
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    height: automatic;
    box-shadow: 10px 10px 5px grey;
    opacity: 0.6;
    
}

.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 8px 22px;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}

form {
      position:absolute;
      
      display:inline-block;
      z-index:10;
      top: 200px;
      left: 50px;

      }
	  
.secondcontainer {
	
      display:inline-block;
      z-index:10;
      top: 400px;
      left: 50px;
	  align: right;
}

@font-face {
   font-family: myFirstFont;
   src: url(sansation_light.woff);
}

.headingfont {
   font-family: myFirstFont;
   
}

</style>
</head>
<body>


<form class="container" action="connectlogout.php" >
<table cellpadding="20" cellspacing="20">
<tr>
<th><h1>
<a href="homepage.php" target="_blank" >Book Ticket</a></h1>
</th>
<th><h1>
<a href="ticketing/myticket.php">My tickets</a></h1>
</th>

<th>
<button class=" button button1" value="logout" id="logout" >Logout</button>
</th>
</tr>
</table>
</form>

<script>
</body>
</html>