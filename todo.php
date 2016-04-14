<?php

$file = "todolist.txt";

$openFile = fopen($file, 'w')
or
die("Unable to create " .$file);

$fileText = <<<_END
File Taxes
Mow the Lawn
Buy Groceries
Feed the Dog
Do Laundry
_END;

fwrite($openFile, $fileText)
or
die("Unable to write to " .$openFile);

fclose($openFile);

$easternTimeZone = "America/New_York";
timeStamp($easternTimeZone, $file);

function timeStamp($timeZone, $file)
{
   date_default_timezone_set($timeZone);
   $currentTime = date("l F jS, Y @ g:ia", time());
   echo "Contents have been written successfully to '$file' on " .$currentTime .".";
}
?>