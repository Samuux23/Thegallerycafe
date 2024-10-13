<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Special Menu</title>

    <!-- Box icons link -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />

    <!-- Remix icon link -->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <!-- Google fonts link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Afacad:ital,wght@0,400..700;1,400..700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="menuUI.css" />
</head>
<body>
    <header id="top">
      <img src="img/logocafe.png" alt="" class="logo" />
      <nav>
        <ul class="nav_links">
          <li><a href="home.php">Home</a></li>
          <li><a href="aboutUs.php">About</a></li>
          <li><a href="reservation.php">Reservation</a></li>
          <li><a href="offer.php">Offers</a></li>
          <li><a href="#">Menu</a></li>
        </ul>
      </nav>
      <p>
        <a href="contact.php" class="cta"><button>Contact</button></a>
        <a href="#"
          ><i class="ri-shopping-cart-2-line SC logout-icon" id="cart-icon"
            ><span class="cart-count">0</span></i
          ></a
        >
      </p>
      <!-- cart -->
      <div class="cart">
        <h2 class="cart-title">Your Cart</h2>
        <!-- cart content -->
        <div class="cart-content"></div>
        <!-- total -->
        <div class="total">
          <div class="total-title">Total</div>
          <div class="total-price">Rs0</div>
        </div>
        <!-- buy button -->
        <button type="button" class="btn-buy">Order Now</button>
        <!-- cart close -->
        <i class="ri-close-line" id="close-cart"></i>
      </div>
    </header>
    <section class="hero">
      <div class="hero-container"></div>
      <div class="search">
        <h1>Menu</h1>
        <div class="filter-container">
          <label for="cuisine_filter">Filter by Cuisine Type :</label>
          <select id="cuisine_filter" name="cuisine_filter" onchange="filterMenu()">
              <option value="all">All</option>
              <option value="Sri Lankan">Sri Lankan</option>
              <option value="Chinese">Chinese</option>
              <option value="Italian">Italian</option>
          </select>
        </div>
      </div>
    </section>
    <section class="shop container">
      <div class="shop-content" id="menu-items">
        <!-- Dynamic menu items will be inserted here -->
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
    <script src="menu.js"></script>
</body>
</html>
