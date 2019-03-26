<!--
-------------
Programmer:     Jack Morris
Course:         ITSE-1306 (Intro to PHP)
Instructor:     Cesar "Coach" Marrero
Assignment:     Week11-Lab
Description:    HTML password input using passw_strength() function
-------------
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Password Strength Calculator</title>
</head>
<body>
<?php
    require ('passw_strength.php');

    // Check for form submission:
    if (isset($_POST['submitted'])) {

        // Assign $password variable
        $password = $_POST['password'];

        // Call passw_strength() to get $score value:
        $score = passw_strength($password);

        if ($score >= 13) { // Strong Password
            print '<p style="color: green;">Password is Strong. Score' . " $score" . '</p>';
        }

        if ($score >= 10 AND $score <= 12) { // Questionable Password
            print '<p style="color: yellow;">Password is Questionable. Score' . " $score" . '</p>';
        }

        if ($score < 10) { // Weak Password
            print '<p style="color: red;">Password is Weak. Score' . " $score" . '</p>';
        }
    } else { // No entry
        print '<p style="color: red;">Please enter a password!</p>';
    }
?>
<form action="" method="POST">
    <p>Password: <input type="password" name="password" size="20"></p>
    <input type="submit" name="submit" value="Calculate Strength">
    <input type="hidden" name="submitted" value="true">
</form>
</body>
</html>