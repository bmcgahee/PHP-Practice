<?php

   class animal { //animal class

       var $name;
       var $age;
       var $weight;

       function set_name($new_name) { //get and set methods for the animal's name, age, and weight
          $this->name = $new_name;
       }

       function get_name() {
	  return $this->name;
       }

       function set_age($new_age) {
	  $this->age = $new_age;
       }

       function get_age() {
	  return $this->age;
       }

       function set_weight($new_weight) {
	  $this->weight = $new_weight;
       }

       function get_weight() {
	  return $this->weight;
       }

   }

    class dog extends animal { //dog class, which is a subclass of the animal class

        function __construct($dog_name, $dog_age, $dog_weight) { //dog constructor that initializes the dog's name, age, and weight
	    $this->set_name($dog_name);
            $this->set_age($dog_age);
            $this->set_weight($dog_weight);
        }

        function get_dog_age() { //gets the dog's age in human years and converts it to dog years
	    $human_age = $this->get_age();
            $dog_age = $human_age * 7;
            return $dog_age;
        }

        function bark() { 
	    $name = $this->get_name();
            echo $name . " likes to bark!";
        }

        function sit() {
            $name = $this->get_name();
            echo $name . ", sit down.";
        }
    }
?>

   