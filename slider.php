<!DOCTYPE html>
<?php include('ticket.php'); ?>

<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
<body>

<div class="w3-content w3-section" style="max-width:1200px; height: 500px">
  <center>
<img class="mySlides" src="pics/slider/s2.jpeg" style="width:100%" alt="&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp IMAGE." height="250">
  <img class="mySlides" src="pics/slider/s3.jpeg" style="width:100%" alt="&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp IMAGE." height="500">
  <img class="mySlides" src="pics/slider/s4.jpg" style="width:100%" alt="&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp IMAGE." height="500">
  <img class="mySlides" src="pics/slider/s7.jpg" style="width:100%" alt="&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp IMAGE." height="500">
 <img class="mySlides" src="pics/slider/s8.jpg" style="width:100%" alt="&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp IMAGE." height="500"></h1></center>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>
