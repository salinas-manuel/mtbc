<?php
/**
 * Greets the user with the current date and time.
 */

//Create a date object
$date = new DateTime();

#Format the date
$formattedDate = $date->format('Y-m-d h:i:s');

echo "Hello World it is {$formattedDate}";
