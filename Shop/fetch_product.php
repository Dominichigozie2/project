<?php
require 'conn.php'; // Adjust path as necessary

if (isset($_GET['id'])) {
    $productId = intval($_GET['id']);

    $query = "SELECT id, name, price, description, thumbnail FROM products WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $productId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
        $imagePath = '../digitals/uploads/thumbnails/' . basename($product['thumbnail']);
        $product['imagePath'] = file_exists($imagePath) ? $imagePath : 'assets/img/products/vender-upload-preview.jpg';

        echo json_encode($product);
    } else {
        echo json_encode(['error' => 'Product not found']);
    }
} else {
    echo json_encode(['error' => 'Invalid request']);
}
?>
