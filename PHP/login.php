<?php
require_once 'config.php';

// Get the email and password from the form submission
$email = $_POST['loginEmail'];
$password = $_POST['LoginPassword'];

// Prepare and execute a database query to fetch user data
$stmt = $connection->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

// Check if a matching user was found
if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
    
    // Verify the password
    if (password_verify($password, $user['password'])) {
        // Redirect to the editor.php page
        // header("Location: editor.php");
        echo "Login successful";
        exit();
    }
}

// If the credentials are invalid, redirect back to the login page
// header("Location: index.php#login-remake");
echo "Login failed";
exit();

$stmt->close();
$connection->close();
?>
