<?php
session_start();
@include 'config.php';



//Check if the user is logged in
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
if (isset($_POST['add_to_cart'])) {
    if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
        echo "<script>alert('Please login first to add the product to cart.')</script>";
    } else {
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_POST['product_image'];
        $product_quantity = 1;

        $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
        echo "<script>alert('Product added to the cart successfully')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet/categorystyle.css">
    <title>Products</title>

</head>

<body>

    <?php
    if (isset($message)) {
        foreach ($message as $message) {
            echo '<div class="message"><span>' . $message . '</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
        };
    };

    ?>
    <section class="navigation">
        <?php include('header.php'); ?>
    </section>


    <section class="home" id="home">
        <div class="homeContent">

            <h2>CABINATE</h2>

        </div>
    </section>

    <section class="products">
        <div class="box-container">
            <?php
            $select_products = mysqli_query($conn, "SELECT * FROM `cabinateAdmin`");
            if (mysqli_num_rows($select_products) > 0) {
                while ($fetch_product = mysqli_fetch_assoc($select_products)) {
            ?>
                    <div class="box">
                        <img src="images/<?php echo htmlspecialchars($fetch_product['image']); ?>" alt="">
                        <h3><?php echo htmlspecialchars($fetch_product['name']); ?></h3>
                        <h2><?php echo htmlspecialchars($fetch_product['disc']); ?></h2>
                        <div class="price">Rs.<?php echo htmlspecialchars($fetch_product['price']); ?>/-</div>
                        <form action="" method="post">
                            <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($fetch_product['name']); ?>">
                            <input type="hidden" name="product_price" value="<?php echo htmlspecialchars($fetch_product['price']); ?>">
                            <input type="hidden" name="product_disc" value="<?php echo htmlspecialchars($fetch_product['disc']); ?>">
                            <input type="hidden" name="product_image" value="<?php echo htmlspecialchars($fetch_product['image']); ?>">

                            <input type="submit" class="btn" value="add to cart" name="add_to_cart">
                        </form>
                    </div>
            <?php
                }
            }
            ?>

        </div>
    </section>
    <?php include('footer.php'); ?>
</body>
</html>