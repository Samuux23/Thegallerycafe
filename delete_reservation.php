<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $reservation_id = $_GET['id'];
    
    // SQL query to delete the reservation
    $sql = "DELETE FROM reservations WHERE reservation_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $reservation_id);
    
    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "message" => "Error deleting reservation"]);
    }
    
    $stmt->close();
}

$conn->close();
?>
