<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $phone = trim($_POST["phone"]);
        $message = trim($_POST["message"]);

        if (empty($name) || empty($email) || empty($phone) || empty($message)) {
            header("Location: contact.html");
            exit();
        }

        $to = "youremail@domain.com"; // Your Email
        $subject = "New Message from Contact Form";
        $body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";
        $headers = "From: noreply@domain.com" . "\r\n";

        if (mail($to, $subject, $body, $headers)) {
            header("Location: contact.html");
            exit();
        } else {
            echo "Something went wrong. Please