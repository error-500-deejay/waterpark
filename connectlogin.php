<?php
session_start();
include_once 'ticketing/config.php';
?>
<html>
<body>
<style>

.toast {
	position: fixed;
	z-index: 1;
	padding: 10px;
    width: 100%;
    margin: 0px;
	text-align: center;
	font-weight: 500;
	font-size: 1.1em;
	z-index:100;
}
  .text {font-size: 13px}


.toast.error {
	background: #e74c3c;
}  

.toast.success {
	background: #2ecc71;
}
</style>
<?php


$n3=$_POST['userid'];
$n8=$_POST['spassword'];

// he db madhun informatn anta
$sql="SELECT * FROM signup WHERE userid= '$n3'";
//echo $sql."<br>";

$result = $conn->query($sql);
if ($result === false) { die(mysqli_error($conn)); } 
  
 
if($result->num_rows > 0)
{   
    // output data of each row
		while($row = $result->fetch_assoc()) 
		{	
			
			// $row[..] che variable while loop chya baher value=NULL houn jatat mhanun tyana dusre variable assign kele
			$dbuserid=$row["userid"];
			$dbspass=$row["spassword"];
			$dbfirstname=$row["firstname"];
			$dblastname=$row["lastname"];
			$dbaddress=$row["address"];
			$dbcity=$row["city"];
			$dbpincode=$row['pincode'];
			$dbphone=$row['phone'];
			
			
			 
			
		}

		
		// ata db mdhle var $dbuserid mdhe ahe ani form input che $n3 mdhe ... te ithe check karnar ani correct asle tr login denar
		
		 if(($n3==$dbuserid) &&($n8==$dbspass))
			 
		{ 
			
		//	echo "<br><div style='text-align:right'><h3>Welcome&nbsp&nbsp" . $dbfirstname ." ". $dblastname ."&nbsp&nbsp!&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <br></h3> </div>";
		     $_SESSION["firstname"]=$dbfirstname;
			 $_SESSION["lastname"]=$dblastname;
			 $_SESSION["user_id"]=$dbuserid;
			 $_SESSION["address"]=$dbaddress;
			 $_SESSION["city"]=$dbcity;
			 $_SESSION["pincode"]=$dbpincode;
			 $_SESSION["phone"]=$dbphone;
			 //require homepage.php;
			 
			 
            if((isset($_SESSION['dov']) && !empty($_SESSION['dov']))) 
			{ 
			 header('Location:ticketing/summary_ticket.php');
			}
			
			
			else
			{			 header('Location:userhomepage.php');
			
			}

				
		
		}	
		else
			// jar match nhi jhl dba ani form variable tar login credential incorrect display karaycha.
		{	
		echo "<div class='toast error'>";
		echo"<center>Invalid Credential</center><br>";
		echo "</div>";
			require "login.php";
		} 
		
}
else
{ 	echo "<div class='toast error'>";
	echo ("<center>This user does not exist<br></center>"); 
	echo "</div>";

	require "login.php";
}


    






$conn->close();
?>
</body>
</html>

