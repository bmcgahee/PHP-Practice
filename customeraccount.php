<?php
/*Author: Ben McGahee
Title: Customer Account
Date: 4/12/2016
Purpose: This program contains a class called Account, an instance of a customer account that displays their name, email address, username, and password.*/

$objectCustomer = new Account;
$objectCustomer->name = "Fred Jackson";
$objectCustomer->email = "fjackson@gmail.com";
$objectCustomer->username = "fjackson";
$objectCustomer->password = "fJax#404";

echo "Name: " .$objectCustomer->get_name() . "<br>";
echo "Email: " .$objectCustomer->get_email() . "<br>";
echo "Username: " .$objectCustomer->get_username() . "<br>";
echo "Password: " .$objectCustomer->get_password() . "<br>";

class Account 
{
   public $name, $email, $username, $password;

   function get_name()
   {
      return $this->name;
   }
  
   function get_email()
   {
      return $this->email;
   }

   function get_username()
   {
      return $this->username; 
   }
 
   function get_password()
   {
      return $this->password;
   }  
}
?>