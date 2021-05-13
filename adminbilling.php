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



echo "<br>ALL TICKETS";
$sql="SELECT * FROM ticket";
$result = $conn->query($sql);
if ($result === false) { die(mysqli_error($conn)); } 
  

if($result->num_rows > 0)
{   
    // output data of each row
		
echo "<table border='1' class='admintable'>";
echo "<tr (><th>Transaction ID</th><th>User ID</th><th>Date</th><th>Phone no.</th><th>No. of adults</th><th>No. of children</th><th>No. of senior</th><th>Total cost</th><th>Offer code</th><th>Offer Percentage</th><th>Total Payable Cost</th><th>Status</th><th>Print</th></tr>";
while($row = $result->fetch_assoc())  {
	$status=$row['status'];
	if($status==0)
	{	$status="Not Visited";
		$color="background-color:red";
		
	}
	else
	{	$status="Visited";
		$color="background-color:white"; 
	}
    echo "<tr style=\"".$color."\"><td>" . $row['trans_id'] . "</td><td>" . $row['userid'] . "</td><td>" . $row['date'] . "</td><td>" . $row['phone'] . "</td><td>" . $row['noofadult'] . "</td><td>" . $row['noofchild'] . "</td><td>" . $row['noofsenior'] . "</td><td>" . $row['totalcost'] . "</td><td>" . $row['offer_code'] . "</td><td>" . $row['dboffer_percentage'] . "</td><td>" . $row['totalpayablecost'] . "</td><td>" . $status . "</td>";
	echo "<td>";
	echo '<form method="post" action="ticketing/specificbill.php?action=printbill">';
	echo "<input class='button' type='submit' value='  Print Bill '>"; ?>
	<input  type="hidden" name="transid" value='<?php print $row['trans_id']?>'>
	<input  type="hidden" name="wpid" value='<?php print  $user_id?>'>
	<input  type="hidden" name="adminmode" value='<?php print  'true'?>'>
	<?php
	echo "</form>";
	echo "</td></tr>";
}

}
echo "</table>";
mysqli_close($conn);
?>

</body>
</html>
