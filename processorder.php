<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);
    $date = htmlspecialchars($_POST['date']);
    $notes = htmlspecialchars($_POST['notes']);

    // You can add code to save the appointment data to a database or send an email

    echo "Thank you, $name. Your appointment for $service on $date has been submitted.";
} else {
    echo "Invalid request.";
}
?>

