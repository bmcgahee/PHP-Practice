<?php

$fileName = "acronyms.txt";
$openFile = fopen($fileName, "rb"); //open the file acronyms.txt

while(!feof($openFile))
{
   $wordText = fgets($openFile);
   $definition = explode("=", $wordText);

   print $definition[0]. "= " .$definition[1]. "<br>"; //print each acronym and its definition
}

fclose($openFile); //close the file

?>