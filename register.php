<?php
// Handle user registration
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate and store user data in the database
    // (Database connection code goes here)

    // Redirect to login page or homepage
    header('Location: login.php');
    exit();
}
?>

<!-- Registration Form in HTML -->
<form method="post" action="register.php">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Register</button>
</form>
