<?php
include 'connect.php';

$sql = "SELECT id, customerName, customerEmail, customerAddress FROM users";
$result = $conn->query($sql);

$users = array();

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $users[] = $row;
  }
}

echo json_encode($users);

$conn->close();
?>
