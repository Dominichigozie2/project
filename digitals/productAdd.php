<?php
// Database connection
$host = 'localhost'; // Your database host
$db = 'digitals'; // Your database name
$user = 'root'; // Your database username
$pass = ''; // Your database password

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    echo json_encode(['status' => 'error', 'message' => 'Connection failed: ' . $conn->connect_error]);
    exit;
}

// Define allowed file extensions
$allowed_extensions = [
    'txt', 'pdf', 'doc', 'docx', 'epub', 'iba', // Notes
    'jpg', 'jpeg', 'png', 'gif', 'svg', 'bmp', 'tiff', // Images
    'mp4', 'avi', 'mkv', 'mov', 'wmv', 'flv', // Videos
    'mp3', 'wav', 'aac', 'flac', 'ogg', // Audio
    'exe', 'dmg', 'iso', 'msi', 'deb', // Software
    'apk', 'ipa', 'app', 'jar', // Applications
    'psd', 'ai', 'indd', 'figma', 'sketch', 'xd', 'dwg', 'cdr', // Designs
    'zip', '7z', 'rar'  // Packages
];

// Define maximum file sizes for each type
$max_file_sizes = [
    'note' => 40 * 1024 * 1024, // 40 MB
    'image' => 10 * 1024 * 1024, // 10 MB
    'video' => 500 * 1024 * 1024, // 500 MB
    'audio' => 100 * 1024 * 1024, // 100 MB
    'software' => 1 * 1024 * 1024 * 1024, // 1 GB
    'application' => 300 * 1024 * 1024, // 300 MB
    'design' => 50 * 1024 * 1024, // 50 MB
    'package' => 10 * 1024 * 1024 * 1024 // 10 GB
];

// Set upload directories
$upload_dirs = [
    'note' => __DIR__ . '/uploads/note/',
    'image' => __DIR__ . '/uploads/images/',
    'video' => __DIR__ . '/uploads/videos/',
    'audio' => __DIR__ . '/uploads/audios/',
    'software' => __DIR__ . '/uploads/softwares/',
    'application' => __DIR__ . '/uploads/applications/',
    'design' => __DIR__ . '/uploads/designs/',
    'package' => __DIR__ . '/uploads/packages/',
    'thumbnail' => __DIR__ . '/uploads/thumbnails/'
];

// Ensure the upload directories exist
foreach ($upload_dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true); // Create the directory if it doesn't exist
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Generate a unique random seven-digit number for productId
    $productId = rand(1000000, 9999999);

    // Get product details from the form
    $product_name = $_POST['productName'] ?? '';
    $price = $_POST['price'] ?? 0;
    $discount = $_POST['discount'] ?? 0;
    $category = $_POST['category'] ?? 0;
    $short_description = $_POST['shortDescription'] ?? '';
    $full_description = $_POST['description'] ?? '';
    $product_tags = $_POST['productTags'] ?? '';
    $delivery_method = $_POST['deliveryMethod'] ?? 'direct download';
    $license_key = $_POST['licenseKey'] ?? '';

    function generateSlug($product_name) {
        // Convert the string to lowercase
        $slug = strtolower($product_name);
    
        // Replace special characters with their ASCII equivalents
        $slug = iconv('UTF-8', 'ASCII//TRANSLIT', $slug);
    
        // Remove any characters that are not alphanumeric, spaces, or hyphens
        $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);
    
        // Replace spaces with hyphens
        $slug = preg_replace('/[\s-]+/', '-', $slug);
    
        // Trim hyphens from the beginning and end
        $slug = trim($slug, '-');
    
        return $slug;
    }
    $slug = generateSlug($product_name);
    // Handle thumbnail upload
    if (isset($_FILES['thumbnail'])) {
        $thumbnail = $_FILES['thumbnail'];
        $thumbnail_name = $thumbnail['name'];
        $thumbnail_tmp = $thumbnail['tmp_name'];
        $thumbnail_error = $thumbnail['error'];

        // Check for thumbnail upload errors
        if ($thumbnail_error !== UPLOAD_ERR_OK) {
            echo json_encode(['status' => 'error', 'message' => 'Error uploading thumbnail: ' . $thumbnail_error]);
            exit;
        }

        // Get thumbnail extension
        $thumbnail_extension = strtolower(pathinfo($thumbnail_name, PATHINFO_EXTENSION));
        if (!in_array($thumbnail_extension, ['jpg', 'jpeg', 'png', 'gif'])) { // Corrected allowed extensions
            echo json_encode(['status' => 'error', 'message' => 'Error: Only JPG, JPEG, PNG, and GIF files are allowed for thumbnails.']);
            exit;
        }

        // Generate a unique name for the thumbnail
        $thumbnail_new_name = uniqid('thumb_', true) . '.' . $thumbnail_extension;
        move_uploaded_file($thumbnail_tmp, $upload_dirs['thumbnail'] . $thumbnail_new_name);
        $thumbnail_url = $upload_dirs['thumbnail'] . $thumbnail_new_name;
    } else {
        echo json_encode(['status' => 'error', 'message' => 'No thumbnail uploaded.']);
        exit;
    }

    // Handle product file upload
    if (isset($_FILES['productFile'])) {
        $file = $_FILES['productFile'];
        $file_name = $file['name'];
        $file_tmp = $file['tmp_name'];
        $file_size = $file['size'];
        $file_error = $file['error'];

        // Check for file upload errors
        if ($file_error !== UPLOAD_ERR_OK) {
            echo json_encode(['status' => 'error', 'message' => 'Error uploading file: ' . $file_error]);
            exit;
        }

        // Get file extension
        $file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        // Check if the file extension is allowed
        if (!in_array($file_extension, $allowed_extensions)) {
            echo json_encode(['status' => 'error', 'message' => 'Error: Only ' . implode(", ", $allowed_extensions) . ' files are allowed.']);
            exit; // Stop further execution
        }

        // Determine file type and check size limits
        $file_type = '';
        if (in_array($file_extension, ['txt', 'pdf', 'doc', 'docx', 'epub', 'iba'])) {
            $file_type = 'note';
        } elseif (in_array($file_extension, ['jpg', 'jpeg', 'png', 'gif', 'svg', 'bmp', 'tiff'])) {
            $file_type = 'image';
        } elseif (in_array($file_extension, ['mp4', 'avi', 'mkv', 'mov', 'wmv', 'flv'])) {
            $file_type = 'video';
        } elseif (in_array($file_extension, ['mp3', 'wav', 'aac', 'flac', 'ogg'])) {
            $file_type = 'audio';
        } elseif (in_array($file_extension, ['exe', 'dmg', 'iso', 'app', 'msi'])) {
            $file_type = 'software';
        } elseif (in_array($file_extension, ['apk', 'ipa', 'jar'])) {
            $file_type = 'application';
        } elseif (in_array($file_extension, ['psd', 'ai', 'indd', 'figma', 'sketch', 'xd', 'dwg', 'cdr'])) {
            $file_type = 'design';
        } else {
            $file_type = 'package';
        }

        // Check file size against limits
        // if ($file_size > $max_file_sizes[$file_type]) {
        //     echo json_encode(['status' => 'error', 'message' => 'File too large. Please upload a smaller file.']);
        //     exit;
        // }

        // Generate a unique name for the product file using the productId
        $new_file_name = preg_replace('/[^a-zA-Z0-9]/', '_', $product_name) . '_' .  $productId . '.' . $file_extension;
        
        // Move the uploaded file to the designated directory
        if (move_uploaded_file($file_tmp, $upload_dirs[$file_type] . $new_file_name)) {
            // Prepare to insert into the database
            $internal_file_url = $upload_dirs[$file_type] . $new_file_name;

            // Insert file details into the database
            $stmt = $conn->prepare("INSERT INTO products (productId, thumbnail, name, slug, description, shortDescription, productTags, mainCategory, fileType, price, discount, fileUrl, fileSize, licenseKey, deliveryMethod) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("issssssisdisdss", $productId, $thumbnail_url, $product_name, $slug, $full_description, $short_description, $product_tags, $category, $file_extension, $price, $discount, $internal_file_url, $file_size, $license_key, $delivery_method);

            if ($stmt->execute()) {
                echo json_encode(['status' => 'success', 'message' => 'Product added successfully.']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Error inserting into database: ' . $stmt->error]);
            }

            $stmt->close();
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to move uploaded file.']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'No product file uploaded.']);
    }
}

$conn->close();
?>