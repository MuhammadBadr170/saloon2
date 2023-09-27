<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $budget = $_POST["budget"];
    $appointment_date = $_POST["appointment_date"];
    $appointment_time = $_POST["appointment_time"];
    $artist = $_POST["artist"];
    $body_part = $_POST["body_part"];
    $tattoo_size = $_POST["tattoo_size"];

    // Set the recipient email address
    $to = "Diamondheartbespoketattoos@gmail.com"; // Replace with your actual email address

    // Set the email subject
    $subject = "New Appointment Request";

    // Compose the email message
    $message = "First Name: $first_name\n";
    $message .= "Last Name: $last_name\n";
    $message .= "Email: $email\n";
    $message .= "Budget: $budget\n";
    $message .= "Appointment Date: $appointment_date\n";
    $message .= "Appointment Time: $appointment_time\n";
    $message .= "Artist: $artist\n";
    $message .= "Body Part: $body_part\n";
    $message .= "Tattoo Size: $tattoo_size\n";

    // Send the email
    $headers = "From: $email";
    $success = mail($to, $subject, $message, $headers);

    if ($success) {
        echo "Thank you for your appointment request! We will get back to you soon.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // Handle the case where the form was not submitted
    echo "This page cannot be accessed directly.";
}
?>
