<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["First_name"];
    $email = $_POST["Email"];
    $message = $_POST["Comments"];

    // Validate the form input
    if (empty($name) || empty($email)) {
        echo "Error: Name and email are required fields.";
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Error: Please enter a valid email address.";
        exit();
    }

    // Send the email
    $to = "magiur99@gmail.com";
    $subject = "New contact form submission";
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $mailBody = "Name: " . $name . "\n";
    $mailBody .= "Email: " . $email . "\n";
    $mailBody .= "Message: " . $message;

    if (mail($to, $subject, $mailBody, $headers)) {
        echo "Thank you for your message! I will get back to you shortly.";
    } else {
        echo "Error: Could not send the email.";
    }
} else {
    echo "Error: Invalid request.";
}
?>
