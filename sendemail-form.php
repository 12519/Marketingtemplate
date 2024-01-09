<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Construct email content
    $to = "gopiprasad.markacommunications@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email\r\n";
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Product: $product\n\n";
    $email_content .= "Message:\n$message";

    // Send email
    mail($to, $subject, $email_content, $headers);

    // Display confirmation message on the same page
    echo "<script>displayConfirmation();</script>";
}
?>
