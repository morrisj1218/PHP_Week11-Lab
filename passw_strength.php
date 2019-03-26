<?php
// ---------------
// -- Programmer:   Jack Morris
// -- Course:       ITSE-1306 (Intro to PHP)
// -- Instructor:   Cesar "Coach" Marrero
// -- Assignment:   Week11-Lab
// -- Description:  This function uses an algorithm to determine strength of a password
// ---------------

function passw_strength($password) {
    // All passwords start with a score of 10.
    $score = 10;

    // If password has less than 8 characters, subtract four points.
    if (strlen($password) < 8) {
        $score = $score - 4;
    }

    // If password contains only numbers, subtract three points.
    if (ctype_digit($password)) {
        $score = $score - 3;
    }

    // If password contains only letters, subtract three points.
    if (ctype_alpha($password)) {
        $score= $score - 3;
    }

    // If password contains at least letters and at least two numbers, add three points.


    // If password contains numbers and at least two letters or special characters, add three points.


    // If password contains a combination of letters, numbers, and special characters, add four points.

    return $score;
}
?>