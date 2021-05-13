<?<?php
session_start();
?>
<html>
<body>
<form action="connectfinalbill.php" method="POST">
<?php echo "You have to pay". $_SESSION['totalpayablecost']; ?>

		<br><button type="submit"  value="Submit">Pay <?php echo $_SESSION["totalpayablecost"]; ?></button>
</form>

</html>
</body>