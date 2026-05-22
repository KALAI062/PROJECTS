<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "admin123") {
        $_SESSION['admin'] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Invalid credentials!";
    }
}
?>

<form method="post"><h1>Admin Login</h1>
   USERNAME <input type="text" name="username" placeholder="Username" required><br><br>
    PASSWORD<input type="password" name="password" placeholder="Password" required><br><br>
       <button type="submit">Login</button>
</form>

