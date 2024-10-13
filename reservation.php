<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reservation</title>
    <link rel="stylesheet" href="reservation.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Afacad:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet" />
</head>
<body>
    <header id="top">
        <img src="img/logocafe.png" alt="" class="logo" />
        <nav>
            <ul class="nav_links">
                <li><a href="home.php">Home</a></li>
                <li><a href="aboutUs.php">About</a></li>
                <li><a href="#">Reservation</a></li>
                <li><a href="offer.php">Offers</a></li>
                <li><a href="menuUI.php">Menu</a></li>
            </ul>
        </nav>
        <p>
            <a href="contact.php" class="cta"><button>Contact</button></a>
            <a href="loginUI.php" class="logout-icon"><i class="ri-user-add-line"></i></a>
        </p>
    </header>
    <section class="hero">
        <div class="hero-container"></div>
        <div class="title"><h1>Reservation</h1></div>
    </section>
    <section class="reservation-section" id="reservation">
        <div class="container">
            <p>Booking request +94-763256609 or fill out the order form</p>
            <form class="reservation-form" method="post" action="reservation.php">
                <select name="people" id="people">
                    <option value="1">1 Person</option>
                    <option value="2">2 People</option>
                    <option value="3">3 People</option>
                    <option value="4">4 People</option>
                </select>
                <input type="date" name="date" id="date" required />
                <input type="time" name="time" id="time" value="19:00" required />
                <input type="email" name="email" id="email" placeholder="Email" required />
                <button type="submit" name="submit">Book a Table</button>
            </form>
            <div class="availability-section">
                <div class="availability-box">
                    <h3>Table Availability</h3>
                    <div class="availability-number" id="table-availability-number">10</div>
                </div>
                <div class="availability-box">
                    <h3>Parking Availability</h3>
                    <div class="availability-number" id="parking-availability-number">5</div>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="footer-distributed">
      <div class="footer-left">
        <!-- <img src="img/logocafe.png" alt="" class="logo" /> -->
         <h2>The Gallery Cafe</h2>

         <p class="footer-links">
          <a href="home.php">Home</a>
          |
          <a href="home.php">About</a>
          |
          <a href="reservation.php">Reservation</a>
          |
          <a href="offer.php">Offers</a>
          |
          <a href="contact.php">Contact</a>
        </p>

        <p class="footer-company-name">
          Copyright © 2024 <strong>TheGalleryCafe</strong> All rights reserved
        </p>
      </div>

      <div class="footer-center">
        <div>
          <i class="ri-map-pin-line"></i>
          <p>Colombo 03, Upper Street, Sri Lanka</p>
        </div>

        <div>
          <i class="ri-phone-line"></i>
          <p>+94-763256609</p>
        </div>
        <div>
          <i class="ri-mail-open-line"></i>
          <p>contact@thecafegallery.com</p>
        </div>
      </div>
      <div class="footer-right">
        <p class="footer-company-about">
          <span>A taste you’ll remember</span>
          <strong>The Gallery Cafe</strong> an oasis of culinary delight in the
          heart of Colombo, Sri Lanka. Our menu is a curated collection of
          flavors, crafted with the freshest ingredients and a passion for
          excellence.
        </p>
        <div class="footer-icons">
          <a href="https://web.facebook.com/"><i class="ri-facebook-box-fill"></i></a>
          <a href="https://www.instagram.com/"><i class="ri-instagram-fill"></i></a>
          <a href="https://lk.linkedin.com/"><i class="ri-linkedin-box-fill"></i></a>
          <a href="https://x.com/?lang=en"><i class="ri-twitter-x-line"></i></a>
          <a href="https://www.youtube.com/"><i class="ri-youtube-line"></i></a>
        </div>
      </div>
    </footer>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            fetch("fetch_availability.php")
                .then(response => response.json())
                .then(availability => {
                    availability.forEach(item => {
                        if (item.type === "tables") {
                            document.getElementById("table-availability-number").textContent = item.number;
                        } else if (item.type === "parking") {
                            document.getElementById("parking-availability-number").textContent = item.number;
                        }
                    });
                })
                .catch(error => console.error("Error fetching availability:", error));
        });
    </script>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    include 'connect.php';

    $people = $_POST['people'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $email = $_POST['email'];

    $stmt = $conn->prepare("INSERT INTO reservations (people, date, time, email) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $people, $date, $time, $email);

    if ($stmt->execute()) {
        echo "<script>alert('Reservation successfully made!');</script>";
    } else {
        echo "<script>alert('Failed to make reservation. Please try again.');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
