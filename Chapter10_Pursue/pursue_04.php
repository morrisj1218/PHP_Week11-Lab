<!--
-------------
Programmer:     Jack Morris
Course:         ITSE-1306 (Intro to PHP)
Instructor:     Cesar "Coach" Marrero
Assignment:     Chapter 10 Pursue #4
Description:    Defining and calling a function using a global variable
-------------
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cost Calculator</title>
</head>
<body>
<?php // Script 10.5 - calculator2.php
/* This script displays and handles an HTML form.
It uses a function to calculate a total from a quantity, price, and tax rate. */

require('make_input.php');

// Define a tax rate:
$tax = 8.75;

// This function performs the calculations.
function calculate_total($quantity, $price) {

    global $tax;

    $total = $quantity * $price; // Calculation
    $taxrate = ($tax / 100) + 1;
    $total = $total * $taxrate; // Add the tax.
    $total = number_format($total, 2); // Formatting

    return $total; // Return the value.

} // End of function.

// Check for a form submission:
if (isset($_POST['submitted'])) {

    // Check for values:
    if (is_numeric($_POST['quantity']) AND is_numeric($_POST['price']) ) {

        // Call the function and print the results:
        $total = calculate_total($_POST['quantity'], $_POST['price']);
        print "<p>Your total comes to $<span style=\"font-weight: bold;\">$total</span>, including the $tax percent tax rate.</p>";

    } else { // Inappropriate values entered.
        print '<p style="color: red;">Please enter a valid quantity and price!</p>';
    }

}
make_text_input('first_name', 'First Name');
make_text_input('last_name', 'Last Name');
?>
<form action="" method="post">
    <p>Quantity: <input type="text" name="quantity" size="3"></p>
    <p>Price: <input type="text" name="price" size="5"></p>
    <input type="submit" name="submit" value="Calculate!">
    <input type="hidden" name="submitted" value="true">
</form>
</body>
</html>