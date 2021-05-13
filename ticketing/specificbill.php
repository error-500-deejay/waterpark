<?php session_start();

include_once 'config.php';



					
?>
<html>
<head>
<style>
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 120px;
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
      top: 20px;
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

<?php

//printing the bill code


$action = isset($_GET['action'])?$_GET['action']:"";
  
  if($action=='printbill' && $_SERVER['REQUEST_METHOD']=='POST')
  {$_SESSION['transactionid'] = $_POST['transid'];
  

	$a3=$_SESSION['transactionid'];
	$a4=isset($_SESSION['user_id'])? $_SESSION['user_id'] : '';


$sql="SELECT * FROM ticket WHERE trans_id =".$a3;
//$sql = "SELECT * FROM `ticket` WHERE `trans_id`=51";


  

$result = $conn->query($sql);
if ($result === false) { 
echo "wronghe";
die(mysqli_error($conn)); } 

if(($a3!='0') && ($a3!=''))
{ 


if($result === false) {
    echo "Error: bhai ye wrongva hei " . $sql . "<br>" . $conn->error;
}
else {
	if(!isset($_POST['adminmode']))
{
    echo '<script language="javascript">';
	echo 'alert("Your bill is being generated")';
	echo '</script>';
	
}
	
	if($result->num_rows > 0)
	{while($row = $result->fetch_assoc())  
{
	?>
	
	
	
<form class="container">

<h3><center>K. K. Resort.</center></h3><img src="../pics/logo.webp" alt="K. K. RESORT " width="100" height = "100" align="right" >
<table align="center" >

<tr>
	<th>
		Booking Date:
	</th>
	<td>
	</td>
	<td>
	</td>
	<td>
		<?php echo ' '.$row['date'];
		?>
	</td>
</tr>


<tr>
	<th>
		Transaction Id:
	</th>
	<td>
	</td>
	<td>
	</td>
	<td>
		<?php echo ' '.$row['trans_id'];
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
		<?php echo ' '.$row["firstname"];
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
	<?php echo ' '.$row["userid"]; ?>
	
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
			<?php echo ' '.$row["address"]; ?>
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
			<?php echo ' '.$row["city"]; ?>

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
		<?php echo ' '.$row["pincode"]; ?>

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
		<?php echo ' '.$row["phone"]; ?>

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
		<?php echo ' '.$row["noofadult"]; ?>
	</td>
	<td> <b>&nbsp&nbsp*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b>
		<?php echo '  '.$row["dbadultcost"]; ?>
	</td>
	<th>&nbsp&nbsp=&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<?php echo '     '.$row["totaladultcost"]; ?>
	</th>
</tr>

<tr>
	<th>
		Child Cost
	</th>
	<td>
		<?php echo ' '.$row["noofchild"]; ?>
	</td>
	<td> <b>&nbsp&nbsp*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b>
		<?php echo '  '.$row["dbchildcost"]; ?>
	</td>
	<th>&nbsp&nbsp=&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<?php echo '     '.$row["totalchildcost"]; ?>
	</th>
</tr>


<tr>
	<th>
		Senior Citizen Cost
	</th>
	
	<td>
		<?php echo ' '.$row["noofsenior"]; ?>
	</td>
	<td> <b>&nbsp&nbsp*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b>
		<?php echo '  '.$row["dbseniorcost"]; ?>
	</td>
	<th>&nbsp&nbsp=&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<?php echo '     '.$row["totalseniorcost"]; ?>
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
		<?php echo "  ".($row["noofsenior"]+$row["noofadult"]+$row["noofchild"])." "; ?>
	</td>
	<td> 
		<?php echo "   *    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".($row["totaladultcost"]+$row["totalchildcost"]+$row["totalseniorcost"])." "; ?>
	</td>
	<th>&nbsp&nbsp=&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<?php echo '     '.$row["totalcost"]; ?>
	</th>
	
</tr>



<tr>
	<th>
		Promo-Code :
	</th>

	
	<td>
		<?php echo "  ".($row["offer_id"]); ?>
	</td>
	<td> 
		<?php echo "  ".($row["offer_name"]); ?>

	</td>
	<th><?php echo" ".($row["offer_code"]); ?>
	</th>
	
</tr>

<tr>
	<th>Total 	Payable	   Amount </th>
	<th>
	
	</th>
	<th>
	
	</th>
	<td><h2> <?php echo" ₹ ".($row["totalpayablecost"]); ?></h2></td>

</tr>
</table>

<button align="right" class="button button1" onclick="myPrint()">Print Bill</button>

<?php

if(isset($_POST['adminmode']))
{
echo '<a href="../adminbilling.php">RETURN TO HOMEPAGE</a>';
echo '<script>window.print();</script>';

}
else{
	echo '<a href="../userhomepage.php">RETURN TO HOMEPAGE</a>';
}
?>
		
</form>

<script>
function myPrint()
{
	//javascript:window.print();
window.print();
}
</script>

</body>
<html>




<?php


}
}	
	
} 




}
}

 
 ?>




