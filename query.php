<?php
//Author: Ben McGahee
//Title: MYSQL Employee Query
//Date: 4/14/2016
//Purpose: This script connects to the Employees database and accesses employee records from the employees table.

$server = "localhost";
$username = "root";
$password = "password";
$database = "Employees";

$connection = new mysqli($server, $username, $password, $database); //connects to the database

if($connection->connect_error)
  die("Unable to connect to database.");

$query = "SELECT * FROM employees WHERE Years >= 5 ORDER BY Years DESC"; //get employees who have worked at least five years at the company

$result = $connection->query($query);

if(!$result)
  die($connection->error);

$records = $result->num_rows;

echo "Here is a list of employees who have worked at the company for at least five years."."<br><br>";
for($i = 0; $i < $records; $i++) //for loop displays each employee by ID number, name, position, and number of years at the company
{
   $result->data_seek($i);
   $record = $result->fetch_array(MYSQLI_ASSOC);
   echo "ID: ".$record["ID"]. "<br>";
   echo "Name: ".$record["Name"]. "<br>";
   echo "Position: ".$record["Position"]. "<br>";
   echo "Years: ".$record["Years"]. "<br>"; 
   echo "<br>";
}

$result->close();
$connection->close(); //close the connection
?>