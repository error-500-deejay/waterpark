
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
html, body {
    font-family: Verdana,sans-serif;
    font-size: 15px;
    line-height: 1.5;
}
</style>
</head>
<body>


<ul class="navul">
  
 <li><a class="active navli nav-" href="homepage.php">Homepage</a></li>
  <li><a class="navli nav-adminbilling" href="adminbilling.php">Total Bills</a></li>
  
  <li><a class="navli nav-adminbillingmod" href="adminbillingmod.php">Entry of User</a></li>
<li><a class="navli nav-adminbillingtoday" href="adminbillingtoday.php">Todays Entries</a></li>
<li><a class="navli nav-homepage" href="homepage.php">Log Out</a></li>
<img src="pics/logo.webp" height="30" width="30" >

</ul>
<script>
document.querySelectorAll('.navli')[0].classList.remove('active')

let  currentpage1=location.href.split('/').pop().split('.')[0];

document.querySelectorAll(`.nav-${currentpage1}`)[0].classList.add('active')
</script>
</body>
</html>
