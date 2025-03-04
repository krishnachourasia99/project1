<?php
session_start();

// Include the configuration file if needed
@include 'config.php';

// Clear the cart by removing the cart session variable
unset($_SESSION['cart']);

// Destroy the entire session
session_destroy();

// Redirect to the home page or any other page after logout
header('location: index.php'); // Replace 'dessertdream.php' with the desired page URL
exit();
?>