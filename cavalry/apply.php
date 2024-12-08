<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Canine Cavalry</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="stylesheet.css">
</head>
  
<body>

<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["customername"]);
    $address = htmlspecialchars($_POST["address"]);
    $telephone = htmlspecialchars($_POST["telephone"]);
    $email = htmlspecialchars($_POST["email"]);
    $branch = htmlspecialchars($_POST["branch"]);
    $reason = htmlspecialchars($_POST["reason"]);

   
    if (empty($name) || empty($address) || empty($telephone) || empty($email) || empty($branch) || empty($reason)) {
        echo "<p>All fields are required. Please go back and complete the form.</p>";
        exit();
    }

 
    echo "<h1>Thank you, $name!</h1>";
    echo "<p>Your application has been received. Please allow 4-6 weeks for review. A Canine Cavalry team member will contact you after review to discuss the next steps.</p>";
    echo "<p>We’ll call you at $telephone.</p>";
} else {
    echo "<p>Form not submitted correctly.</p>";
}
?>


</body>
</html>
