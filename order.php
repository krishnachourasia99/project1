<?php


// Include your database connection code here if not already included

// Fetch and display contacted users from the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "krishna";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `order`";
$result = $conn->query($sql);

$contactedUsers = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $contactedUsers[] = $row;
    }
}

$conn->close();

// Include your HTML and styling for the "Manage Contacted Users" page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage orders</title>
    <link rel="stylesheet" href="stylesheet/mainadmin.css">
</head>
<body>
   <header>
   <span><h1>Welcome to Admin Panel </h1></span>
   <div class="button">
   <a href="logout.php"><button>logout</button></a>
    <a href="index.php"><button>home</button></div>
</header>
<div class="sidenav">
            <a href="order.php">Manage order</a>
            <a href="desktopAdmin.php">Desktop</a>
            <a href="laptopAdmin.php">Laptop</a>
            <a href="processorAdmin.php">Processor</a>
            <a href="cabinateAdmin.php">Cabinate</a>
            <a href="gamingsetupAdmin.php">Gaming Setup</a>
            <a href="motherboardAdmin.php">Motherboard</a>
            <a href="ramAdmin.php">Ram</a>
            <a href="harddiskAdmin.php">Hardisk</a>
            <a href="monitorAdmin.php">Monitor</a>
            <a href="refurbishedAdmin.php">Refurbished</a>
            <a href="keyboardAdmin.php">Keryboard & mouse</a>
            <a href="othersAdmin.php">Other Tools</a>
</div>
<div class="box">
<h1 style="text-align: center;">MANAGE ORDER</h1>

<table>

    <thead>
        <tr>
        <th>Id</th>
       
            <th>Name</th>
            <th>number</th>
            <th>email</th> 
            <th>method</th> 
            <th>city</th> 
            <th>state</th> 
            <th>total_products</th> 
            <th>price_total</th> 
            <th>date</th> 
                               
        </tr>
    </thead>
    <tbody>
        <?php foreach ($contactedUsers as $user): ?>
            <tr>
            <td><?php echo $user['id']; ?></td>
           
                <td><?php echo $user['name']; ?></td>   
                <td><?php echo $user['number']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['method']; ?></td>
                <td><?php echo $user['city']; ?></td>
                <td><?php echo $user['state']; ?></td>
                <td><?php echo $user['total_products']; ?></td>
                <td><?php echo $user['price_total']; ?></td>
                <td><?php echo $user['date']; ?></td>                         
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
        </div>
</body>
</html>
