<?php

/*Author: Ben McGahee
  Title: Good Feed Eatery
  Date: 4/23/2016
  Purpose:  This web form powered by HTML and PHP provides you a virtual dining experience at a fictitious restaurant
  called "Good Feed Eatery".  You order a protein, side, beverage and get a receipt for the total cost of your meal.
*/

echo <<<_END
     <html>
       <head>
         <title>Good Feed Eatery</title>
       </head>
       <body>
       <form method = "post" action = "goodfeed.php">
           <h1>Welcome to Good Feed Eatery!</h1>
           <h2><i>"Where a hungry need meets a good feed."</i></h2>
           <h3>Can I take your order?</h3>
           <h5>Proteins</h5>
           <input type = "radio" name = "protein" value = "steak" checked>Steak: $21.99<br>             <!--Steak radio button-->
           <input type = "radio" name = "protein" value = "ribs">Ribs: $17.99<br>                       <!--Ribs radio button-->
           <input type = "radio" name = "protein" value = "chicken">Chicken: $10.99<br>                 <!--Chicken radio button-->
           <h5>Sides</h5>
           <input type = "radio" name = "side" value = "bakedpotato" checked>Baked Potato: $1.59<br>    <!--Baked Potato radio button-->
           <input type = "radio" name = "side" value = "greenbeans">Green Beans: $0.89<br>              <!--Green Beans radio button-->
           <input type = "radio" name = "side" value = "corn">Corn: $0.69<br>                           <!--Corn radio button-->
           <h5>Beverages</h5>
           <input type = "radio" name = "beverage" value = "beer" checked>Beer: $2.99<br>               <!--Beer radio button-->
           <input type = "radio" name = "beverage" value = "softdrink">Soft Drink: $0.99<br>            <!--Soft Drink radio button-->
           <input type = "radio" name = "beverage" value = "water">Water: FREE<br><br>                  <!--Water radio button-->
           <input type = "text" name = "firstname" value = ""><br><br>                                  <!--Name textbox to enter your name-->
           <input type = "submit" name = "submit" value = "Submit Order">                               <!--Submit Order button to put in your order-->
       </form>
       </body>
     </html>
_END;

//prices for all the proteins
$steakPrice = 21.99;
$ribsPrice = 17.99;
$chickenPrice = 10.99;

//prices for all the sides
$bakedPotatoPrice = 1.59;
$greenBeansPrice = 0.89;
$cornPrice = 0.69;

//prices for all the beverages
$beerPrice = 2.99;
$softDrinkPrice = 0.99;
$waterPrice = 0.00;

if(isset($_POST["submit"]) && $_POST["firstname"] != "") //case where customer enters their name and clicks the Submit Order button
{
   $name = $_POST["firstname"];
   $protein = $_POST["protein"];
   $side = $_POST["side"];
   $beverage = $_POST["beverage"];
   
   if($protein == "steak" && $side == "greenbeans" && $beverage == "softdrink") //case where customer orders steak, green beans, and a soft drink
   {
      $subtotal = subtotalSteakMeal($steakPrice, $greenBeansPrice, $softDrinkPrice);
      $tax = taxSteakMeal($steakPrice, $greenBeansPrice, $softDrinkPrice);
      $total = $subtotal + $tax;
      echo "Thank you, $name for your order." ."<br>";
      echo "Here is your receipt." ."<br>" ."<br>"; 
      echo "Steak: $21.99" ."<br>";
      echo "Green Beans: $0.89" ."<br>";
      echo "Soft Drink: $0.99" ."<br>";
      echo "Subtotal: $" .$subtotal ."<br>";
      echo "Tax: $" .$tax ."<br>";
      echo "Total: $" .$total;
   }
   else if($protein == "steak" && $side == "greenbeans" && $beverage == "beer") //case where customer orders steak, green beans, and a beer
   {
      $subtotal = subtotalSteakMeal($steakPrice, $greenBeansPrice, $beerPrice);
      $tax = taxSteakMeal($steakPrice, $greenBeansPrice, $beerPrice);
      $total = $subtotal + $tax;
      echo "Thank you, $name for your order." ."<br>";
      echo "Here is your receipt." ."<br>" ."<br>"; 
      echo "Steak: $21.99" ."<br>";
      echo "Green Beans: $0.89" ."<br>";
      echo "Beer: $2.99" ."<br>";
      echo "Subtotal: $" .$subtotal ."<br>";
      echo "Tax: $" .$tax ."<br>";
      echo "Total: $" .$total;
   }
   else if($protein == "steak" && $side == "greenbeans" && $beverage == "water") //case where customer orders steak, greenbeans and a water
   {
      $subtotal = subtotalSteakMeal($steakPrice, $greenBeansPrice, $waterPrice);
      $tax = taxSteakMeal($steakPrice, $greenBeansPrice, $waterPrice);
      $total = $subtotal + $tax;
      echo "Thank you, $name for your order." ."<br>";
      echo "Here is your receipt." ."<br>" ."<br>"; 
      echo "Steak: $21.99" ."<br>";
      echo "Green Beans: $0.89" ."<br>";
      echo "Water: $0.00" ."<br>";
      echo "Subtotal: $" .$subtotal ."<br>";
      echo "Tax: $" .$tax ."<br>";
      echo "Total: $" .$total;
   }
   else if($protein == "steak" && $side == "corn" && $beverage == "softdrink") //case where customer orders steak, corn, and a soft drink
   {
      $subtotal = subtotalSteakMeal($steakPrice, $cornPrice, $softDrinkPrice);
      $tax = taxSteakMeal($steakPrice, $cornPrice, $softDrinkPrice);
      $total = $subtotal + $tax;
      echo "Thank you, $name for your order." ."<br>";
      echo "Here is your receipt." ."<br>" ."<br>"; 
      echo "Steak: $21.99" ."<br>";
      echo "Corn: $0.69" ."<br>";
      echo "Soft Drink: $0.99" ."<br>";
      echo "Subtotal: $" .$subtotal ."<br>";
      echo "Tax: $" .$tax ."<br>";
      echo "Total: $" .$total;
   }
   else if($protein == "steak" && $side == "corn" && $beverage == "beer") //case where customer orders steak, corn, and a beer
   {
      $subtotal = subtotalSteakMeal($steakPrice, $cornPrice, $beerPrice);
      $tax = taxSteakMeal($steakPrice, $cornPrice, $beerPrice);
      $total = $subtotal + $tax;
      echo "Thank you, $name for your order." ."<br>";
      echo "Here is your receipt." ."<br>" ."<br>"; 
      echo "Steak: $21.99" ."<br>";
      echo "Corn: $0.69" ."<br>";
      echo "Beer: $2.99" ."<br>";
      echo "Subtotal: $" .$subtotal ."<br>";
      echo "Tax: $" .$tax ."<br>";
      echo "Total: $" .$total;
   }
   else if($protein == "steak" && $side == "corn" && $beverage == "water") //case where customer orders steak, corn, and a water
   {
      $subtotal = subtotalSteakMeal($steakPrice, $cornPrice, $waterPrice);
      $tax = taxSteakMeal($steakPrice, $cornPrice, $waterPrice);
      $total = $subtotal + $tax;
      echo "Thank you, $name for your order." ."<br>";
      echo "Here is your receipt." ."<br>" ."<br>"; 
      echo "Steak: $21.99" ."<br>";
      echo "Corn: $0.69" ."<br>";
      echo "Water: $0.00" ."<br>";
      echo "Subtotal: $" .$subtotal ."<br>";
      echo "Tax: $" .$tax ."<br>";
      echo "Total: $" .$total;
   }
   else if($protein == "steak" && $side == "bakedpotato" && $beverage == "softdrink") //case where customer orders steak, baked potato, and a soft drink
   {
      $subtotal = subtotalSteakMeal($steakPrice, $bakedPotatoPrice, $softDrinkPrice);
      $tax = taxSteakMeal($steakPrice, $bakedPotatoPrice, $softDrinkPrice);
      $total = $subtotal + $tax;
      echo "Thank you, $name for your order." ."<br>";
      echo "Here is your receipt." ."<br>" ."<br>"; 
      echo "Steak: $21.99" ."<br>";
      echo "Baked Potato: $1.59" ."<br>";
      echo "Soft Drink: $0.99" ."<br>";
      echo "Subtotal: $" .$subtotal ."<br>";
      echo "Tax: $" .$tax ."<br>";
      echo "Total: $" .$total;
   }
   else if($protein == "steak" && $side == "bakedpotato" && $beverage == "beer") //case where customer orders steak, baked potato, and a beer
   {
      $subtotal = subtotalSteakMeal($steakPrice, $bakedPotatoPrice, $beerPrice);
      $tax = taxSteakMeal($steakPrice, $bakedPotatoPrice, $beerPrice);
      $total = $subtotal + $tax;
      echo "Thank you, $name for your order." ."<br>";
      echo "Here is your receipt." ."<br>" ."<br>"; 
      echo "Steak: $21.99" ."<br>";
      echo "Baked Potato: $1.59" ."<br>";
      echo "Beer: $2.99" ."<br>";
      echo "Subtotal: $" .$subtotal ."<br>";
      echo "Tax: $" .$tax ."<br>";
      echo "Total: $" .$total;
   }
   else if($protein == "steak" && $side == "bakedpotato" && $beverage == "water") //case where customer orders steak, baked potato, and a water
   {
      $subtotal = subtotalSteakMeal($steakPrice, $bakedPotatoPrice, $waterPrice);
      $tax = taxSteakMeal($steakPrice, $bakedPotatoPrice, $waterPrice);
      $total = $subtotal + $tax;
      echo "Thank you, $name for your order." ."<br>";
      echo "Here is your receipt." ."<br>" ."<br>"; 
      echo "Steak: $21.99" ."<br>";
      echo "Baked Potato: $1.59" ."<br>";
      echo "Water: $0.00" ."<br>";
      echo "Subtotal: $" .$subtotal ."<br>";
      echo "Tax: $" .$tax ."<br>";
      echo "Total: $" .$total;
   }
   else if($protein == "chicken" && $side == "greenbeans" && $beverage == "softdrink") //case where customer orders chicken, green beans, and a soft drink
   {
      $subtotal = subtotalChickenMeal($chickenPrice, $greenBeansPrice, $softDrinkPrice);
      $tax = taxChickenMeal($chickenPrice, $greenBeansPrice, $softDrinkPrice);
      $total = $subtotal + $tax;
      echo "Thank you, $name for your order." ."<br>";
      echo "Here is your receipt." ."<br>" ."<br>"; 
      echo "Chicken: $10.99" ."<br>";
      echo "Green Beans: $0.89" ."<br>";
      echo "Soft Drink: $0.99" ."<br>";
      echo "Subtotal: $" .$subtotal ."<br>";
      echo "Tax: $" .$tax ."<br>";
      echo "Total: $" .$total;
   }
   else if($protein == "chicken" && $side == "greenbeans" && $beverage == "beer") //case where customer orders chicken, green beans, and a beer
   {
      $subtotal = subtotalChickenMeal($chickenPrice, $greenBeansPrice, $beerPrice);
      $tax = taxChickenMeal($chickenPrice, $greenBeansPrice, $beerPrice);
      $total = $subtotal + $tax;
      echo "Thank you, $name for your order." ."<br>";
      echo "Here is your receipt." ."<br>" ."<br>"; 
      echo "Chicken: $10.99" ."<br>";
      echo "Green Beans: $0.89" ."<br>";
      echo "Beer: $2.99" ."<br>";
      echo "Subtotal: $" .$subtotal ."<br>";
      echo "Tax: $" .$tax ."<br>";
      echo "Total: $" .$total;
   }
   else if($protein == "chicken" && $side == "greenbeans" && $beverage == "water") //case where customer orders chicken, green beans, and a water
   {
      $subtotal = subtotalChickenMeal($chickenPrice, $greenBeansPrice, $waterPrice);
      $tax = taxChickenMeal($chickenPrice, $greenBeansPrice, $waterPrice);
      $total = $subtotal + $tax;
      echo "Thank you, $name for your order." ."<br>";
      echo "Here is your receipt." ."<br>" ."<br>"; 
      echo "Chicken: $10.99" ."<br>";
      echo "Green Beans: $0.69" ."<br>";
      echo "Water: $0.00" ."<br>";
      echo "Subtotal: $" .$subtotal ."<br>";
      echo "Tax: $" .$tax ."<br>";
      echo "Total: $" .$total;
   }
   else if($protein == "chicken" && $side == "corn" && $beverage == "softdrink") //case where customer orders chicken, corn, and a soft drink
   {
      $subtotal = subtotalChickenMeal($chickenPrice, $cornPrice, $softDrinkPrice);
      $tax = taxChickenMeal($chickenPrice, $cornPrice, $softDrinkPrice);
      $total = $subtotal + $tax;
      echo "Thank you, $name for your order." ."<br>";
      echo "Here is your receipt." ."<br>" ."<br>"; 
      echo "Chicken: $10.99" ."<br>";
      echo "Corn: $0.69" ."<br>";
      echo "Soft Drink: $0.99" ."<br>";
      echo "Subtotal: $" .$subtotal ."<br>";
      echo "Tax: $" .$tax ."<br>";
      echo "Total: $" .$total;
   }
   else if($protein == "chicken" && $side == "corn" && $beverage == "beer") //case where customer orders chicken, corn, and a beer
   {
      $subtotal = subtotalChickenMeal($chickenPrice, $cornPrice, $beerPrice);
      $tax = taxChickenMeal($chickenPrice, $cornPrice, $beerPrice);
      $total = $subtotal + $tax;
      echo "Thank you, $name for your order." ."<br>";
      echo "Here is your receipt." ."<br>" ."<br>"; 
      echo "Chicken: $10.99" ."<br>";
      echo "Corn: $0.69" ."<br>";
      echo "Beer: $2.99" ."<br>";
      echo "Subtotal: $" .$subtotal ."<br>";
      echo "Tax: $" .$tax ."<br>";
      echo "Total: $" .$total;
   }
   else if($protein == "chicken" && $side == "corn" && $beverage == "water") //case where customer orders chicken, corn, and a water
   {
      $subtotal = subtotalChickenMeal($chickenPrice, $cornPrice, $waterPrice);
      $tax = taxChickenMeal($chickenPrice, $cornPrice, $waterPrice);
      $total = $subtotal + $tax;
      echo "Thank you, $name for your order." ."<br>";
      echo "Here is your receipt." ."<br>" ."<br>"; 
      echo "Chicken: $10.99" ."<br>";
      echo "Corn: $0.69" ."<br>";
      echo "Water: $0.00" ."<br>";
      echo "Subtotal: $" .$subtotal ."<br>";
      echo "Tax: $" .$tax ."<br>";
      echo "Total: $" .$total;
   }
   else if($protein == "chicken" && $side == "bakedpotato" && $beverage == "softdrink") //case where customer orders chicken, baked potato, and a soft drink
   {
      $subtotal = subtotalChickenMeal($chickenPrice, $bakedPotatoPrice, $softDrinkPrice);
      $tax = taxChickenMeal($chickenPrice, $bakedPotatoPrice, $softDrinkPrice);
      $total = $subtotal + $tax;
      echo "Thank you, $name for your order." ."<br>";
      echo "Here is your receipt." ."<br>" ."<br>"; 
      echo "Chicken: $10.99" ."<br>";
      echo "Baked Potato: $1.59" ."<br>";
      echo "Soft Drink: $0.99" ."<br>";
      echo "Subtotal: $" .$subtotal ."<br>";
      echo "Tax: $" .$tax ."<br>";
      echo "Total: $" .$total;
   }
   else if($protein == "chicken" && $side == "bakedpotato" && $beverage == "beer") //case where customer orders chicken, baked potato, and a beer
   {
      $subtotal = subtotalChickenMeal($chickenPrice, $bakedPotatoPrice, $beerPrice);
      $tax = taxChickenMeal($chickenPrice, $bakedPotatoPrice, $beerPrice);
      $total = $subtotal + $tax;
      echo "Thank you, $name for your order." ."<br>";
      echo "Here is your receipt." ."<br>" ."<br>"; 
      echo "Chicken: $10.99" ."<br>";
      echo "Baked Potato: $1.59" ."<br>";
      echo "Beer: $2.99" ."<br>";
      echo "Subtotal: $" .$subtotal ."<br>";
      echo "Tax: $" .$tax ."<br>";
      echo "Total: $" .$total;
   }
   else if($protein == "chicken" && $side == "bakedpotato" && $beverage == "water") //case where customer orders chicken, baked potato, and a water
   {
      $subtotal = subtotalChickenMeal($chickenPrice, $bakedPotatoPrice, $waterPrice);
      $tax = taxChickenMeal($chickenPrice, $bakedPotatoPrice, $waterPrice);
      $total = $subtotal + $tax;
      echo "Thank you, $name for your order." ."<br>";
      echo "Here is your receipt." ."<br>" ."<br>"; 
      echo "Chicken: $10.99" ."<br>";
      echo "Baked Potato: $1.59" ."<br>";
      echo "Water: $0.00" ."<br>";
      echo "Subtotal: $" .$subtotal ."<br>";
      echo "Tax: $" .$tax ."<br>";
      echo "Total: $" .$total;
   }
   else if($protein == "ribs" && $side == "greenbeans" && $beverage == "softdrink") //case where customer orders ribs, green beans, and a soft drink
   {
      $subtotal = subtotalRibsMeal($ribsPrice, $greenBeansPrice, $softDrinkPrice);
      $tax = taxRibsMeal($ribsPrice, $greenBeansPrice, $softDrinkPrice);
      $total = $subtotal + $tax;
      echo "Thank you, $name for your order." ."<br>";
      echo "Here is your receipt." ."<br>" ."<br>"; 
      echo "Ribs: $17.99" ."<br>";
      echo "Green Beans: $0.89" ."<br>";
      echo "Soft Drink: $0.99" ."<br>";
      echo "Subtotal: $" .$subtotal ."<br>";
      echo "Tax: $" .$tax ."<br>";
      echo "Total: $" .$total;  
   }
   else if($protein == "ribs" && $side == "greenbeans" && $beverage == "beer") //case where customer orders ribs, green beans, and a beer
   {
      $subtotal = subtotalRibsMeal($ribsPrice, $greenBeansPrice, $beerPrice);
      $tax = taxRibsMeal($ribsPrice, $greenBeansPrice, $beerPrice);
      $total = $subtotal + $tax;
      echo "Thank you, $name for your order." ."<br>";
      echo "Here is your receipt." ."<br>" ."<br>"; 
      echo "Ribs: $17.99" ."<br>";
      echo "Green Beans: $0.89" ."<br>";
      echo "Beer: $2.99" ."<br>";
      echo "Subtotal: $" .$subtotal ."<br>";
      echo "Tax: $" .$tax ."<br>";
      echo "Total: $" .$total;  
   }
   else if($protein == "ribs" && $side == "greenbeans" && $beverage == "water") //case where customer orders ribs, green beans, and a water
   {
      $subtotal = subtotalRibsMeal($ribsPrice, $greenBeansPrice, $waterPrice);
      $tax = taxRibsMeal($ribsPrice, $greenBeansPrice, $waterPrice);
      $total = $subtotal + $tax;
      echo "Thank you, $name for your order." ."<br>";
      echo "Here is your receipt." ."<br>" ."<br>"; 
      echo "Ribs: $17.99" ."<br>";
      echo "Green Beans: $0.89" ."<br>";
      echo "Water: $0.00" ."<br>";
      echo "Subtotal: $" .$subtotal ."<br>";
      echo "Tax: $" .$tax ."<br>";
      echo "Total: $" .$total;  
   }
   else if($protein == "ribs" && $side == "corn" && $beverage == "softdrink") //case where customer orders ribs, corn, and a soft drink
   {
      $subtotal = subtotalRibsMeal($ribsPrice, $cornPrice, $softDrinkPrice);
      $tax = taxRibsMeal($ribsPrice, $cornPrice, $softDrinkPrice);
      $total = $subtotal + $tax;
      echo "Thank you, $name for your order." ."<br>";
      echo "Here is your receipt." ."<br>" ."<br>"; 
      echo "Ribs: $17.99" ."<br>";
      echo "Corn: $0.69" ."<br>";
      echo "Soft Drink: $0.99" ."<br>";
      echo "Subtotal: $" .$subtotal ."<br>";
      echo "Tax: $" .$tax ."<br>";
      echo "Total: $" .$total;
   }
   else if($protein == "ribs" && $side == "corn" && $beverage == "beer") //case where customer orders ribs, corn, and a beer
   {
      $subtotal = subtotalRibsMeal($ribsPrice, $cornPrice, $beerPrice);
      $tax = taxRibsMeal($ribsPrice, $cornPrice, $beerPrice);
      $total = $subtotal + $tax;
      echo "Thank you, $name for your order." ."<br>";
      echo "Here is your receipt." ."<br>" ."<br>"; 
      echo "Ribs: $17.99" ."<br>";
      echo "Corn: $0.69" ."<br>";
      echo "Beer: $2.99" ."<br>";
      echo "Subtotal: $" .$subtotal ."<br>";
      echo "Tax: $" .$tax ."<br>";
      echo "Total: $" .$total;
   }
   else if($protein == "ribs" && $side == "corn" && $beverage == "water") //case where customer orders ribs, corn, and a water
   {
      $subtotal = subtotalRibsMeal($ribsPrice, $cornPrice, $softDrinkPrice);
      $tax = taxRibsMeal($ribsPrice, $cornPrice, $softDrinkPrice);
      $total = $subtotal + $tax;
      echo "Thank you, $name for your order." ."<br>";
      echo "Here is your receipt." ."<br>" ."<br>"; 
      echo "Ribs: $17.99" ."<br>";
      echo "Corn: $0.69" ."<br>";
      echo "Water: $0.00" ."<br>";
      echo "Subtotal: $" .$subtotal ."<br>";
      echo "Tax: $" .$tax ."<br>";
      echo "Total: $" .$total;
   }
   else if($protein == "ribs" && $side == "bakedpotato" && $beverage == "softdrink") //case where customer orders ribs, baked potato, and a soft drink
   {
      $subtotal = subtotalRibsMeal($ribsPrice, $bakedPotatoPrice, $softDrinkPrice);
      $tax = taxRibsMeal($ribsPrice, $bakedPotatoPrice, $softDrinkPrice);
      $total = $subtotal + $tax;
      echo "Thank you, $name for your order." ."<br>";
      echo "Here is your receipt." ."<br>" ."<br>"; 
      echo "Ribs: $17.99" ."<br>";
      echo "Baked Potato: $1.59" ."<br>";
      echo "Soft Drink: $0.99" ."<br>";
      echo "Subtotal: $" .$subtotal ."<br>";
      echo "Tax: $" .$tax ."<br>";
      echo "Total: $" .$total;
   }
   else if($protein == "ribs" && $side == "bakedpotato" && $beverage == "beer") //case where customer orders ribs, baked potato, and a beer
   {
      $subtotal = subtotalRibsMeal($ribsPrice, $bakedPotatoPrice, $beerPrice);
      $tax = taxRibsMeal($ribsPrice, $bakedPotatoPrice, $beerPrice);
      $total = $subtotal + $tax;
      echo "Thank you, $name for your order." ."<br>";
      echo "Here is your receipt." ."<br>" ."<br>"; 
      echo "Ribs: $17.99" ."<br>";
      echo "Baked Potato: $1.59" ."<br>";
      echo "Beer: $2.99" ."<br>";
      echo "Subtotal: $" .$subtotal ."<br>";
      echo "Tax: $" .$tax ."<br>";
      echo "Total: $" .$total;
   }
   else if($protein == "ribs" && $side == "bakedpotato" && $beverage == "water") //case where customer orders ribs, baked potato, and a water
   {
      $subtotal = subtotalRibsMeal($ribsPrice, $bakedPotatoPrice, $waterPrice);
      $tax = taxRibsMeal($ribsPrice, $bakedPotatoPrice, $waterPrice);
      $total = $subtotal + $tax;
      echo "Thank you, $name for your order." ."<br>";
      echo "Here is your receipt." ."<br>" ."<br>"; 
      echo "Ribs: $17.99" ."<br>";
      echo "Baked Potato: $1.59" ."<br>";
      echo "Water: $0.00" ."<br>";
      echo "Subtotal: $" .$subtotal ."<br>";
      echo "Tax: $" .$tax ."<br>";
      echo "Total: $" .$total;
   }   
}

if(isset($_POST["submit"]) && $_POST["firstname"] == "") //case where customer does not enter their name and tries to submit their order
   echo "We can't take your order until you provide us your name.";


function subtotalSteakMeal($steakPrice, $sidePrice, $beveragePrice) //calculates the subtotal for the steak meal
{
     $steak = $steakPrice;
     $side = $sidePrice;
     $beverage = $beveragePrice;
     $subtotal = $steak + $side + $beverage;
     $subtotalDollar = number_format($subtotal, 2);
     return $subtotalDollar;
}

function taxSteakMeal($steakPrice, $sidePrice, $beveragePrice) //calculates the tax for the steak meal
{
     $tax = 0.07 * subtotalSteakMeal($steakPrice, $sidePrice, $beveragePrice);
     $taxDollar = number_format($tax, 2);
     return $taxDollar;
}

function totalSteakMeal($steakPrice, $sidePrice, $beveragePrice) //calculates the total cost for the steak meal
{
     $subtotal = subtotalSteakMeal($steakPrice, $sidePrice, $beveragePrice);
     $tax = taxSteakMeal($steakPrice, $sidePrice, $beveragePrice);
     $total = $subtotal + $tax;
     $totalDollar = number_format($total, 2);
     return $totalDollar;
}

function subtotalChickenMeal($chickenPrice, $sidePrice, $beveragePrice) //calculates the subtotal for the chicken meal
{
     $chicken = $chickenPrice;
     $side = $sidePrice;
     $beverage = $beveragePrice;
     $subtotal = $chicken + $side + $beverage;
     $subtotalDollar = number_format($subtotal, 2);
     return $subtotalDollar;
}

function taxChickenMeal($chickenPrice, $sidePrice, $beveragePrice) //calculates the tax for the chicken meal
{
     $tax = 0.07 * subtotalChickenMeal($chickenPrice, $sidePrice, $beveragePrice);
     $taxDollar = number_format($tax, 2);
     return $taxDollar;
}

function totalChickenMeal($chickenPrice, $sidePrice, $beveragePrice) //calculates the total cost for the chicken meal
{
     $subtotal = subtotalChickenMeal($chickenPrice, $sidePrice, $beveragePrice);
     $tax = taxChickenMeal($chickenPrice, $sidePrice, $beveragePrice);
     $total = $subtotal + $tax;
     $totalDollar = number_format($total, 2);
     return $totalDollar;
}

function subtotalRibsMeal($ribsPrice, $sidePrice, $beveragePrice) //calculates the subtotal for the ribs meal
{
     $ribs = $ribsPrice;
     $side = $sidePrice;
     $beverage = $beveragePrice;
     $subtotal = $ribs + $side + $beverage;
     $subtotalDollar = number_format($subtotal, 2);
     return $subtotalDollar;
}

function taxRibsMeal($ribsPrice, $sidePrice, $beveragePrice) //calculates the tax for the ribs meal
{
     $tax = 0.07 * subtotalRibsMeal($ribsPrice, $sidePrice, $beveragePrice);
     $taxDollar = number_format($tax, 2);
     return $taxDollar;
}

function totalRibsMeal($ribsPrice, $sidePrice, $beveragePrice) //calculates the total cost for the ribs meal
{
     $subtotal = subtotalRibsMeal($ribsPrice, $sidePrice, $beveragePrice);
     $tax = taxRibsMeal($ribsPrice, $sidePrice, $beveragePrice);
     $total = $subtotal + $tax;
     $totalDollar = number_format($total, 2);
     return $totalDollar;
}

?>