<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    
    // Set the recipient email address
    $to = "Diamondheartbespoketattoos@gmail.com"; // Replace with your actual email address
    
    // Set the email subject
    $subject = "New Newsletter Subscription";
    
    // Compose the email message
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    
    // Send the email
    $headers = "From: $email";
    $success = mail($to, $subject, $message, $headers);
    
    if ($success) {
        echo "Thank you for subscribing to our newsletter!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // Handle the case where the form was not submitted
    echo "This page cannot be accessed directly.";
}
?>