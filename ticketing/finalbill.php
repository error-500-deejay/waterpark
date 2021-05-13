<?php session_start();

include_once 'config.php';
require('topnav.php');
require('nav.php');



/*
        $noofadult=$_SESSION["noofadult"];
		$noofchild=$_SESSION["noofchild"];
		$noofsenior=$_SESSION["noofsenior"];
		
		
		$dbadultcost=$_SESSION["dbadultcost"];
		$dbchildcost=$_SESSION["dbchildcost"];
		$dbseniorcost=$_SESSION["dbseniorcost"];
		
		
		$totaladultcost=$_SESSION["totaladultcost"];
		$totalchildcost=$_SESSION["totalchildcost"];
		$totalseniorcost=$_SESSION["totalseniorcost"];
		

		
		$totalcost=$_SESSION["totalcost"];
					 
			 		*/
					
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
      left: 250px;

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

<?php

$firstname=$_SESSION["firstname"];
//echo $firstname;

$user_id=$_SESSION["user_id"];
//echo $user_id;

$address=$_SESSION["address"]; 
//echo $address;

$city=$_SESSION["city"]; 
//echo $city;

$pincode=$_SESSION["pincode"]; 
//echo $pincode;

$phone=$_SESSION["phone"]; 
//echo $phone;

$dbadultcost=$_SESSION["dbadultcost"];
//echo $dbadultcost;


$noofadult=$_SESSION["noofadult"]; 
//echo $noofadult;

$totaladultcost=$_SESSION["totaladultcost"];
//echo $totaladultcost;


$noofchild=$_SESSION["noofchild"];
//echo $noofchild;

$dbchildcost=$_SESSION["dbchildcost"]; 
//echo $dbchildcost;

$totalchildcost=$_SESSION["totalchildcost"];
//echo $totalchildcost;


$noofsenior=$_SESSION["noofsenior"]; 
//echo $noofsenior;

$dbseniorcost=$_SESSION["dbseniorcost"]; 
//echo $dbseniorcost;

$totalseniorcost=$_SESSION["totalseniorcost"]; 
//echo $totalseniorcost;


$totalcost=$_SESSION["totalcost"]; 
//echo $totalcost;

$dateofvisit=$_SESSION["dov"];

if(isset($_SESSION['offer_id']) && !empty($_SESSION['offer_id']))
{
	//echo"nahikiyarebhaiset";
	$offer_id=($_SESSION["offer_id"]);
	//echo $offer_id;

	$offer_name=($_SESSION["offer_name"]); 
	//echo $offer_name;

	$offer_code=($_SESSION["offer_code"]);
	//echo $offer_code;

	
	$dboffer_percentage=$_SESSION["offer_percentage"];
	//echo $dboffer_percentage;
}

else
{  
	$offer_id="NA";
	$offer_name="NA";
	$offer_code="NA";
	$dboffer_percentage=0; 
	//echo"heynahihei";
	
	

}


$totalpayablecost=($_SESSION["totalpayablecost"]); 
//echo $totalpayablecost;



/*
$sql= "INSERT INTO `ticket` (`firstname`, `userid`, `address`, `city`, `pincode`, `phone`, `noofadult`, `dbadultcost`, `totaladultcost`, `noofchild`, `dbchildcost`, `totalchildcost`, `noofsenior`, `dbseniorcost`, `totalseniorcost`, `totalcost`, `offer_id`, `offer_name`, `offer_code`,`dboffer_percentage`,`totalpayablecost`) VALUES ('$firstname','$user_id', '$address', '$city','$pincode','$phone', '$noofadult', '$dbadultcost', '$totaladultcost', '$noofchild', '$dbchildcost', '$totalchildcost', '$noofsenior', '$dbseniorcost', '$totalseniorcost', '$totalcost',0, 'NA', 'NA', '0', '$totalpayablecost')";
*/				


//enter the booking details in the db table named ticket

$sql= "INSERT INTO `ticket` (`firstname`, `userid`, `address`, `city`, `pincode`, `phone`, `noofadult`, `dbadultcost`, `totaladultcost`, `noofchild`, `dbchildcost`, `totalchildcost`, `noofsenior`, `dbseniorcost`, `totalseniorcost`, `totalcost`, `offer_id`, `offer_name`, `offer_code`,`dboffer_percentage`,`date`,`totalpayablecost`) VALUES ('$firstname','$user_id', '$address', '$city','$pincode','$phone', '$noofadult', '$dbadultcost', '$totaladultcost', '$noofchild', '$dbchildcost', '$totalchildcost', '$noofsenior', '$dbseniorcost', '$totalseniorcost', '$totalcost', '$offer_id', '$offer_name', '$offer_code', '$dboffer_percentage','$dateofvisit','$totalpayablecost')";
				


if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


<form class="container">

<h3><center>K. K. Resort .</center></h3><img src="../pics/logo.webp" alt="K. K. RESORT " width="100" height = "100" align="right" >
<table align="center">

<tr>
	<th>
		Booking Date:
	</th>
	<td>
	</td>
	<td>
	</td>
	<td>
		<?php echo ' '.$_SESSION["dov"];
		?>
	</td>
</tr>

<tr>
	<th>
		Customer Name:
	</th>
	<td>
	</td>
	<td>
	</td>
	<td>
		<?php echo ' '.$_SESSION["firstname"].' '.$_SESSION["lastname"];
		?>
	</td>
</tr>

<tr>
	<th>
		UserName:
	
	</th>
	<td>
	</td>
	<td>
	</td>
	<td>
	<?php echo ' '.$_SESSION["user_id"]; ?>
	
	</td>
</tr>
<tr>
	<th>
		Address :
	</th>
	<td>
	</td>
	<td>
	</td>
	<td>
			<?php echo ' '.$_SESSION["address"]; ?>
	</td>
</tr>

<tr>
	<th>
		City :
	</th>
	<td>
	</td>
	<td>
	</td>
	<td>
			<?php echo ' '.$_SESSION["city"]; ?>

	</td>
</tr>

<tr>
	<th>
		Pincode:	
	</th>
	<td>
	</td>
	<td>
	</td>
	<td>
		<?php echo ' '.$_SESSION["pincode"]; ?>

	</td>
</tr>

<tr>
	<th>
		Phone :
	</th>
	<td>
	</td>
	<td>
	</td>
	<td>
		<?php echo ' '.$_SESSION["phone"]; ?>

	</td>
</tr>


<br>
<br>
<br>
		<tr>
	<th>
		Adult Cost
	</th>
	<td>
		<?php echo ' '.$_SESSION["noofadult"]; ?>
	</td>
	<td> <b>&nbsp&nbsp*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b>
		<?php echo '  '.$_SESSION["dbadultcost"]; ?>
	</td>
	<th>&nbsp&nbsp=&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<?php echo '     '.$_SESSION["totaladultcost"]; ?>
	</th>
</tr>

<tr>
	<th>
		Child Cost
	</th>
	<td>
		<?php echo ' '.$_SESSION["noofchild"]; ?>
	</td>
	<td> <b>&nbsp&nbsp*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b>
		<?php echo '  '.$_SESSION["dbchildcost"]; ?>
	</td>
	<th>&nbsp&nbsp=&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<?php echo '     '.$_SESSION["totalchildcost"]; ?>
	</th>
</tr>


<tr>
	<th>
		Senior Citizen Cost
	</th>
	
	<td>
		<?php echo ' '.$_SESSION["noofsenior"]; ?>
	</td>
	<td> <b>&nbsp&nbsp*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b>
		<?php echo '  '.$_SESSION["dbseniorcost"]; ?>
	</td>
	<th>&nbsp&nbsp=&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<?php echo '     '.$_SESSION["totalseniorcost"]; ?>
	</th>
	
</tr>

<tr>
	
	___________________________________________________________
	
</tr>

<tr>
	<th>
		Total Cost
	</th>

	
	<td>
		<?php echo "  ".($_SESSION["noofsenior"]+$_SESSION["noofadult"]+$_SESSION["noofchild"])." "; ?>
	</td>
	<td> 
		<?php echo "   *    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".($_SESSION["totaladultcost"]+$_SESSION["totalchildcost"]+$_SESSION["totalseniorcost"])." "; ?>
	</td>
	<th>&nbsp&nbsp=&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<?php echo '     '.$_SESSION["totalcost"]; ?>
	</th>
	
</tr>



<tr>
	<th>
		Promo-Code :
	</th>

	
	<td>
		<?php echo "  ".($_SESSION["offer_id"]); ?>
	</td>
	<td> 
		<?php echo "  ".($_SESSION["offer_name"]); ?>

	</td>
	<th><?php echo" ".($_SESSION["offer_code"]); ?>
	</th>
	
</tr>

<tr>
	<th>Total 	Payable	   Amount </th>
	<th>
	
	</th>
	<th>
	
	</th>
	<td><h2> <?php echo" ₹ ".($_SESSION["totalpayablecost"]); ?></h2></td>

</tr>
</table>

<button align="right" class="button button1" onclick="myPrint()">Print Bill</button>

<a href="../userhomepage.php">RETURN TO HOMEPAGE</A>
		
</form>

<script>
function myPrint()
{
	window.print();
}
</script>

</body>
<html>




