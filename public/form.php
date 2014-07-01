<?php
if ($_POST['parse_var'] == "contactform") {
    
    $subject = 'New Email from your website!';
    $to = 'ankit.11ch@gmail.com';

    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];

mail($to,$subject,$message, "From: " . $name);

    echo "Thank You! Your message has been sent.";
}


?>