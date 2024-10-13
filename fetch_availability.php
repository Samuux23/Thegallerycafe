<?php
include 'connect.php';

$sql = "SELECT * FROM availability";
$result = $conn->query($sql);

$availability = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $availability[] = $row;
    }
}

echo json_encode($availability);

$conn->close();
?>
