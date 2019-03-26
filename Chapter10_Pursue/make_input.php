<?php
// ---------------
// -- Programmer:   Jack Morris
// -- Course:       ITSE-1306 (Intro to PHP)
// -- Instructor:   Cesar "Coach" Marrero
// -- Assignment:   Chapter Pursue #4
// -- Description:  make_input_text() function
// ---------------

function make_text_input($name, $label, $size = 20) {

    // Begin a paragraph and a label:
    print '<p><label>' . $label . ': ';

    // Input type determined if 'password' is passed to $name
    if ($name == 'password') {
        print '<input type="password" name="' . $name . '" size="' . $size . '" ';
    } else {
        print '<input type="text" name="' . $name . '" size="' . $size . '" ';
    }

    // Add the value:
    if (isset($_POST[$name])) {
        print ' value="' . htmlspecialchars($_POST[$name]) . '"';
    }

    // Complete the input, the label and the paragraph:
    print '></label></p>';

} // End of make_text_input() function.
?>