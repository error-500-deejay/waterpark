<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 9px;
    font-size: 16px;
    border: none;
    border-radius: 15px;
   
}


.dropdown {
    position:absolute;  
    display:inline-block;
    z-index:10; 
   top: 200px;
    left: 950px;
    
}  

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
</head>
<body>
<div class="dropdown">
  <button class="dropbtn">Offers<img src="pics/offers_logo.png" width="40" height="40"></button>
  <div class="dropdown-content">  
  <?php
  include('ticketing/config.php');
  $sql="SELECT offer_name from offers";
  $result =$conn->query($sql);
	if($result->num_rows > 0){
	while($row = $result->fetch_assoc())
	{echo  '<a href="offers_content.php">'.$row['offer_name'].'</a>';}
   }
else
{echo "Try your luck at the ticket counter.You may find some exciting offers.";}

   ?>
  </div>
</div>

</body>
</html>
