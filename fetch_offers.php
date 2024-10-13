<?php
require 'connect.php';

$sql = "SELECT * FROM offers";
$result = $conn->query($sql);

$offers = [];
while($row = $result->fetch_assoc()) {
    $offers[] = $row;
}

echo json_encode($offers);
?>
