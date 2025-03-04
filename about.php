<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    $isLoggedIn = true;
} else {
    $isLoggedIn = false;
}

// Handle logout
if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - SharcComputer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> <!-- Font Awesome CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h1 {
            text-align: center;
            color: #009688;
        }

        p {
            line-height: 1.6;
            margin-bottom: 10px;
        }

        ul {
            list-style: none;
            padding: 0;
            margin-left: 20px;
        }

        ul li {
            margin-bottom: 5px;
        }

        .fa-check-circle {
            color: #009688;
            margin-right: 5px;
        }
    </style>
</head>
<?php include('header.php'); ?>
<body>  

    <div class="container">
        <h1>About Us</h1>
        <p><img src="" alt=""></p>
        <p>Welcome to Your Computer Shop! We are passionate about technology and committed to providing top-quality products and services to our customers.</p>
        <p>Our journey began in 2000 when Johanlal Yadav decided to create a space where tech enthusiasts could find everything they need. Since then, we've grown into a trusted destination for computer hardware, software, and accessories.</p>
        <p>Why choose us?</p>
        <ul>
            <li style="color: #009688;"><i class="fas fa-check-circle"></i> Wide selection of products from leading brands</li>
            <li style="color: #009688;"><i class="fas fa-check-circle"></i> Knowledgeable staff ready to assist you</li>
            <li style="color: #009688;"><i class="fas fa-check-circle"></i> Competitive prices and regular discounts</li>
            <li style="color: #009688;"><i class="fas fa-check-circle"></i> Fast and reliable shipping</li>
        </ul>
        <p>Thank you for choosing Your Computer Shop. We look forward to serving you!</p>
    </div>
</body>
<?php include('footer.php'); ?>
</html>
