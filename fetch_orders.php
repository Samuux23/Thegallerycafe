<?php
include 'connect.php';

$query = "SELECT orders.order_id, orders.product_titles, orders.total_price, orders.order_date, orders.status, users.customerName, users.customerEmail 
          FROM orders 
          JOIN users ON orders.user_id = users.id";
$result = $conn->query($query);

$orders = array();
while ($row = $result->fetch_assoc()) {
    $orders[] = $row;
}

header('Content-Type: application/json');
echo json_encode($orders);

$conn->close();
?>
