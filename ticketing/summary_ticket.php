<?php session_start();
include_once 'config.php';
require('topnav.php');
require('nav.php');
/*if(isset($_SESSION['noofadult']) && !empty($_SESSION['noofadult'])) {
echo $_SESSION['noofadult'];
}

if(isset($_SESSION['noofchild']) && !empty($_SESSION['noofchild'])) {
echo $_SESSION['noofchild'];
}

if(isset($_SESSION['noofsenior']) && !empty($_SESSION['noofsenior'])) {
echo $_SESSION['noofsenior'];
}



if(isset($_SESSION['dbadultcost']) && !empty($_SESSION['dbadultcost'])) {
echo $_SESSION['dbadultcost'];
}

if(isset($_SESSION['dbchildcost']) && !empty($_SESSION['dbchildcost'])) {
echo $_SESSION['dbchildcost'];
}

if(isset($_SESSION['dbseniorcost']) && !empty($_SESSION['dbseniorcost'])) {
echo $_SESSION['dbseniorcost'];
}



if(isset($_SESSION['totaladultcost']) && !empty($_SESSION['totaladultcost'])) {
echo $_SESSION['totaladultcost'];
}

if(isset($_SESSION['totalchildcost']) && !empty($_SESSION['totalchildcost'])) {
echo $_SESSION['totalchildcost'];
}

if(isset($_SESSION['totalseniorcost']) && !empty($_SESSION['totalseniorcost'])) {
echo $_SESSION['totalseniorcost'];
}

if(isset($_SESSION['totalcost']) && !empty($_SESSION['totalcost'])) {
echo $_SESSION['totalcost'];
}


if(isset($_SESSION['totalcost']) && !empty($_SESSION['totalcost'])) {
echo $_SESSION['totalcost'];
}

if(isset($_SESSION['firstname']) && !empty($_SESSION['firstname'])) {
echo $_SESSION['firstname'];
}

if(isset($_SESSION['lastname']) && !empty($_SESSION['lastname'])) {
echo $_SESSION['lastname'];
}

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
echo $_SESSION['user_id'];
}

if(isset($_SESSION['address']) && !empty($_SESSION['address'])) {
echo $_SESSION['address'];
}

if(isset($_SESSION['city']) && !empty($_SESSION['city'])) {
echo $_SESSION['city'];
}

if(isset($_SESSION['pincode']) && !empty($_SESSION['pincode'])) {
echo $_SESSION['pincode'];
}

if(isset($_SESSION['phone']) && !empty($_SESSION['phone'])) {
echo $_SESSION['phone'];
}
*/


//declaring the variables for siplaying their values


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
		
?>


<html>
<body>



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

<form class="container" action=""  method="post">

	<img src="ticketlogo.png" height="80" width="80" align="left" >&nbsp


    <div  style="float: left"> 
		<p>BK - REGULAR</p>
		<p>REGULAR TICKET K. K. RESORT : ONE DAY VISIT TO PARK</p>
	</div>	
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<table  style="float: left">
		<tr>
			<td>Type</td>	<td>Qty</td>	<td>Price/Ticket</td>	<td>Total Price</td>
		</tr>

		<tr>
			<td>ADULT</td>
			<td><?php echo $noofadult; ?></td>	
			<td>₹ <?php echo $dbadultcost;  ?></td>	

			
			
			
			<td>₹ <?php echo $totaladultcost; ?></td>
		</tr>

		<tr>
			<td>CHILD</td>	
			<td><?php echo $noofchild;?></td>
			<td>₹  <?php echo $dbchildcost;?></td>
			
			
			 
			 
			<td>₹ <?php echo $totalchildcost; ?> </td>
		</tr>

		<tr>
			<td>SENIOR CITIZEN</td>
			<td><?php echo $noofsenior; ?></td>   
			<td>₹ <?php echo $dbseniorcost;?></td> 
			
			
			 

			<td>₹ <?php echo $totalseniorcost; ?> </td>
		</tr>
	</table>


	<table  style="float: left">
		<tr>
			<td align:center>
			Total
			</td>
		</tr>

		<tr>
			<td align:center>
				₹ <?php echo $totalcost; ?>
				<?php $totalpayablecost=$totalcost; ?>
			</td>
		</tr>
		

		


	</table>
	<select name="noa" id="noa" hidden>
    <option value="<?php echo $noofadult;?>" selected>.</option>
	
	<select name="noc" id="noc" hidden>
    <option value="<?php echo $noofchild;?>" selected>.</option>
	
	<select name="noc" id="noc" hidden>
    <option value="<?php echo $noofchild;?>" selected>.</option>
	
	<select name="nos" id="nos" hidden>
    <option value="<?php echo $noofsenior; ?>"selected>.</option>
	
	<select name="nos" id="nos" hidden>
    <option value="<?php echo $noofsenior; ?>"selected>.</option>
	
	<br>
	
</form>


<?php $promo=Promo-Code ; ?>
<form class="container secondcontainer" action=""  method="post">
		
        <?php echo $promo; ?>&nbsp <input class="textb" type="text" id="promo" name="promo" >
	
		<a href="../offers_content.php" target="_blank" >To know about all the exicting offer plz click here.</a>
		
        
		<br><button type="submit" class="button button1" value="Submit">Submit</button>
	   
</form>

<?php

if(isset($_POST["promo"]) && !empty($_POST["promo"])) 
{
	$selectedpromocode=$_POST["promo"];



$sql="SELECT * FROM offers WHERE offer_code= '$selectedpromocode'";
//echo $sql."<br>";

$result = $conn->query($sql);
if ($result === false) { die(mysqli_error($conn)); } 
  
 
if($result->num_rows > 0)
{   
    // output data of each row
		while($row = $result->fetch_assoc()) 
		{	
			
			// $row[..] che variable while loop chya baher value=NULL houn jatat mhanun tyana dusre variable assign kele
			
			$dboffer_code=$row["offer_code"];
			$_SESSION["offer_code"]=$dboffer_code;
			//echo $dboffer_code; 
			
			$dboffer_id=$row["offer_id"];
		    $_SESSION["offer_id"]=$dboffer_id;
			//echo "1".$dboffer_id;
			
			
			$dboffer_percentage=$row["offer_percentage"];
			$_SESSION["offer_percentage"]=$dboffer_percentage;
			//echo $dboffer_percentage;
			
			$dbmultiple_of_tickets=$row["multiple_of_tickets"];
			$_SESSION["multiple_of_tickets"]=$dbmultiple_of_tickets;
			//echo $dbmultiple_of_tickets;
			
			
			$dbminimum_no_of_tickets=$row["minimum_no_of_tickets"];
			$_SESSION["minimum_no_of_tickets"]=$dbminimum_no_of_tickets;
			//echo $dbminimum_no_of_tickets;
			
			
			$dboffer_name=$row["offer_name"];
			$_SESSION["offer_name"]=$dboffer_name;
			//echo $dboffer_name;
			
			
			$dbmonday=$row["monday"];
			$_SESSION["monday"]=$dbmonday;
			//echo $dbmonday;
			
			
			$dbtuesday=$row["tuesday"];
			$_SESSION["tuesday"]=$dbtuesday;
			//echo $dbtuesday;
			
			
			$dbwednesday=$row["wednesday"];
			$_SESSION["wednesday"]=$dbwednesday;
			//echo $dbwednesday;
			
			
			$dbthursday=$row["thursday"];
			$_SESSION["thursday"]=$dbthursday;
			//echo $dbthursday;
			
			
			$dbfriday=$row["friday"];
			$_SESSION["friday"]=$dbfriday;
			//echo $dbfriday;
			
			
			$dbweekend=$row["weekend"];
			$_SESSION["weekend"]=$dbweekend;
			//echo $dbweekend;
			
			 
			
		}

		
		// ata db mdhle var $dbuserid mdhe ahe ani form input che $n3 mdhe ... te ithe check karnar ani correct asle tr login denar
		
		//this below part changes the total payablecost according to the offer
		if(isset($_POST["promo"]) && !empty($_POST["promo"])) 
		{ 

			if(($noofadult+$noofchild+$noofsenior)>=$dbminimum_no_of_tickets)
			{   
				$totalpayablecost=$totalcost-($totalcost*$dboffer_percentage/100);
				$_SESSION["totalpayablecost"]=$totalpayablecost;
				$promofail="The Promo code". $_SESSION["offer_code"]." is redeemed";
       
			}
			else
			{
			$promofail="The number of ticket selected is less than minimun ticket required--So no Promo-Code applied";
			$totalpayablecost=$totalcost;
			$_SESSION["totalpayablecost"]=$totalpayablecost;
			}
  	    } 
	 
	 
}


else
{ 	echo "<div class='toast error'>";
	echo ("<center>You can use our existing offers...<br></center>"); 
	$totalpayablecost=$totalcost;
	$_SESSION["totalpayablecost"]=$totalpayablecost;
	echo "</div>";

}

}

	

	


?>



<!-- THIS IS THE THIRD FORM SHOWING THE TOTAL COST -->
<form class="container secondcontainer" action="payement.php"  method="post">

<table >
<tr>
	<th>Total Payable Cost : </th>
	<th><?php echo "$totalpayablecost";?></th>
	<?php $_SESSION["totalpayablecost"]=$totalpayablecost; ?>
	
</tr>
<tr>
	<td><?php echo isset($promofail) ? $promofail : '' ; ?></td>
</tr>
</table>
        
		<br><button type="submit" class="button button1" value="Submit">Go to Payement</button>
	   
</form>




</body>
</html>
