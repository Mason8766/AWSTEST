<!DOCTYPE html>
<html lang="en"> <!--HTML Main fform, with language set to english-->
	<head><!--Head element-->
		<meta charset="utf-8" /> <!--charachter encoder-->
		<title>Masons Pizzeria | Payment Info</title> <!--website title-->
		<meta name="author" content="Mason Douglas" /><!--website creator-->
		<meta name="description" content="Payment info page of Masons Pizzeria"> <!--description of website-->
		<link rel="stylesheet" href="css/stylessheet.css" /> <!--websiites stylesheet-->
		<link rel="shortcut icon" href="images/pizza.png" type="image/x-icon" /> <!--tab icon-->
	</head>
	<body> <!--body element-->
		<header> <!--header element-->
			<h1>Masons Pizzeria</h1>
			<h1>Your Pizza:</h1>
		</header>
		<main> <!--main element-->
			<section>
				<h3>Thank You for choosing Masons Pizzeria </h3>
<?php //PHP processing form
    
	$size =$_GET['pizzaSize']; // variable for pizza size
	$crust =$_GET['crustType'];//variable for crust type
	$sauce =$_GET['sauce']; // variable for sauce type
	$total = 0.00; //variable representing cost of pizza
	$pizzanum = $_GET['numberPizza'];
	if (isset($_GET['Top'])){ //checks size of array
		$pizzaTop = $_GET['Top']; //array for toppings
	} else {
		$pizzaTop = 1; //If no toppings set to value 1
	};
	
	//calculates the cost of pizza size
	if($size == 'Small'){
		$total = 6.50;
	};
	if($size == 'Medium'){
		$total = 7.50;
	};
	if($size == 'Large'){
		$total = 8.75;
	};
	
	if ($pizzaTop != 1){ //if $pizzaTop is a array
		$total = $total + (count($pizzaTop)*1.25); //determines cost of pizza size*number of pizzas, + number of toppings*1.25		
	};
	$total = $total*$pizzanum;
	echo('<p> Your Total is: $'.$total.' </p>'); //prints customer total
	echo('<p>Your order is as Follows: ' .$pizzanum.' '.$size.' Sized '.$crust.' Crust Pizza with '.$sauce.' Sauce</p>' );//prints customers size, crust, and sauce
	echo('<p>Your pizza topings include the following:</p>
<ul>'); //prints list of pizza toppings
	
	if (isset($pizzaTop) && $pizzaTop != 1){ //prints the list of user's toppings
		foreach ($pizzaTop as $pTop){
			echo('<li>'.$pTop.'</li>');
		};
	} else { //if no toppings selected
		echo('<li>No extra topings included</li>');
	};
	echo('</ul>');
?>
			</section>
			<section>
				<form action='process-form.php' method='get'> <!--Payment processing form-->
					<fieldset>
						<h4>Delivery Options</h4> <!--radio form for delivery options-->
						<input type="radio" name="deliOpt" id="deliOpt1" value="deli" required/>
						<label>Delivery</label>
						<input type="radio" name="deliOpt" id="deliOpt2" value="pick" required/>
						<label>Pickup</label>

							
					</fieldset>
					<fieldset> <!--radio form for payment options-->
						<h4>Payment Options</h4>
						<input type="radio" name="payOpt" id="payOpt1" value="Cash" required/>
						<label>Cash</label>
						<input type="radio" name="payOpt" id="payOpt2" value="Card" required/>
						<label>Card</label>
					</fieldset>	
					<fieldset>
						<legend>Personal Information</legend> <!--form for perosnal information collection-->
						<div><!--users name-->
							<label for="fname">First Name</label>
							<input type="text" name="fname" id="fname" size="25" placeholder="type first name here" required />
						</div>
						<div>
							<label for="lname">Last Name</label>
							<input type="text" name="lname" id="lname" size="25" maxlength="50" placeholder="type last name here" />
						</div>
						<div> <!--Users contact info-->
							<label for="phone">Phone</label>
							<input type="tel" name="phone" id="phone" size="25" placeholder="000-000-0000" pattern="[0-9]{3}[ -][0-9]{3}[ -][0-9]{4}" />
						</div>
						<div>
							<label>Address</label> <!--users adress-->
							<input type="text" name="address" id="address" size="25" placeholder="Enter Address" required/>
						</div>
						<div>
							<label for="comments">Special Insturctions</label> <!--users comments-->
							<textarea name="comments" id="comments"></textarea>
						</div>
					</fieldset>
					<fieldset> <!--form for creditcard info-->
						<legend>Credit Card Details (Leave blank for cash payment)</legend>
						<!--picks card company-->
						<input type="radio" name="creditcardType" id="amex" value="American Express" />
						<label >AMEX</label>
						<input type="radio" name="creditcardType" id="bmo" value="Bank of Montreal" />
						<label >BMO</label>
						<input type="radio" name="creditcardType" id="mc" value="MasterCard" />
						<label>MasterCard</label>
						<input type="radio" name="creditcardType" id="visa" value="VISA" />
						<label>VISA</label>
						<div> <!--user's card number-->
							<label>Credit Card Number</label>
							<input id="cardNum" type="text" name="cardNum" />
						</div>
						<div><!--users expirary date-->
							<label>Expiration Year</label>
							<select name="cardYear" id="cardYear">
								<option value="2020">2020</option>
								<option value="2021">2021</option>
								<option value="2022">2022</option>
								<option value="2023">2023</option>
								<option value="2024">2024</option>
							</select>
						</div>
						<div> 
							<label>Expiration Month</label>
							<select name="cardMonth" id="cardMonth">
								<option value="01">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
							</select>
						</div>
						<div><!--users CVV-->
							<label>CVV</label>
							<textarea name="CVV" maxlength="3" placeholder="000"></textarea>
						</div>	
					</fieldset>
					<button type="submit">Place Order</button> <!--submits form-->
				</form>
			</section>
		</main>
		<footer>
			<p><small>©Pizzeria Inc.</small></p>
			<p><small>Credit card collection handeled inspired ©PayDude Inc.</small></p>
		</footer>
	</body>
</html>
