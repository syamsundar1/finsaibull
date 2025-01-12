<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = htmlspecialchars($_POST['fullname']);
    $playerid = htmlspecialchars($_POST['playerid']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "info@finsaibull.com"; 
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";

    $body = "Name: $name\nPlayerId: $playerid\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Failed to send message.";
    }
}
?>
