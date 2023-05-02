<?php
// Start a new session
session_start();

// Get the form data
$userName = $_POST['userName'];
$passWord = $_POST['passWord'];

try {
    // Connect to the database
    require "database/dbConnect.php";

    $sql = "SELECT byte_username, ";
    $sql .= "byte_password ";
    $sql .= "FROM byteme_users ";
    $sql .= "WHERE byte_username=:userName ";
    $sql .= "AND byte_password=:passWord";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':userName', $userName);
    $stmt->bindParam(':passWord', $passWord);
    
    $stmt->execute();

    // Check if a row was returned
    if ($stmt->rowCount() == 1) {
        // User was found
        // Create a session variable for the user
        $_SESSION['username'] = $userName;
        // Redirect to the admin page
        header("Location: admin.php");
    } else {
        // User not found, display an error message
        echo "Invalid username or password";
    }

    // Close the database connection
    $conn = null;
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
