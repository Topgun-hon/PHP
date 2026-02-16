<?php
echo date('Y-m-d H:i:s');
echo '<br>';

echo date("D M j G:i:s T Y");
echo '<br>';

echo date('l, F, d, Y g:i A');
echo '<br>';
$timestamp = mktime(0, 0, 0, 12, 25, 2024);

echo date('Y-m-d', $timestamp);

/* 

Days:
 - d: Day of the month in 2 digits with leading zeros
 - j: Day of the month in 2 digits without leading zeros
 - D: Day of the week in 3chars
 - l: Full day of the week

Month:
 - m: Month number with leading zeros
 - n: Month number without leading zeros
 - M: Short month name, 3 letters
 - F: Full month name

Year:
 - y: 2-digit year
 - Y: 4-digit year

Hour:
 - H: 24-hour format with leading zeros
 - h: 12-hour format with leading zeros
 - G: 24-hour format without leading zeros
 - g: 12-hour format without leading zeros

Microsec:
 - u: For micro seconds

AM/PH:
 - a: Lowercase am/pm
 - A: uppercase am/pm
*/
?>