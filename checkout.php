<?php
// Include your config.php file
@include 'config.php';

if(isset($_POST['order_btn'])){
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $method = $_POST['method'];
   
    $city = $_POST['city'];
    $state = $_POST['state'];
  

    $cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
    $price_total = 0;
    $product_name = array(); // Initialize an empty array
    if(mysqli_num_rows($cart_query) > 0){
        while($product_item = mysqli_fetch_assoc($cart_query)){
            $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .') ';
            $product_price = 0; // Initialize product price to 0
            if (is_numeric($product_item['price']) && is_numeric($product_item['quantity'])) {
                $product_price = $product_item['price'] * $product_item['quantity'];
            }
            $price_total += $product_price;
        }
    }
    $order_id = uniqid('ORDER');
    $total_product = implode(', ',$product_name);
    $detail_query = mysqli_query($conn, "INSERT INTO `order`(name, number, email, method, city, state,  total_products, price_total) VALUES('$name','$number','$email','$method','$city','$state','$total_product','$price_total')") or die('query failed');

    if($cart_query && $detail_query){
        echo "
        <div class='order-message-container'>
            <div class='message-container'>
                <h3>Thank you for shopping!</h3>
                
                   
               
                <div class='customer-details'>
                <p>Your order ID: <span>$order_id</span></p>
                <p>Your name: <span>".$total_product."</span></p>
                <p>Your name: <span>".$price_total."</span></p>
                    <p>Your name: <span>".$name."</span></p>
                    <p>Your number: <span>".$number."</span></p>
                    <p>Your email: <span>".$email."</span></p>
                    <p>Your address: <span>".$city.", ".$state.", </span></p>
                    <p>Your payment mode: <span>".$method."</span></p>
                    
                </div>
                <a href='index.php' class='btn'>Continue Shopping</a>
            </div>
        </div>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- <link rel="stylesheet" href="stylesheet/admin.css"> -->
</head>
<style>
    /* admin.css */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f8f8f8;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 20px auto;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

.checkout-form {
    text-align: center;
}

.heading {
    color: #009688;
    font-size: 24px;
    font-weight: bold;
}

.flex {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.inputBox {
    width: 48%;
    margin-bottom: 15px;
}

.inputBox span {
    display: block;
    margin-bottom: 5px;
    color: #555;
    font-weight: bold;
}

input[type="text"],
input[type="number"],
input[type="email"],
select {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.btn {
    background-color: #009688;
    color: #fff;
    padding: 10px 15px;
    text-decoration: none;
    display: inline-block;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
}

.display-order {
    text-align: center;
    margin-bottom: 20px;
}

.display-order span {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.grand-total {
    font-weight: bold;
    font-size: 18px;
    color: #009688;
}

.order-message-container {
    text-align: center;
}

.message-container {
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    border-radius: 5px;
}

.customer-details {
    margin-top: 20px;
}

.customer-details p {
    margin-bottom: 10px;
}

.customer-details span {
    font-weight: bold;
    color: #009688;
}

</style>
<body>

<div class="container">
    <section class="checkout-form">
        <h1 class="heading">enter you details for order delivery</h1>
        <form action="" method="post">
        <div class="display-order">
                <?php
                $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
                $total = 0;
                $grand_total = 0;
                if(mysqli_num_rows($select_cart) > 0){
                    while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                        $total_price = $fetch_cart['price'] * $fetch_cart['quantity'];
                        $grand_total += $total_price;
                ?>
                        <span><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
                <?php
                    }
                }
                // Assuming 1 USD = 74.5 INR (You need to update this with the current conversion rate)
                $conversion_rate = 1;
                // Convert grand total to Indian Rupees
                $grand_total_inr = $grand_total * $conversion_rate;
                ?>
                <span class="grand-total">Grand Total: ₹<?= number_format($grand_total_inr, 2); ?></span>
            </div>
            <div class="flex">
            
         <div class="inputBox">
            <span>your name</span>
            <input type="text" placeholder="enter your name" name="name" required>
         </div>
         <div class="inputBox">
            <span>your number</span>
            <input type="number" placeholder="enter your number" name="number" required>
         </div>
         <div class="inputBox">
            <span>your email</span>
            <input type="email" placeholder="enter your email" name="email" required>
         </div>
         <div class="inputBox">
            <span>payment method</span>
            <select name="method">
               <option value="cash on delivery" selected>cash on delivery</option>
               
            </select>
         </div>
        
         <div class="inputBox">
            <span>full address</span>
            <input type="text" placeholder="e.g. flatno/street/city" name="city" required>
         </div>
         <div class="inputBox">
            <span>state</span>
            <input type="text" placeholder="e.g. MP" name="state" required>
         </div>
        
      </div>
      <input type="submit" value="order now" name="order_btn" class="btn">
   </form>

</section>

</div>
            
        </form>
    </section>
</div>
//</body>
</html>
