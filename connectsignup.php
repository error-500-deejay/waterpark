<?php include_once 'ticketing/config.php'; ?><html>
<head>

</head>
	
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

.toast.error {
	background: #e74c3c;
} 

.toast.success {
	background: #2ecc71;
}
</style>

<?php



if(!$conn) {
           die("Connection failed: " . mysqli_connect_error());
          }


$n1=$_POST['firstname'];
$n2=$_POST['lastname'];
$n3=$_POST['userid'];
$n4=$_POST['address'];
$n5=$_POST['city'];
$n6=$_POST['pincode'];
$n7=$_POST['phone'];
$n8=$_POST['spassword'];

	// now it is require to filter this before sending to db
	
	
	$n1 = filter_var($n1, FILTER_SANITIZE_STRING);
	$n2 = filter_var($n2, FILTER_SANITIZE_STRING);
	$n3 = filter_var($n3, FILTER_SANITIZE_EMAIL);
	$n4 = filter_var($n4, FILTER_SANITIZE_STRING);
	$n5 = filter_var($n5, FILTER_SANITIZE_STRING);
	$n6=filter_var($n6, FILTER_SANITIZE_NUMBER_INT);
	$n7=filter_var($n7, FILTER_SANITIZE_NUMBER_INT);
	

$sql = "INSERT INTO signup (firstname,lastname,userid,address,city,pincode,phone,spassword)
        VALUES ('$n1','$n2','$n3','$n4','$n5','$n6','$n7','$n8')";


if(mysqli_query($conn, $sql)) {
                               
							/*	echo "<div class='toast success'>";								
							  echo "You have successfully registered - ".$n1." ".$n2."  User Id- ( " . ($n3) . " ) to Go4Food.com.To continue please login to your account.<br>";							  
							  echo "</div><br/>";*/
							  require "login.php";

                             } 
else 
    {
							/*echo "<div class='toast error'>";								
							  echo "The User Id- " . ($n3) . " already exist.To continue please login to your account. ";							  
							  echo "</div>";*/
							  require "login.php";

                             } 
    


mysqli_close($conn);


?>


</body>

</html>