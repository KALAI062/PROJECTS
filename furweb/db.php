<?php
$host = "localhost";
$user = "root";
$password = "";
$conn = new mysqli($host, $user, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->query("CREATE DATABASE IF NOT EXISTS myshop");
$conn = new mysqli($host, $user, $password, "shop");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
