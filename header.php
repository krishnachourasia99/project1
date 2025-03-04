<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet/ecommerce.css">
    <title>Your E-Commerce Store</title>
</head>
<body>
    <header>
    <div class="navbar">
            <div class="nav-logo border">
                <div class="logo" style="margin: 0px;">
                    <a href="index.php">
                        <img src="images/logo.png" alt="ohh" style=" height: 185px;
    width: 225px;
    margin-top: -55px">
                    </a>
                </div>
            </div>
            <div class="panel-options">
                <p><a href="index.php">Home</a></p>
                <p><a href="about.php">About Us</a></p>
                <p><a href="index.php" onclick="scrollToMiddle()">Services</a></p>
                <!-- <p><a href="contact.php">Contact Us</a></p> -->
            </div>

            <div class="nav-signin">
            <?php if ($isLoggedIn): ?>
                <?php if ($username == 'admin'): ?>
                    <div class="psignup" style="margin-left: 200px;"><a href="logout.php"><input id="click" type="button" value="Logout"></a></div>
                <div class="psignin"><a href="profile.php"><input class="signin" type="button" value="profile"></a></div>
                <!-- <div class="psignin"><a href="cart.php"><input class="signin" type="button" value="Cart"></a></div> -->
                <div class="psignin"><a href="desktopAdmin.php"><input class="signin" type="button" value="Admin Panel"></a></div>
                <?php else: ?>
                <div class="psignup" style="margin-left: 200px;"><a href="logout.php"><input id="click" type="button" value="Logout"></a></div>
                <div class="psignin"><a href="profile.php"><input class="signin" type="button" value="profile"></a></div>
                <div class="psignin"><a href="cart.php"><input class="signin" type="button" value="Cart"></a></div>
                <?php endif; ?>
                <?php else: ?>
                <div class="psignup"><a href="register.php"><input  type="button" value="Sign Up"></a></div>
                <div class="psignin"><a href="login.php"><input class="signin" type="button" value="Sign In"></a></div>
            <?php endif; ?>
            </div>
        </div>
    </header>
</body>
</html>