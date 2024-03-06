<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carrental";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username1 = $_POST['username'];
    $password1 = $_POST['password'];
echo "$password1";
    // Prepare SQL statement to fetch admin credentials
    $stmt = $conn->prepare("SELECT * FROM admins WHERE username = ?");
    $stmt->bind_param("s", $username1);
    $stmt->execute();

    // Check for SQL errors
    if ($stmt->error) {
        die("Error executing SQL query: " . $stmt->error);
    }

    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Admin found, verify password
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];
echo "$hashed_password";
        // Verify the password
        if (strcmp(trim($password1), $hashed_password)==0) {
            // Password is correct, set session and redirect
            $_SESSION['admin_logged_in'] = true;
            header("Location: index.php"); // Redirect to admin dashboard
            exit;
        } else {
            // Invalid password
            $error_message = "Invalid password";
        }
    } else {
        // Admin not found
        $error_message = "Admin not found";
    }

    $stmt->close();
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="styles.css"> <!-- Include your CSS file -->
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <?php if(isset($error_message)) { ?>
            <p class="error-message"><?php echo $error_message; ?></p>
        <?php } ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
