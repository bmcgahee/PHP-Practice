<?php
/*Author: Ben McGahee
  Title: Read File
  Date: 4/13/2016
  Purpose: This script contains a couple of test writes that may or may not be written when the read() function is called.
*/

$file = "todolist.txt"; //read an existing file called todolist.txt
read($file);

$anotherFile = "notthere.txt"; //try to read a non-existing file called notthere.txt
read($anotherFile);

function read($fileName)
{
   if(file_exists($fileName)) //print out the contents of the file if it exists
   {
      echo "<pre>";
      echo file_get_contents($fileName);
      echo "</pre>";
   }
   else 
      echo "File '$fileName' does not exist.";
}
?>
