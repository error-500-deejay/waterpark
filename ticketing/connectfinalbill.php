<?php
session_start();
include('config.php');

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
   //echo "New record created successfully";
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql="SELECT MAX(trans_id) as trans_id FROM ticket where userid='$user_id'";
//echo $sql;
$result =$conn->query($sql);
if($result->num_rows > 0){
	while($row = $result->fetch_assoc())
	{$_SESSION['tid']=$row['trans_id'];
	 //echo $row['trans_id'];
	 }
	header('Location: finalbill1.php');
}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


?>