<?php include("lifeclasslib.php"); ?> //includes the file that contains the animal and dog classes

<?php

   $dog = new dog("Hannah", 6, 70); //create a new dog object
   
   echo "Name: " . $dog->get_name(). "<br>";
   echo "Age: " . $dog->get_age(). " years old, which is ". $dog->get_dog_age(). " in dog years". "<br>";
   echo "Weight: " . $dog->get_weight(). " lbs.". "<br><br>";

   $dog->bark();
   echo "<br>";
   $dog->sit();

?>