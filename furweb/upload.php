<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($image);
if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        $sql = "INSERT INTO products (name, description, price, image) VALUES ('$name', '$description', '$price', '$image')";
        if ($conn->query($sql) === TRUE) {
            header("Location: dashboard.php");
            exit;
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Failed to upload image.";
    }
}
?>
