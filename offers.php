<!DOCTYPE html>
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
<?php $total_offers="0" ;?>

<?php
/*
if($total_offers==0)
 {$offer0="Shits,No Offer today!! Try your luck at the ticket counter.You may find some exciting offers.";}

if($total_offers>=1) {$offer1="HALL&nbspTICKET";} else {$offer1="";} 


 if($total_offers>=2) { $offer2="Tuesday";} else {$offer2="";}
 if($total_offers>=3) {$offer3="wednesday";} else {$offer3="";}
 if($total_offers>=4) {$offer4="wednesday1";} else {$offer4="";} 
 if($total_offers>=5) {$offer5="wednesday2"; }else {$offer5="";}
 if($total_offers>=6) {$offer6="wednesday3";} else {$offer6="";}
 if($total_offers>=7) {$offer7="wednesday4";} else {$offer7="";}
 if($total_offers>=8) {$offer8="wednesday5";} else {$offer8="";}
 if($total_offers>=9) {$offer9="wednesday6";} else {$offer9="";}
 if($total_offers>=10){$offer10="wednesday7";} else {$offer10="";}
*/
?>
<div class="dropdown">
  <button class="dropbtn">Offers<img src="pics/offers_logo.png" width="40" height="40"></button>
  <div class="dropdown-content">  
   <?php
  include('config.php');
  $i=0;
  $sqla="SELECT * from offers";
  $result =$conn->query($sqla);
  if($result===TRUE){
	if($result->num_rows > 0){
	while($row = $result->fetch_assoc())
	{
		$a[$i++]=$row['offer_name'];
		echo $a[i];
		}
   }
else
{echo "Try your luck at the ticket counter.You may find some exciting offers.";}
  }
$conn->close();

   ?>
    <a href="offers_content.php"><?php echo $offer0; ?></a>
    <a href="offers_content.php"><?php echo $offer1; ?></a>
    <a href="offers_content.php"><?php echo $offer2; ?></a>
    <a href="offers_content.php"><?php echo $offer3; ?></a> 
    <a href="offers_content.php"><?php echo $offer4; ?></a>
    <a href="offers_content.php"><?php echo $offer5; ?></a> 
    <a href="offers_content.php"><?php echo $offer6; ?></a>
    <a href="offers_content.php"><?php echo $offer7; ?></a> 
    <a href="offers_content.php"><?php echo $offer8; ?></a>
    <a href="offers_content.php"><?php echo $offer9; ?></a>
    <a href="offers_content.php"><?php echo $offer10; ?></a>
  </div>
</div>

</body>
</html>
