<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <!-- Box icons link for icons throughout the site -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />

    <!-- Remix icon link for additional icons -->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <!-- Google fonts link for custom typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Afacad:ital,wght@0,400..700;1,400..700&display=swap"
      rel="stylesheet"
    />

    <!-- Custom CSS link -->
    <link rel="stylesheet" href="aboutUs.css" />
</head>
<body>
    <!-- Header section -->
    <header id="top">
      <!-- Logo -->
      <img src="img/logocafe.png" alt="" class="logo" />
      <nav>
        <!-- Navigation links -->
        <ul class="nav_links">
          <li><a href="home.php">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="reservation.php">Reservation</a></li>
          <li><a href="offer.php">Offers</a></li>
          <li><a href="menuUI.php">Menu</a></li>
        </ul>
      </nav>
      <p>
        <!-- Contact button and user login icon -->
        <a href="contact.php" class="cta"><button>Contact</button></a>
        <a href="loginUI.php" class="logout-icon">
          <i class="ri-user-add-line"></i>
        </a>
      </p>
    </header>

    <!-- Hero section with title -->
    <section class="hero">
      <div class="hero-container"></div>
      <div class="title"><h1>About Us</h1></div>
    </section>

    <!-- About us content section -->
    <section class="hero2">
      <div class="hero-section">
        <div class="content" id="About">
          <h3 style="color: #bfa57d">
          Hundreds of flavors under one roof.
          </h3>
          <p>
          At The Gallery Cafe, our award-winning chefs and dedicated staff are committed to providing you with the highest level of service. 
          Enjoy a diverse menu that features both local and international cuisine, 
          all prepared with meticulous care. Let us be your destination for exceptional food, delightful ambiance, and memorable moments. 
          Visit us and experience why we are Colombo's favorite cafe.
          </p>
          <div class="signature">
            <!-- Signature image -->
            <img src="img/signature.png" alt="" />
          </div>
        </div>
      </div>
    </section>

    <!-- Image gallery section -->
    <section class="image-gallery">
      <div class="gallery-container">
        <!-- Individual gallery items -->
        <div class="gallery-item"><img src="img/imageGallery1.jpeg" alt=""></div>
        <div class="gallery-item"><img src="img/imageGallery2.jpeg" alt=""></div>
        <div class="gallery-item"><img src="img/imageGallery3.jpeg" alt=""></div>
        <div class="gallery-item"><img src="img/imageGallery4.jpeg" alt=""></div>
        <div class="gallery-item"><img src="img/imageGallery5.jpeg" alt=""></div>
        <div class="gallery-item"><img src="img/imageGallery6.jpeg" alt=""></div>
      </div>
    </section>

    <!-- Footer section -->
    <footer class="footer-distributed">
      <div class="footer-left">
         <!-- Logo and footer links -->
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

        <!-- Copyright information -->
        <p class="footer-company-name">
          Copyright © 2024 <strong>TheGalleryCafe</strong> All rights reserved
        </p>
      </div>

      <div class="footer-center">
        <!-- Contact information -->
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
        <!-- About and social media links -->
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
</body>
</html>