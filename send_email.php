<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set the recipient email address
    $to = "jakub.matejik@centrum.cz"; // Replace with your actual email address

    // Set the subject of the email
    $subject = "New Contact Form Submission from $name";

    // Build the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message";

    // Set the email headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Your message has been sent successfully.";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
}
?>
