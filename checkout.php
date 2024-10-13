<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Checkout Page</title>
  <link rel="stylesheet" href="checkout.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>
<body>
  <div class="checkout-interface">
    <?php
    include 'connect.php';
    $error_message = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $card_number = $_POST['card-number'];
        $expiry = $_POST['expiry'];
        $cvc = $_POST['cvc'];

        $stmt = $conn->prepare("SELECT id FROM users WHERE customerEmail = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Email exists in the database
            $user = $result->fetch_assoc();
            $user_id = $user['id'];

            // Retrieve cart details from POST data
            $product_titles = $_POST['product_titles'];
            $total_price = $_POST['total_price'];

            // Insert order details into the orders table
            $stmt = $conn->prepare("INSERT INTO orders (user_id, product_titles, total_price) VALUES (?, ?, ?)");
            $stmt->bind_param("isd", $user_id, $product_titles, $total_price);
            $stmt->execute();

            header('Location: paymentDone.php');
        } else {
            // Email does not exist in the database
            $error_message = "Registered email address is incorrect or please register.";
        }
    }
    ?>
    <form action="checkout.php" method="POST" id="checkout-form">
      <p class="back-icon"><a href="home.php">X</a></p>
      <h1>Checkout</h1>

      <?php
      if (!empty($error_message)) {
          echo '<p class="error-message">' . $error_message . '</p>';
      }
      ?>

      <div class="input-form">
        <input type="email" placeholder="Enter your registered email" name="email" id="email" required />
      </div>

      <div class="input-form">
        <input type="text" placeholder="Name on card" name="name" id="name" required />
      </div>

      <div class="input-form">
        <input type="text" placeholder="Card number" name="card-number" id="card-number" required />
      </div>

      <div class="input-form">
        <input type="date" placeholder="Expiration date" name="expiry" id="expiry" required />
      </div>

      <div class="input-form">
        <input type="text" placeholder="CVC" name="cvc" id="cvc" required />
      </div>

      <input type="hidden" name="product_titles" id="product_titles" />
      <input type="hidden" name="total_price" id="total_price" />

      <h2 class="total-price-display" id="total-price-display"></h2>

      <button class="checkout-btn" name="checkout">Confirm Purchase</button>
    </form>
  </div>

  <script src="checkout.js"></script>
</body>
</html>
