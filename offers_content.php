<?php include('ticketing/config.php'); ?>

<?php include('topnav.php'); ?>
<?php include('nav.php'); ?>
<?php include('subscribebox.html'); ?>



<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
<style>
.offers_contentcontainer {
    border-radius: 40px;
    background-color: #f2f2f2;
    padding: 20px;
    width: 85%;
    height: automatic;
    box-shadow: 10px 10px 10px 5px grey;
    
    
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
</style>
</head>
<body>




<center> 
<?php
$sql="SELECT * FROM offers";

$result = $conn->query($sql);
if ($result === false) { die(mysqli_error($conn)); } 
  
 
if($result->num_rows > 0)
{   
    // output data of each row
		while($row = $result->fetch_assoc()) 
		{	
			
        



                      
                      echo'<form class="offers_contentcontainer" action="ticketing/online_ticket.php">';
    
			// $row[..] che variable


                        
			
		        $offer_var0=$row['offer_image'];
                        echo"<br><img src='". $offer_var0."' alt='img'><br><br>";
			
                       
			        echo"<h3>Offer Code : "; 
								
				$offer_var1=$row['offer_code'];
                        	echo $offer_var1."</h3><br><br>";

			echo"<h1>";
                        $offer_var2=$row['offer_name'];
                        echo $offer_var2."</h1><br><br>";

			$offer_var3=$row['offer_description'];
                        echo $offer_var3."<br><br>";
		
                        

			$offer_var4=$row['offer_specification'];
                        echo $offer_var4."<br><br>";
	
			echo"<h3>Terms & Conditions:</h3>"; 
                        $offer_var5=$row['offer_t&c'];
                        echo $offer_var5."<br><br>";
	                

         		echo'<br><button type="submit" class="button button1" value="Submit">Book Now</button><br>';
                       
	echo'</form>';
echo"<br><br><br>";
			
			  
			
		}

}
		else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
</center>
</body>
</html>
