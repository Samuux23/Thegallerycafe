<?php
include 'connect.php';

$title = $_POST['title'];
$price = $_POST['price'];
$cuisine = $_POST['cuisine'];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
$check = getimagesize($_FILES["image"]["tmp_name"]);
if ($check === false) {
    echo json_encode(['success' => false, 'message' => 'File is not an image.']);
    exit;
}

// Check file size (5MB limit)
if ($_FILES["image"]["size"] > 5000000) {
    echo json_encode(['success' => false, 'message' => 'Sorry, your file is too large.']);
    exit;
}

// Allow certain file formats
if (!in_array($imageFileType, ['jpg', 'png', 'jpeg', 'gif'])) {
    echo json_encode(['success' => false, 'message' => 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.']);
    exit;
}

// Check if file already exists
if (file_exists($target_file)) {
    echo json_encode(['success' => false, 'message' => 'Sorry, file already exists.']);
    exit;
}

// If everything is ok, try to upload file
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    $sql = "INSERT INTO menu_items (title, price, cuisine, image) VALUES ('$title', '$price', '$cuisine', '$target_file')";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error: ' . $conn->error]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Sorry, there was an error uploading your file.']);
}

$conn->close();
?>
