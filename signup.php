<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

   
    
    // Send email to admin
    $adminEmail = "syedakifali712@gmail.com"; // Replace with your admin email
    $subject = "New User Signup Notification";
    $message = "A new user has signed up with the following details:\nName: $name\nEmail: $email\nPassword: $password";
    $headers = "From: no-reply@yourdomain.com"; // Replace with your domain

    if (mail($adminEmail, $subject, $message, $headers)) {
        echo "Signup successful. Notification sent to admin.";
    } else {
        echo "Signup successful. Failed to send notification to admin.";
    }
}
?>
