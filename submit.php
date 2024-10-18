<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars(trim($_POST['firstName']));
    $phone = htmlspecialchars(trim($_POST['userPhone']));
    $email = htmlspecialchars(trim($_POST['userEmail']));
    $message = htmlspecialchars(trim($_POST['userMessage']));

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit();
    }

    // Email information
    $to = "dineshkumarpdk33@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Message content
    $emailContent = "
        <html>
        <body>
            <h2>Contact Form Submission</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Message:</strong></p>
            <p>$message</p>
        </body>
        </html>
    ";

    // Send email
    if (mail($to, $subject, $emailContent, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message could not be sent!";
    }
}
?>
