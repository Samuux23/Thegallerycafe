<?php
include 'connect.php';

// Check if the 'id' parameter is set in the GET request
if (isset($_GET['id'])) {
    $order_id = intval($_GET['id']);

    // Prepare the DELETE query
    $query = "DELETE FROM orders WHERE order_id = $order_id";

    if ($conn->query($query) === TRUE) {
        // If successful, return a JSON response indicating success
        echo json_encode(array('success' => true));
    } else {
        // If there is an error, return a JSON response with the error message
        echo json_encode(array('success' => false, 'message' => $conn->error));
    }
} else {
    echo json_encode(array('success' => false, 'message' => 'Invalid ID'));
}

$conn->close();
?>
