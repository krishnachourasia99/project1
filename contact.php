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
    <!-- <link rel="stylesheet" href="contactpage.css"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" > -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}
.container {
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
    padding: 2em;
    text-align: center;
}
.sub-title{
    margin-bottom: 30px;
}
.form{
    width: 50%;
    margin: auto;
}
.contact-left {
flex-basis: 35%;
margin: auto;
}
.contact-right {
flex-basis: 35%;
}
.contact-left p {
font-size: large;
}
.contact-left p i {
color: #38B6FF;
margin-right: 15px;
font-size: 25px;
}
.social-icons {
margin-top: 30px;
}
.social-icons a {
text-decoration: none;
font-size: 30px;
margin-right: 15px;
color: #ababab;
display: inline-block;
transition: color 0.5s, transform 0.5s;
}
.social-icons a:hover {
color: #38B6FF;
transform: translateY(-5px);
}
form input,form textarea {
width: 100%;
border: 0;
outline: solid #38B6FF;
background:white;
padding: 10px;
margin: 15px ;
color: black;
font-size: 18px;
border-radius: 5px;
}
.btn-primary{
background-color:#38B6FF;
border-radius: 5px;
height: 35px;
width: 100px;
font-size: 18px;
margin-top: 228px;
margin-left: -45px;
}
    </style>
</head>


<body>
<?php include('header.php'); ?>
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title">Contact Me</h1>
                    <p>johanlalyadav@gmail.com</p>
                    <p>7509008289</p>
                    <div class="social-icons">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                    <form class="form">
                        <input type="text" name="Name" placeholder="Your Name" required>
                        <input type="email" name="Email" placeholder="Your Email" required>
                        <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                        <button type="submit" class="btn btn-primary ">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>