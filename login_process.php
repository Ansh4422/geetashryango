<?php
session_start();

include("Admin/conn.php");

// Retrieve form data
$email = $_POST['email'];
$password = $_POST['password'];

// Fetch the user from the database
$sql = "SELECT * FROM admin WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Check the password
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password_hash'])) {
        // Password is correct
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_email'] = $row['email'];
        header("Location: Admin/index.php"); // Redirect to the admin dashboard
        exit();
    } else {
        // Invalid password
        echo "Invalid email or password.";
    }
} else {
    // No user found
    echo "Invalid email or password.";
}

$conn->close();
?>
