<?php session_start(); ?>
<html>
<body>

<style>
.admintable {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
<?php
include("topnav.php");
include("adminnav.php");
include("ticketing/config.php");


//modifying the visiting ststus code
{

$action = isset($_GET['action'])?$_GET['action']:"";
  
  if($action=='statchange' && $_SERVER['REQUEST_METHOD']=='POST')
  {$_SESSION['transactionid'] = $_POST['transid'];
//here the products of session is same as itemid
	}

	$a3=isset($_SESSION['transactionid']) ? $_SESSION['transactionid'] : '';


$sql="UPDATE ticket SET status = 1 WHERE ticket . trans_id  =".$a3;


if(($a3!='0') && ($a3!=''))
{ 
if ($conn->query($sql) === TRUE) {
    echo '<script language="javascript">';
	echo 'alert("This Visiting status of the order is changed ")';
	echo '</script>';
	
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

}
//visiting status change code end


//TODAYS DATE 
date_default_timezone_set("Asia/Kolkata");
$current_date=date("m/d/Y");
echo $current_date;




echo "<br>ALL TICKETS";
$sql="SELECT * FROM ticket where date = '$current_date' ";
//echo $sql;
$result = $conn->query($sql);
if ($result === false) { die(mysqli_error($conn)); } 
  

if($result->num_rows > 0)
{   
    // output data of each row

echo "<table border='1' class='admintable'>";
echo "<tr (><th>Transaction ID</th><th>Name</th><th>User ID</th><th>Date</th><th>Phone no.</th><th>No. of adults</th><th>No. of children</th><th>No. of senior</th><th>Total cost</th><th>Offer code</th><th>Offer Percentage</th><th>Total Payable Cost</th><th>Status</th></tr>";

while($row = $result->fetch_assoc())  
{
	
	$tid=$row['trans_id'];
	$status=$row['status'];
	if($status==0)
	{	$status="Not Visited";
		$color="background-color:red";
		
	}
	else
	{	$status="Visited";
		$color="background-color:white"; 
	}
    echo "<tr style=\"".$color."\"><td>" . $row['trans_id'] . "</td><td>" . $row['firstname'] . "</td><td>" . $row['userid'] . "</td><td>" . $row['date'] . "</td><td>" . $row['phone'] . "</td><td>" . $row['noofadult'] . "</td><td>" . $row['noofchild'] . "</td><td>" . $row['noofsenior'] . "</td><td>" . $row['totalcost'] . "</td><td>" . $row['offer_code'] . "</td><td>" . $row['dboffer_percentage'] . "</td><td>" . $row['totalpayablecost'] . "</td>";
	
	echo "<td>";
	echo '<form method="post" action="adminbillingtoday.php?action=statchange">';
	echo "<input class='button' type='submit' value='  Guest Entered '>"; ?>
	<input  type="hidden" name="transid" value='<?php print $row['trans_id']?>'>
	<?php
	echo "</form>";
	echo "</td>";
	echo "</tr>";
	
  /*	$sql="UPDATE ticket SET status = 0 WHERE ticket . trans_id  = ". $row['trans_id'];
	echo "<script>function visitKela(){ ";
	
	echo $sql; 
	$conn->query($sql); 
	echo "} </script>";  */
	
}

}
else{
	echo "<center><h1>There are no bookings for today</h1></center>";
}
echo "</table>";
mysqli_close($conn);
?>

</body>
</html>