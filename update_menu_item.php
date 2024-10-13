<?php
include 'connect.php';

if (isset($_POST['item-id']) && isset($_POST['title']) && isset($_POST['price']) && isset($_POST['cuisine'])) {
    $id = $_POST['item-id'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $cuisine = $_POST['cuisine'];

    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $image = 'uploads/' . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $image);

        $stmt = $conn->prepare("UPDATE menu_items SET title=?, price=?, cuisine=?, image=? WHERE id=?");
        $stmt->bind_param("ssssi", $title, $price, $cuisine, $image, $id);
    } else {
        $stmt = $conn->prepare("UPDATE menu_items SET title=?, price=?, cuisine=? WHERE id=?");
        $stmt->bind_param("sssi", $title, $price, $cuisine, $id);
    }

    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "message" => "Error updating menu item"]);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(["success" => false, "message" => "Invalid request"]);
}
?>
