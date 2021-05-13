
<?php
session_start();

include_once 'config.php';
require('topnav.php');
require('nav.php');
?>

<html>
<body>



<head>
<style>

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    width = automatic;
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
}

@font-face {
   font-family: myFirstFont;
   src: url(sansation_light.woff);
}

.headingfont {
   font-family: myFirstFont;
   
}

</style>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>

<?php
$_POST['noa'] = !isset($_POST['noa']) ? $_POST['noa']=0 : $_POST['noa'];
$_POST['noc'] = !isset($_POST['noc']) ? $_POST['noc']=0 : $_POST['noc'];
$_POST['nos'] = !isset($_POST['nos']) ? $_POST['nos']=0 : $_POST['nos'];
$_POST['dov'] = !isset($_POST['dov']) ? $_POST['dov']='' : $_POST['dov'];
?>
<!--
Welcome <?php echo $_POST["dov"]; ?><br>
Your email address is: <?php echo $_POST["noa"]; ?>
<br>
Your email address is: <?php echo $_POST["noc"]; ?>
<BR>
<br>
Your email address is: <?php echo $_POST["nos"]; ?>
<BR>

-->

<form class="container" action="" method="post">

<?php /*<div class="headingfont">
<center><h1><img src="pics/logo.webp" height="30" width="30" >&nbsp K. K. Resort </h1></center>
</div>
 */ ?>

<?php


 $min_Date=0;  //this disables the previous dates
      $max_Date=60;   //this disables the after 60 days dates
date_default_timezone_set("Asia/Kolkata");
$current_time=date("G:i:s");

$allowed_time="10:00:00";


if($current_time > $allowed_time)
{ $min_Date=1;
}
else
{ $min_Date=0;
}

echo $current_time;
 ?>
&nbsp&nbsp

Date: <input type="text" class="simple_date" name="dov" value="<?php echo $_POST["dov"]; ?>">
<script>
  $( function() {
    $( ".simple_date" ).datepicker({ minDate: <?php echo "$min_Date" ?>, maxDate: <?php echo "$max_Date" ?> });
     
  } );
  </script>
&nbsp

<?php /*<div class="headingfont">
<u><center><b>VISITOR COUNT</b></center></u>
</div> */ ?>

<b>Count:</b>  &nbsp&nbsp&nbsp
Adult : &nbsp <select name="noa" id="noa">
    <option value="00"selected>00</option>
    <option value="01"<?php if( $_POST["noa"]==01) echo "selected"; ?>>01</option>	
    <option value="02"<?php if( $_POST["noa"]==02) echo "selected"; ?>>02</option>
    <option value="03"<?php if( $_POST["noa"]==03) echo "selected"; ?>>03</option>
    <option value="04"<?php if( $_POST["noa"]==04) echo "selected"; ?>>04</option>
    <option value="05"<?php if( $_POST["noa"]==05) echo "selected"; ?>>05</option>
    <option value="06"<?php if( $_POST["noa"]==06) echo "selected"; ?>>06</option>
    <option value="07"<?php if( $_POST["noa"]==07) echo "selected"; ?>>07</option>
    <option value="8"<?php if( $_POST["noa"]==8) echo "selected"; ?>>08</option>
    <option value="9"<?php if( $_POST["noa"]==9) echo "selected"; ?>>09</option>
    <option value="10"<?php if( $_POST["noa"]==10) echo "selected"; ?>>10</option>
    </select>




&nbsp


Children : <select name="noc" id="noc">
        <option value="00"selected>00</option>
    <option value="01"<?php if( $_POST["noc"]==01) echo "selected"; ?>>01</option>	
    <option value="02"<?php if( $_POST["noc"]==02) echo "selected"; ?>>02</option>
    <option value="03"<?php if( $_POST["noc"]==03) echo "selected"; ?>>03</option>
    <option value="04"<?php if( $_POST["noc"]==04) echo "selected"; ?>>04</option>
    <option value="05"<?php if( $_POST["noc"]==05) echo "selected"; ?>>05</option>
    <option value="06"<?php if( $_POST["noc"]==06) echo "selected"; ?>>06</option>
     <option value="07"<?php if( $_POST["noc"]==07) echo "selected"; ?>>07</option>
     <option value="8"<?php if( $_POST["noc"]==8) echo "selected"; ?>>08</option>
    <option value="9"<?php if( $_POST["noc"]==9) echo "selected"; ?>>09</option>
    <option value="10"<?php if( $_POST["noc"]==10) echo "selected"; ?>>10</option>

  </select>&nbsp

Sr. Citizen: <select name="nos" id="nos">
       <option value="00"selected>00</option>
    <option value="01"<?php if( $_POST["nos"]==01) echo "selected"; ?>>01</option>	
    <option value="02"<?php if( $_POST["nos"]==02) echo "selected"; ?>>02</option>
    <option value="03"<?php if( $_POST["nos"]==03) echo "selected"; ?>>03</option>
    <option value="04"<?php if( $_POST["nos"]==04) echo "selected"; ?>>04</option>
    <option value="05"<?php if( $_POST["nos"]==05) echo "selected"; ?>>05</option>
    <option value="06"<?php if( $_POST["nos"]==06) echo "selected"; ?>>06</option>
    <option value="07"<?php if( $_POST["nos"]==07) echo "selected"; ?>>07</option>
    <option value="8"<?php if( $_POST["nos"]==8) echo "selected"; ?>>08</option>
    <option value="9"<?php if( $_POST["nos"]==9) echo "selected"; ?>>09</option>
    <option value="10"<?php if( $_POST["nos"]==10) echo "selected"; ?>>10</option>
   
 </select>
&nbsp&nbsp&nbsp&nbsp
<button type="submit" class="button button1" value="Submit">Submit</button>
</form>

<?php



// he db madhun informatn anta
$sql="SELECT * FROM basic WHERE attribute= 'cost_per_ticket'";
//echo $sql."<br>";

$result = $conn->query($sql);
if ($result === false) { die(mysqli_error($conn)); } 
  
 
if($result->num_rows > 0)
{   
    // output data of each row
		while($row = $result->fetch_assoc()) 
		{	
			
			// $row[..] che variable while loop chya baher value=NULL houn jatat mhanun tyana dusre variable assign kele
		    $dbadultcost=$row["adult"];
			$dbchildcost=$row["child"];
			$dbseniorcost=$row["senior"];
	
			
			
			 
			
		}
}
?>

<?php
$noofadult=$_POST["noa"];
//echo "1a" .$noofadult;
$noofchild=$_POST["noc"];
//echo "2b" .$noofchild;
$noofsenior=$_POST["nos"];
//echo "3b".$noofsenior;
$totalcost=0;
?>
<form class="container secondcontainer" action="<?php if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) { echo 'summary_ticket.php'; } else{      echo '../login.php';}?>" onsubmit="setTheSessionVariable()" method="post">

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

			
			<?php //calculate total cost of adult ticket
			 $totaladultcost=$noofadult*$dbadultcost;
			$totalcost=$totalcost+$totaladultcost;?>
			
			
			<td>₹ <?php echo $totaladultcost; ?></td>
		</tr>

		<tr>
			<td>CHILD</td>	
			<td><?php echo $noofchild;?></td>
			<td>₹  <?php echo $dbchildcost;?></td>
			
			
			<?php //calculate total cost of child ticket
			 $totalchildcost=$noofchild*$dbchildcost; 
			 $totalcost=$totalcost+$totalchildcost;?>
			 
			 
			<td>₹ <?php echo $totalchildcost; ?> </td>
		</tr>

		<tr>
			<td>SENIOR CITIZEN</td>
			<td><?php echo $noofsenior; ?></td>   
			<td>₹ <?php echo $dbseniorcost;?></td> 
			
			
			<?php //calculate total cost of senior ticket
			 $totalseniorcost=$noofsenior*$dbseniorcost;
			$totalcost=$totalcost+$totalseniorcost;?>
			 
			 

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
			</td>
		</tr>
		
		<tr>
			<td align:center>
				<button type="submit" class="button button1" value="Submit">Submit</button>
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
</form>

<script>
function setTheSessionVariable(){

<?php 
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) 
{
   echo 'alert("Select the promo-code for getting exciting offers")';
}
else
{
echo 'alert("Now Login with your credentials & then Select the promo-code for getting exciting offers")';
}

?>	


<?php  

$_SESSION["noofadult"]=$noofadult;
$_SESSION["dov"]=$_POST["dov"];
		$_SESSION["noofchild"]=$noofchild;
		$_SESSION["noofsenior"]=$noofsenior;
		
		
		$_SESSION["dbadultcost"]=$dbadultcost;
		$_SESSION["dbchildcost"]=$dbchildcost;
		$_SESSION["dbseniorcost"]=$dbseniorcost;
		
		
		$_SESSION["totaladultcost"]=$totaladultcost;
		$_SESSION["totalchildcost"]=$totalchildcost;
		$_SESSION["totalseniorcost"]=$totalseniorcost;
		

		
		$_SESSION["totalcost"]=$totalcost;
		
		?>

}
</script>




</body>
</html>