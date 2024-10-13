<?php
require 'connect.php';

$result = $conn->query("SELECT * FROM messages");
$messages = [];

while ($row = $result->fetch_assoc()) {
    $messages[] = $row;
}

echo json_encode($messages);

$conn->close();
?>
