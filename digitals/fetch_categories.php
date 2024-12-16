<?php
// Database connection
include 'conn.php';

// Handle parentId parameter
$parentId = isset($_GET['parentId']) ? intval($_GET['parentId']) : null;

// Fetch categories
$query = "SELECT categoryId, name, parentId FROM categories WHERE parentId " . ($parentId === null ? "IS NULL" : "= $parentId");

// Remove the debug output in production
// Uncomment the following line for debugging only
// echo "Debug: $query\n";

$result = mysqli_query($conn, $query);

if (!$result) {
    header('Content-Type: application/json');
    echo json_encode(['error' => mysqli_error($conn)]);
    exit;
}

$categories = [];
while ($row = mysqli_fetch_assoc($result)) {
    $categories[] = $row;
}

header('Content-Type: application/json');
echo json_encode($categories);
exit;