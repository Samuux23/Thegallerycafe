<?php
include 'connect.php';

if (isset($_GET['type']) && isset($_GET['number'])) {
    $type = $_GET['type'];
    $number = $_GET['number'];

    // SQL query to update the availability
    $sql = "UPDATE availability SET number = ? WHERE type = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $number, $type);

    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "message" => "Error updating availability"]);
    }

    $stmt->close();
}

$conn->close();
?>
