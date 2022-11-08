<!DOCTYPE html>
<html lang="en"> <!--main HTML element, with language set to english-->
	<head>
		<meta charset="utf-8" /> <!--Charachter encoding-->
		<title>Masons Pizzeria | Order Complete</title><!--website title-->
		<link rel="stylesheet" href="css/stylessheet.css" /> <!--css stylesheet-->
		<link rel="shortcut icon" href="images/pizza.png" type="image/x-icon" /> <!--tab icon-->
	</head>
	<body>
		<h1>Masons Pizzeria</h1>
		<h2>Order Complete</h2>
<?php //main php form
	
	$fname = $_GET['fname']; //variable for users first name
    $lname = $_GET['lname']; //variable for users last name
    echo('<p>Thank you, '.$fname.' '.$lname.' your order has been complete, and preperations for your pizza have begun! Your order should be completed in the next 30 minutes.</p>');//departing message
?>
	</body>
</html>
