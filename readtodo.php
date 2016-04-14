<?php

$file = "todolist.txt";
read($file);

$anotherFile = "notthere.txt";
read($anotherFile);

function read($fileName)
{
   if(file_exists($fileName))
   {
      echo "<pre>";
      echo file_get_contents($fileName);
      echo "</pre>";
   }
   else 
      echo "File '$fileName' does not exist.";
}
?>