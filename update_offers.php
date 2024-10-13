<?php
require 'connect.php';

for ($i = 1; $i <= 3; $i++) {
    $title = $_POST["offer-title-$i"];
    $description = $_POST["offer-desc-$i"];
    $image = "";

    if ($_FILES["offer-image-$i"]["name"]) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["offer-image-$i"]["name"]);
        if (move_uploaded_file($_FILES["offer-image-$i"]["tmp_name"], $target_file)) {
            $image = $target_file;
        }
    } else {
        // Get the existing image path if a new one isn't uploaded
        $sql = "SELECT image FROM offers WHERE id = $i";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $image = $row['image'];
    }

    $sql = "UPDATE offers SET title='$title', description='$description', image='$image' WHERE id=$i";
    $conn->query($sql);
}

$response = ['success' => true];
echo json_encode($response);
?>
