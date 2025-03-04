<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "krishna";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

//     // Get total registered users
//     $sqlTotalUsers = "SELECT COUNT(id) as totalUsers FROM customer";
//     $resultTotalUsers = $conn->query($sqlTotalUsers);
//     $rowTotalUsers = $resultTotalUsers->fetch_assoc();
//     $totalUsers = $rowTotalUsers['totalUsers'];

//     // Get total contacted users
//     $sqlTotalContactedUsers = "SELECT COUNT(id) as totalContactedUsers FROM contact";
//     $resultTotalContactedUsers = $conn->query($sqlTotalContactedUsers);
//     $rowTotalContactedUsers = $resultTotalContactedUsers->fetch_assoc();
//     $totalContactedUsers = $rowTotalContactedUsers['totalContactedUsers'];

//     // Get total subscriptions
//     $sqlTotalSubscriptions = "SELECT COUNT(id) as totalSubscriptions FROM subscribe";
//     $resultTotalSubscriptions = $conn->query($sqlTotalSubscriptions);
//     $rowTotalSubscriptions = $resultTotalSubscriptions->fetch_assoc();
//     $totalSubscriptions = $rowTotalSubscriptions['totalSubscriptions'];

//     // Get total orders
//     $sqlTotalOrders = "SELECT COUNT(id) as totalOrders FROM `order`";
//     $resultTotalOrders = $conn->query($sqlTotalOrders);
//     $rowTotalOrders = $resultTotalOrders->fetch_assoc();
//     $totalOrders = $rowTotalOrders['totalOrders'];
// //get total from total product
//     $sqlTotalProducts = "SELECT COUNT(id) as totalProducts FROM totalproduct";
//     $resultTotalProducts = $conn->query($sqlTotalProducts);
//     $rowTotalProducts = $resultTotalProducts->fetch_assoc();
//     $totalProducts = $rowTotalProducts['totalProducts'];

    
// // Get current year
// $currentYear = date('Y');

// // Query to get data for the current year
// $sql2 = "SELECT MONTH(date) as month, SUM(price_total) as total
//         FROM `order`
//         WHERE YEAR(date) = $currentYear
//         GROUP BY MONTH(date)";

// $result = $conn->query($sql2);

// // Fetch data
// $data = array();
// while ($row = $result->fetch_assoc()) {
//     $data[$row['month']] = $row['total'];
// }

// // Prepare data for the graph
// $labels = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
// $values = array();
// for ($i = 1; $i <= 12; $i++) {
//     $values[] = isset($data[$i]) ? $data[$i] : 0;
// }

// Generate graph using your preferred chart library (e.g., Chart.js, Google Charts, etc.)
// Example using Chart.js

?>
  
<?php
    // ... (Your PHP code remains unchanged)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: white;
            color: #333;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color:rgb(107, 10, 67);
            color: #fff;
            text-align: center;
            padding-top:5px;
            padding-left: 30%;
    display: flex;
        }
        header h1{
          
    margin: 0%;
}
header .button{
    padding-top: 8px;
    /* text-align: right; */
    padding-left: 30%;
    margin-bottom: 10px;
}

header .button button{
    height: 29px;
    width: 90px;
    border-radius: 50px;
}
.button button:hover{
    background-color:darkgrey;
}
        


        .sidenav {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.7);
            padding-top: 20px;
            padding-left: 10px;
            color: white;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 25px;
            
           /* Center items vertically in the sidenav */
        }

        .sidenav a {
            padding: 15px 8px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
            font-size: 20px;
        }
        .sidenav a.active {
            background-color: grey;
        }
       
    

        
        .dropdown-content {
            display: none;
            position: absolute;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
       

        .box {
            display: flex;
       
        }
        .box1 {
            display: flex;
       
        }
        footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    position: fixed;
    bottom: 0;
    width: 100%;
}

.table{
    width: 20%;
            
            border-collapse: collapse;
            margin-top: 20px;
            border:1px solid black;
}
th,
        td {
            padding: 15px;
            text-align: center;
           
        }

        th {
            background-color: #2ecc71;
            color: white;
        }

        td {
            background-color: white;
            padding:40px;
        }
     
        #t2{
margin:10px;
border:1px solid green;
        }
        #t3{
margin:10px;
border:1px solid blue;
        }
        #t4{
margin:10px;
margin-left: 410px;
border:1px solid #9f4e8e;
        }
        #t5{
margin:10px;
border:1px solid skyblue;
        }
        #t1{
            margin: 10px;
    margin-left: 300px;
    border:1px solid red;
        }
        .product-distribution{
            margin-top: 50px;
    margin-left: 280px;
    width: 37%;
    height: 50%;
    gap: 20px;
    display: flex;
           
        }
        
      
    </style>
     <title>adminpanel</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<header>
   <span><h1>Welcome to the Admin Panel</h1></span>
   <div class="button">
    <a href="logout.php"><button>logout</button></a>
    <a href="index.php"><button>home</button></div>
 

</header>

<div class="sidenav">
    <a href="adminpanel.php">dashboard</a>
    <a href="userdetail.php">Manage Users</a>
    <a href="purchase2.php">Manage purchase</a>
   
    <a href="salesana.php">Manage sales analysis</a>
    <a href="subs.php">Manage Subscription</a>
    <a href="usercontact.php">Manage Contacted User</a>
    <a href="order.php">Manage order</a>
    <a class="dropdown-heading" href="totalpro.php">Manage Products</a>
    <a href="sweetadmin.php">Sweets</a>
            <a href="snacksadmin.php">Snacks</a>
            <a href="bakeryadmin.php">bakery</a>
            <a href="dryadmin.php">dryfruits</a>
</div>
<div class="box">
<table class="table" id="t1">
        <thead>
            <tr>
                <th colspan="2" style="background-color: #db5069;; color: #fff;">Total Registered Users</th>
            </tr>
        </thead>
        <tbody>
            <tr>
               
                <td ><?php echo $totalUsers; ?></td>
            </tr>
        </tbody>
    </table >
    <!-- <table class="table" id="t2">
        <thead>
            <tr>
                <th colspan="2" style="background-color: #2ecc71; color: #fff;">contactCountBox</th>
            </tr>
        </thead>
        <tbody>
            <tr>
               
                <td ><?php echo $totalContactedUsers; ?></td>
            </tr>
        </tbody>
    </table> -->
       
<!-- <table  class="table" id="t3">
        <thead>
            <tr>
                <th colspan="2" style="background-color: blue; color: #fff;">Total Subscriptions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
               
                <td><?php echo $totalSubscriptions; ?></td>
            </tr>
        </tbody>
    </table  > -->
    </div>
    
    <div class="box1">
<table class="table" id="t4">
        <thead>
            <tr>
                <th colspan="2" style="background-color: #9f4e8e; color: #fff;">Total Orders</th>
            </tr>
        </thead>
        <tbody>
            <tr>
               
                <td><?php echo $totalOrders; ?></td>
            </tr>
        </tbody>
    </table>
    
    <table  class="table" id="t5">
        <thead>
            <tr>
                <th colspan="2" style="background-color: skyblue; color: #fff;">Total Products</th>
            </tr>
        </thead>
        <tbody>
            <tr>
               
                <td><?php echo $totalProducts; ?></td>
            </tr>
        </tbody>
    </table>
    </div>
       
 
    
   
<section class="display-product-table">
   <!-- Your product table HTML here -->
</section>

<!-- New section for the product distribution chart -->
<section class="product-distribution">
   <canvas id="productDistributionChart"></canvas>
   <canvas id="myChart" width="400" height="200"></canvas>
   
</section>


 <!-- 
<footer>
    <p>&copy; 2024 DSSERTDREAM</p>
</footer>  -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



<script>
document.addEventListener("DOMContentLoaded", function() {
   // Fetch data from totalproduct table
   fetch('totalproduct.php')
      .then(response => response.json())
      .then(data => {
         // Extract data for the chart
         const categories = Object.keys(data);
         const counts = Object.values(data);

         // Create a bar chart using Chart.js
         const ctx = document.getElementById('productDistributionChart').getContext('2d');
         const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
               labels: categories,
               datasets: [{
                  label: 'Products',
                  data: counts,
                  backgroundColor: [
                     'rgba(255, 99, 132, 0.5)', // Red
                     'rgba(54, 162, 235, 0.5)', // Blue
                     'rgba(255, 206, 86, 0.5)', // Yellow
                     'rgba(75, 192, 192, 0.5)' // Green
                  ],
                  borderColor: [
                     'rgba(255, 99, 132, 1)',
                     'rgba(54, 162, 235, 1)',
                     'rgba(255, 206, 86, 1)',
                     'rgba(75, 192, 192, 1)'
                  ],
                  borderWidth: 1
               }]
            },
            options: {
               scales: {
                  y: {
                     beginAtZero: true
                  }
               }
            }
         });
      })
      .catch(error => console.error('Error fetching data:', error));
});

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($labels); ?>,
                datasets: [{
                    label: 'current year earning',
                    data: <?php echo json_encode($values); ?>,
                    backgroundColor: '#ff6fce',
                    borderColor: 'pink',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
</script>



</body>

</html>