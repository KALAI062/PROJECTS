<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Admin Dashboard</h2>
        <a href="logout.php" class="btn btn-danger">Logout</a>
        <h3>Add New Product</h3>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Product Name" required class="form-control"><br>
            <textarea name="description" placeholder="Description" required class="form-control"></textarea><br>
            <input type="number" name="price" placeholder="Price" required class="form-control"><br>
            <input type="file" name="image" required class="form-control"><br>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
<h3 class="mt-4">Products</h3>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            <?php
            $result = $conn->query("SELECT * FROM products");
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['price']}</td>
                    <td><img src='uploads/{$row['image']}' width='50'></td>
                    <td>
                        <a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
                    </td>
                </tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
