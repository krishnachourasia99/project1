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
    <link rel="stylesheet" href="stylesheet/ecommerce.css">
    <title> SharcComputer</title>
</head>

<body>
<?php include('header.php'); ?>

    <div class="slider-container">
        <div class="slider">
            <div class="slide active">
                <img src="images/SLIDER1.png" alt="Image 1">
            </div>
            <div class="slide">
                <img src="images/SLIDER2.png" alt="Image 2">
            </div>
            <div class="slide">
                <img src="images/SLIDER3.png" alt="Image 3">
            </div>
        </div>
        <button id="prevBtn">&#10094;</button>
        <button id="nextBtn">&#10095;</button>

        <div class="hero-msg">
            <p>You are on sharcComputer.
                <a href="index.php">Click here to go to sharcComputer.in</a>
            </p>
        </div>
    </div>
    <div class="shop-section">
        <div class="box1 box">
            <a href="desktop.php">
                <div class="box-content">
                    <h2> Desktops</h2>
                    <div class="box-img" style="background-image: url('images/desktop_main.jpg');"></div>
                    <p>See more</p>
            </a>
        </div>
    </div>
    <div class="box2 box">
        <a href="laptop.php">
            <div class="box-content">
                <h2> Laptops</h2>
                <div class="box-img" style="background-image: url('images/laptop_main.jpeg');"></div>
                <p>See more</p>
        </a>
    </div>
    </div>
    <div class="box3 box">
        <a href="processor.php">
            <div class="box-content">
                <h2>Processor</h2>
                <div class="box-img" style="background-image: url('images/amd-ryzen.jpg');"></div>
                <p>See more</p>
        </a>
    </div>
    </div>
    <div class="box4 box">
        <a href="cabinate.php">
            <div class="box-content">
                <h2> Cabinate</h2>
                <div class="box-img" style="background-image: url('images/cabinate_main.jpg');"></div>
                <p>See more</p>
        </a>
    </div>
    </div>
    <div class="box1 box">
        <a href="gamingsetup.php">
            <div class="box-content">
                <h2> Gaming setup</h2>
                <div class="box-img" style="background-image: url('images/gaming_main.jpg');"></div>
                <p>See more</p>
        </a>
    </div>
    </div>
    <div class="box2 box">
        <a href="motherboard.php">
            <div class="box-content">
                <h2> Motherboard & CPU</h2>
                <div class="box-img" style="background-image: url('images/motherboard_main.jpg');"></div>
                <p>See more</p>
        </a>
    </div>
    </div>
    <div class="box3 box">
        <a href="ram.php">
            <div class="box-content">
                <h2> RAM</h2>
                <div class="box-img" style="background-image: url('images/ram_main.jpg');"></div>
                <p>See more</p>
        </a>
    </div>
    </div>
    <div class="box4 box">
        <a href="harddisk.php">
            <div class="box-content">
                <h2>Hard Drives & SSD</h2>
                <div class="box-img" style="background-image: url('images/ssd_main.jpg');"></div>
                <p>See more</p>
        </a>
    </div>
    </div>
    <div class="box1 box">
        <a href="monitor.php">
            <div class="box-content">
                <h2> Monitor</h2>
                <div class="box-img" style="background-image: url('images/monitor_main.jpg');"></div>
                <p>See more</p>
        </a>
    </div>
    </div>
    <div class="box2 box">
        <a href="refurbished.php">
            <div class="box-content">
                <h2> Refurbished</h2>
                <div class="box-img" style="background-image: url('images/repair_main.jpeg');"></div>
                <p>See more</p>
        </a>
    </div>
    </div>
    <div class="box3 box">
        <a href="keyboard.php">
            <div class="box-content">
                <h2> KeyBoards & Mouse</h2>
                <div class="box-img" style="background-image: url('images/keyboard_main.jpg');"></div>
                <p>See more</p>
        </a>
    </div>
    </div>
    <div class="box4 box">
        <a href="others.php">
            <div class="box-content">
                <h2> Other Tools</h2>
                <div class="box-img" style="background-image: url('images/othertools.jpg');"></div>
                <p>See more</p>
        </a>
    </div>
    </div>
    </div>

    <?php include('footer.php'); ?>
    <script src="javascript/ecommerce.js"></script>
</body>

</html>