<?php

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
