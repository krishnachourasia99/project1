<?php
// ... (your existing code)

    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "krishna";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm = $_POST["confirm"];
    $contact = $_POST["contact"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    // Check if email already exists
    $checkEmailQuery = "SELECT * FROM customer WHERE email = '$email'";
    $result = $conn->query($checkEmailQuery);

    if ($result->num_rows > 0) {
        echo "<script>alert('This email is already registered. Please use a different email.')</script>";
    } elseif ($password !== $confirm) {
        echo "<script>alert('Password and confirm password do not match.')</script>";
    } else {
        // Hash the password before storing it in the database
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        // Insert user data into the database
        $insertQuery = "INSERT INTO customer (username, email, password, contact, address, city, state) 
                        VALUES ('$username', '$email', '$hashedPassword', '$contact', '$address', '$city', '$state')";
        
        if ($conn->query($insertQuery) === TRUE) {
            echo "<script>
                    alert('Registration successful. Click OK to proceed to login.');
                    window.location.href = 'login.php';
                  </script>";   
            exit();
        } else {
            echo "Error: " . $insertQuery . "<br>" . $conn->error;
        }
    }
}

// ... (your existing code)
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  
</body>
</html>
    <div class="wrapper">
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <h1>Sign Up</h1>
    <div class="input-box">
      <input type="text" name="username" placeholder="Username" required>
    </div>
    <div class="input-box">
      <input type="text" name="email" placeholder="Email" required>
    </div>
    <div class="input-box">
      <input type="password" name="password" placeholder="password" required>
    </div>
    <div class="input-box">
      <input type="password"  name="confirm" placeholder=" confirm password" required>
    </div>
    <div class="input-box">
  <input type="text" name="contact" placeholder="Contact Number" required>
</div>
<div class="input-box">
  <input type="text" name="address" placeholder="Address" required>
</div>
<div class="input-box">
  <input type="text" name="city" placeholder="City" required>
</div>
<div class="input-box">
  <input type="text" name="state" placeholder="State" required>
</div>
    <button type="submit" name="save"class="btn">create account</button>
    <div class="register-link">
      <p> <a href="login.php">Already have an account?</a></p>
      </div>
  </form>
</div>
</body>
</html>