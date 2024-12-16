<?php
include("conn.php");

// Get product ID from request
$product_id = intval($_GET['id']);

// Fetch product details from the database
$query = "SELECT name, price, description FROM products WHERE id = $product_id";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $product = $result->fetch_assoc();
    echo json_encode($product);
} else {
    echo json_encode(['error' => 'Product not found']);
}


if (isset($_GET['id'])) {
    $product_id = intval($_GET['id']); // Ensure it's an integer for security
    echo "The product ID is: " . $product_id;
} else {
    echo "No ID provided.";
}


$conn->close();
?>
