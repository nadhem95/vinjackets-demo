<?php 
session_start();
if(!isset($_SESSION['email'])){
    header('location:login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VINJACKETS</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <header>
        <h1>VINJACKETS</h1>
    </header>

    <section class="product-container">
        <?php
        include 'dbconn.php';
        $sql = "SELECT `id`, `name`, `price`, `stock_quantity`, `image_path` FROM `php_project`.`products`";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='product-card'>";
                echo "<img src='product_images/{$row['image_path']}' alt='{$row['name']}' class='product-image'>";
                echo "<h3 class='product-name'>{$row['name']}</h3>";
                echo "<p class='product-price'>\${$row['price']}</p>";
                echo "<div class='product-buttons'>";
                echo "<button class='add-to-cart-button'>Add to Cart</button>";
                echo "<button class='buy-now-button'>Buy Now</button>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>
    </section>
    <a href="logout.php" class="deconnexion">Se Deconnecter</a>
    <footer>
        &copy; 2023 Shopping Website
    </footer>
</body>
</html>
