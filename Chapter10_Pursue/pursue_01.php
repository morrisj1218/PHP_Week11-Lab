<!--
-------------
Programmer:     Jack Morris
Course:         ITSE-1306 (Intro to PHP)
Instructor:     Cesar "Coach" Marrero
Assignment:     Chapter 10 Pursue #1
Description:    Modify script 10.1 to take arguments
-------------
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Date Menus</title>
</head>
<body>
<?php // Script 10.1 - menus.php
/* This script defines and calls a function. */

// This function makes three pull-down munus for the months, days, and years.
// This function takes two arguments: 1 for the starting year, 2 for how many years are displayed(default=10)
function make_date_menus($year, $num = 10) {

    // Array to store the months:
    $months = [1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

    // Make the month pull-down munu:
    print '<select name="month">';
    foreach ($months as $key => $value) {
        print "\n<option value=\"$key\">$value</option>";
    }
    print '</select>';

    // Make the day pull-down munu:
    print '<select name="day">';
    for ($day=1; $day <= 31; $day++) {
        print "\n<option value=\"$day\">$day</option>";
    }
    print '</select>';

    // Make the year pull-down menu:
    print '<select name="year">';
    $start_year = $year;
    $num_years = $num;
    for ($start_year; $start_year <= ($num_years); $start_year++) {
        print "\n<option value=\"$start_year\">$start_year</option>";
    }
    print '</select>';

} // End of make_date_munus() function.

// Make the form:
print '<form action="" method="post">';
make_date_menus(2012, 10);
print '</form>';

?>
</body>
</html>