<!DOCTYPE html> 
<html lang='en'> <!--Main HTML Tag, with langauge set to english-->
    <head><!--Head Section-->
        <meta charset="utf-8" /> <!--Charachter encoding-->
		<title>Mason's Pizzeria</title><!--Browser tab title-->
		<meta name="author" content="Mason Douglas" /> <!--Creator of website-->
        <meta name="description" content="A pizza ordering webstie"> <!--Brief description of website-->
        <link rel="stylesheet" href="css/stylessheet.css" /> <!--websites main style sheet-->
		<link rel="shortcut icon" href="images/pizza.png" type="image/x-icon" /> <!--tab icon-->
		
    </head>
    <body> <!--Body section-->
        <header> <!--Header-->
            <h1>Masons Pizzeria</h1>
        </header>
        <main> <!--Main section, contains HTML FORM-->
            <form action="paymentInfo.php" method="get"> <!--Main HTML form for pizza creation-->
                <div> <!--Pizza details, size, sauce, crust, ect.-->
                    <fieldset>
                        <h3>Pizza Detials</h3>
                        <h4>Size</h4>
                        <img src="images/pizza.png" alt="slice of pizza"> <!--Radio form for Pizza size-->
                        <input type="radio" name="pizzaSize" id="pizzaSizeS" value="Small" required/>
                        <label>Small ($6.50 each)</label>
                        <input type="radio" name="pizzaSize" id="pizzaSizeM" value="Medium" required />
                        <label>Medium ($7.50 each)</label>
                        <input type="radio" name="pizzaSize" id="pizzaSizeL" value="Large" required/>
                        <label>Large ($8.75 each)</label>

                        <h4>Crust Type</h4>
                        <input type="radio" name="crustType" id="crustType1" value="Thin" required/> <!--Radio form for crust type-->
                        <label>Thin</label>
                        <input type="radio" name="crustType" id="crustType2" value="Regular" required/>
                        <label>Regular</label>
                        <input type="radio" name="crustType" id="crustType3" value="Deep-Dish" required/>
                        <label>Deep-Dish</label>

                        <h4>Sauce options</h4> <!--Radio form for sauce type-->
                        <input type="radio" name="sauce" id="sauce1" value="Light" required/>
                        <label>Light Sauce</label>
                        <input type="radio" name="sauce" id="sauce2" value="Regular" required/>
                        <label>Regular Sauce</label>
                        <input type="radio" name="sauce" id="sauce3" value="BBQ" required/>
                        <label>BBQ Sauce</label>

                        <h4># of pizza(s)</h4>
                        <label for="numberPizza">Quantity</label>
						<input type="number" name="numberPizza" id="numberPizza" required/>
                    </fieldset>
                </div>
                <div> <!--Topping selection-->
                    <fieldset>
                        <h3>Toppings ($1.25 Each</h3>
                        <h4>Meat</h4>
                        <input type="checkbox" name="Top[]" id="meatTop1" value="Pepperoni" /> <!--checkbox form for all pizza toppings, with spacing for meats and veggies-->
                        <label>Pepperoni</label>
                        <input type="checkbox" name="Top[]" id="meatTop2" value="Bacon Crumble" />
                        <label>Bacon Crumble</label>
                        <input type="checkbox" name="Top[]" id="meatTop3" value="Bacon Strips"/>
                        <label>Bacon Strips</label>

                        <input type="checkbox" name="Top[]" id="meatTop4" value="Sausage" />
                        <label>Sausage</label>
                        <input type="checkbox" name="Top[]" id="meatTop5" value="Ham" />
                        <label>Ham</label>
                        <input type="checkbox" name="Top[]" id="meatTop6" value="Anchovies" />
                        <label>Anchovies</label>
                        
                        <img src="images/pepperoni.jpg" alt="Pepperoni topping" height="500" width="500">
                        <h4>Fruit and Vegtables</h4>
                        <input type="checkbox" name="Top[]" id="vegTop1" value="Green Pepper" />
                        <label >Green Pepper</label>
                        <input type="checkbox" name="Top[]" id="vegTop2" value="Green Olives" />
                        <label>Green Olives</label>
                        <input type="checkbox" name="Top[]" id="vegTop3" value="Black Olives" />
                        <label>Black Olives</label>
                        <input type="checkbox" name="Top[]" id="vegTop4" value="Pineapple" />
                        <label>Pineapple</label>
                        <input type="checkbox" name="Top[]" id="vegTop5" value="Tomato" />
                        <label>Tomato</label>
                        <input type="checkbox" name="Top[]" id="vegTop6" value="Mushroom" />
                        <label>Mushroom</label>
                        <img src="images/mushroom.png" alt="mushroom pizza topping">
                        <h4>Extras</h4>
                        <input type="checkbox" name="Top[]" id="vegTop7" value="Extra Cheese" />
                        <label>Extra Cheese</label>
                        <input type="checkbox" name="Top[]" id="vegTop8" value="Olive Oil" />
                        <label>Olive oil</label>
                        <input type="checkbox" name="Top[]" id="vegTop9" value="Pepper Seasoning" />
                        <label>Pepper Seasoning</label>
                    </fieldset>
                </div>
                <button type="submit">Add to Cart</button> <!--Submits data to next form (paymentinfo.php)-->
            </form>

        </main>
        <footer> <!--Main footer-->
            <p><small>All images created by the Clipart Society</small></p><!--img sources-->
            <p><small>©Pizzeria Inc.</small></p>
        </footer>
    </body>


</html>