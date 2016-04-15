<?php
//Author: Ben McGahee
//Title: Write to File
//Date: 4/13/2016
//Purpose: This script creates and write text to a text file and displays the current time when the file was saved.

$file = "todolist.txt";

$openFile = fopen($file, 'w') //create a text file called todolist.txt
or
die("Unable to create " .$file); //file cannot be created due to insufficient memory

$fileText = <<<_END 
File Taxes
Mow the Lawn
Buy Groceries
Feed the Dog
Do Laundry
_END;

fwrite($openFile, $fileText) //write this text to the file
or
die("Unable to write to " .$openFile);

fclose($openFile); //close the file

$easternTimeZone = "America/New_York";
timeStamp($easternTimeZone, $file);

function timeStamp($timeZone, $file) //timeStamp records the date and time when file was saved
{
   date_default_timezone_set($timeZone);
   $currentTime = date("l F jS, Y @ g:ia", time());
   echo "Contents have been written successfully to '$file' on " .$currentTime .".";
}
?>
