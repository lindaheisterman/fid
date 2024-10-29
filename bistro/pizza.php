<!DOCTYPE html>
<html>
<head>
    <title>Pizza Order Confirmation</title>
</head>
<body>

<?php
    // This script processes form data sent with POST.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve and sanitize form data
        $name = htmlspecialchars($_POST["customername"]);
        $address = htmlspecialchars($_POST["address"]);
        $telephone = htmlspecialchars($_POST["telephone"]);
        $email = htmlspecialchars($_POST["email"]);
        $instructions = htmlspecialchars($_POST["instructions"]);
        
        // Output confirmation
        echo "<h1>Thank you, $name!</h1>";
        echo "<p>Your order has been received and will be delivered to $address.</p>";
        echo "<p>We’ll call you at $telephone if needed.</p>";
    } else {
        echo "<p>Form not submitted correctly.</p>";
    }
?>

</body>
</html>
