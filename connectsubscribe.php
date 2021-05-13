<html>
<head>
<style>
.subit{
z-index:150;
}
</style>
</head>

<body>

Welcome ,<?php
include('ticketing/config.php');
$email=$_POST["user_email"];


$sql="INSERT INTO subscribers (email_id) VALUES ('$email')";
if ($conn->query($sql) === TRUE) {
   ?>

<script>alert('You have Subscribed to know about latest offers');location.href="homepage.php";</script>


<?php
   

   // include'homepage.php';
   
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// header('Location: homepage.php?subscribe');
 ?><br>


</body>
</html>