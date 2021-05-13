<html>
<head>
<style>

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    width: automatic;
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

@font-face {
   font-family: myFirstFont;
   src: url(sansation_light.woff);
}

.headingfont {
   font-family: myFirstFont;
 src: url(sansation_light.woff);
   
}
</style>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>

<body>


<form class="container" action="ticketing/online_ticket.php" method="post">

<div class="headingfont">
<center><h1><img src="pics/logo.webp" height="30" width="30" >&nbsp K. K. Resort </h1></center>
</div>


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

<br>
Date: <input type="text" class="simple_date" name="dov" required>
<script>
  $( function() {
    $( ".simple_date" ).datepicker({ minDate: <?php echo "$min_Date" ?>, maxDate: <?php echo "$max_Date" ?> });
     
  } );
  </script>
<br>

<div class="headingfont">
<u><center><h4><b>VISITOR COUNT</b></h4></center></u>
</div>

Adult : &nbsp<select name="noa" id="noa">
    <option value="00"selected>00</option>
    <option value="01">01</option>	
    <option value="02">02</option>
    <option value="03">03</option>
    <option value="04">04</option>
    <option value="05">05</option>
    <option value="06">06</option>
    <option value="07">07</option>
    <option value="8">08</option>
    <option value="9">09</option>
    <option value="10">10</option>
  </select>
<br>
<br>
Children : <select name="noc" id="noc">
    <option value="00"selected>00</option>
    <option value="01">01</option>	
    <option value="02">02</option>
    <option value="03">03</option>
    <option value="04">04</option>
    <option value="05">05</option>
    <option value="06">06</option>
    <option value="07">07</option>
    <option value="8">08</option>
    <option value="9">09</option>
    <option value="10">10</option>
  </select>
<br>
<br>
Sr. Citizen: <select name="nos" id="nos">
    <option value="00"selected>00</option>
    <option value="01">01</option>	
    <option value="02">02</option>
    <option value="03">03</option>
    <option value="04">04</option>
    <option value="05">05</option>
    <option value="06">06</option>
    <option value="07">07</option>
    <option value="8">08</option>
    <option value="9">09</option>
    <option value="10">10</option>
  </select>
<br>
<br><center>
<button type="submit" class="button button1" value="Submit">Submit</button></center>
</form>



</body>
</html>
