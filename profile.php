
<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    $isLoggedIn = true;
} else {
    $isLoggedIn = false;
}
if (isset($_SESSION["email"])) {
    $email = $_SESSION["email"];
    $isLoggedIn = true;
} else {
    $isLoggedIn = false;
}
if (isset($_SESSION["contact"])) {
    $contact = $_SESSION["contact"];
    $isLoggedIn = true;
} else {
    $isLoggedIn = false;
}if (isset($_SESSION["address"])) {
    $address = $_SESSION["address"];
    $isLoggedIn = true;
} else {
    $isLoggedIn = false;
}if (isset($_SESSION["city"])) {
    $city = $_SESSION["city"];
    $isLoggedIn = true;
} else {
    $isLoggedIn = false;
}if (isset($_SESSION["state"])) {
    $state = $_SESSION["state"];
    $isLoggedIn = true;
} else {
    $isLoggedIn = false;
}
// Handle logout
if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: cabinate.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Details</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f3f3f3; /* Light gray background */
        margin: 0;
        padding: 0;
    }

    form {
        width: 80%;
        max-width: 600px;
        margin: 0 auto;
        padding: 2rem;
        border-radius: 8px;
        background-color: #fff; /* White background */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    }

    h2 {
        text-align: center;
        font-size: 2rem;
        margin-bottom: 2rem;
    }

    label {
        font-size: 1.2rem;
        color: #333; /* Dark gray color */
    }

    input {
        width: calc(100% - 20px);
        background-color: #f9f9f9; /* Light gray input background */
        font-size: 1rem;
        color: #333; /* Dark gray color */
        border-radius: 4px;
        margin: 0.5rem 0;
        padding: 0.5rem;
        border: 1px solid #ccc; /* Light gray border */
        box-sizing: border-box;
        transition: border-color 0.3s;
    }

    input:focus {
        outline: none;
        border-color: #4caf50; /* Green border when focused */
    }

    button {
        background-color: #4caf50; /* Green button */
        color: #fff; /* White text color */
        cursor: pointer;
        border: none;
        border-radius: 4px;
        font-size: 1rem;
        padding: 0.7rem 1.5rem;
        text-transform: uppercase;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #45a049; /* Darker green on hover */
    }

    .fle {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .inputbox {
        flex: 1 1 calc(50% - 0.5rem);
    }
</style>

</head>
<body> 
    <h2>Personal Details</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="fle">
        <div class="inputbox">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $username; ?>" readonly>
        </div><div class="inputbox">
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $email; ?>" readonly>
        </div><div class="inputbox">
        <label for="contact">Contact:</label>
        <input type="tel" name="contact" value="<?php echo $contact; ?>" required>
        </div><div class="inputbox">
        <label for="address">Address:</label>
        <input type="text" name="address" value="<?php echo $address; ?>" required>
        </div><div class="inputbox">
        <!-- <label for="city">City:</label>
        <input type="text" style="width:91%;" name="city" value="<?php echo $city; ?>" required>
        </div><div class="inputbox">
        <label for="state">State:</label>
        <input type="text" name="state" value="<?php echo $state; ?>" required>
        </div> -->
    </div>
    <button><a href="index.php">back to home</a></button>
      
       
    </script>
</body>
</html>
