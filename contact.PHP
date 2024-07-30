<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace this email with your actual email address
    $to = "jennyandrus.codes@gmail.com";

    // Retrieve the form inputs
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Subject of the email
    $subject = "New Contact Form Submission from $name";

    // Message body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";

    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your message. It has been sent.";
    } else {
        echo "There was a problem sending your message. Please try again.";
    }
} else {
    // Handle the case where the form is not submitted properly
    echo "Invalid request.";
}
?>
