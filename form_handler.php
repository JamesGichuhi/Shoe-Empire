<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "gichuhinganga011@gmail.com";
    $subject = "Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $body)) {
        echo "<p>Thank you for your message! We will get back to you soon.</p>";
    } else {
        echo "<p>Oops! Something went wrong and we couldn't send your message.</p>";
    }
}
?>