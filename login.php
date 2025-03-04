<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<?php
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "krishna";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Check if email and password match
        $checkUserQuery = "SELECT * FROM customer WHERE email = '$email'";
        $result = $conn->query($checkUserQuery);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verify the entered password with the hashed password in the database
          
            if (password_verify($password, $user["password"])) {
                session_start();
               
                $_SESSION["username"] = $user["username"];
                $_SESSION["email"] = $user["email"];
                $_SESSION["contact"] = $user["contact"];
                $_SESSION["address"] = $user["address"];
                $_SESSION["city"] = $user["city"];
                $_SESSION["state"] = $user["state"];
                
                if ($email == "admin@gmail.com" && $password == "1233") {
                    header("Location: desktopadmin.php"); // Redirect to admin panel
                    exit();
                } else {
                    header("Location: index.php"); // Redirect to regular user page
                    exit();
                }
            } else {
                echo "<script>alert('Incorrect password. Please try again.')</script>";
            }
        } else {
            echo "<script>alert('Email not found. Please register or try a different email.')</script>";
        }
    }
    $conn->close();
    ?>
      
<div class="wrapper">
  
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
             <h1>USER LOGIN</h1>
               <div class="input-box">
               <input type="text" name="email" placeholder="email" required>
               </div>
               <div class="input-box">
               <input type="password" name="password" placeholder="password" required>
               </div>
               <button type="submit" name="submit" class="btn">login</button>
               <div class="remember-forget">
               <label>
               <input type="checkbox">"remember me"
               </label>
              
               </div>
               <div class="register-link">
               <p> <a href="register.php">Create new account</a>/<a href="index.php"> Back</a></p>
               </div>
             
              </form>
      
  </div>
  </body>
  </html>
