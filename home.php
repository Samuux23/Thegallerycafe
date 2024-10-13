<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TheGalleryCafe.lk</title>

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

    <link rel="stylesheet" href="style1.css" />
  </head>
  <body>
    <!-- this is the header section with navigation link to navigate for each pages -->
    <header id="top">
      <img src="img/logocafe.png" alt="" class="logo" />
      <nav>
        <ul class="nav_links">
          <li><a href="#top">Home</a></li>
          <li><a href="aboutUs.php">About</a></li>
          <li><a href="reservation.php">Reservation</a></li>
          <li><a href="offer.php">Offers</a></li>
          <li>
            <a href="menuUI.php">Menu</a>
          </li>
        </ul>
      </nav>
      <p>
        <a href="contact.php" class="cta"><button>Contact</button></a>
        <a href="loginUI.php" class="logout-icon"
          ><i class="ri-user-add-line"></i
        ></a>
      </p>
    </header>
    <!-- this is the hero section of home page, it includes the attractive hero image and the hero text -->
    <section class="hero">
      <div></div>
      <div>
        <h1>The Gallery Café</h1>
        <h3>A taste you’ll remember.</h3>
        <p>
        Welcome to The Gallery Cafe, an oasis of culinary delight in the heart of Colombo, Sri Lanka. <br>
         Our menu is a curated collection of flavors, crafted with the freshest ingredients and a passion for excellence.
        </p>
      </div>
    </section>
    <!-- welcome section -->
    <section class="hero2">
      <div class="hero-section">
        <div class="content" id="About">
          <h1 style="color: #bfa57d">Welcome</h1>
          <p>
          Hundreds of flavors under one roof.
          </p>
          <p>
          At The Gallery Cafe, our award-winning chefs and dedicated staff are committed to providing you with the highest level of service. 
          Enjoy a diverse menu that features both local and international cuisine, 
          all prepared with meticulous care. Let us be your destination for exceptional food, delightful ambiance, and memorable moments. 
          Visit us and experience why we are Colombo’s favorite cafe.
          </p>
          <div class="signature">
            <img src="img/signature.png" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- displaying facilities -->
    <section class="facility">
      <h1>FACILITIES</h1>
      <div class="line"></div>
        <div class="facilities_section">

        <div class="item-cont">
          <i class='bx bxs-car icon'></i>
          <h2>Parking</h2>
        </div>

        <div class="item-cont">
            <i class='bx bx-wifi icon' style='color:#ffffff' ></i>
            <h2>Free WIFI</h2>
        </div>

        <div class="item-cont">
            <i class='bx bxs-check-shield icon'></i>
            <h2>VIP Area</h2>
        </div>

      </div>
    </section>
    <!-- displaying favorite dishes of the restuarent -->
    <section class="card">
      <div id="card-area">
        <h1 id="services">Favorite Dishes</h1>
        <div class="line"></div>
        <div class="wrapper">
          <div class="box-area">
            <div class="box">
              <img src="img/chinees.jpg" alt="" />
              <div class="overlay">
                <h3>Chinese</h3>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Fugiat voluptas quod sed quis pariatur placeat!
                </p>
                <a href="menuUI.php">View Menu</a>
              </div>
            </div>
            <div class="box">
              <img src="img/sri lanka2.jpg" alt="" />
              <div class="overlay">
                <h3>Sri Lankan</h3>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Fugiat voluptas quod sed quis pariatur placeat!
                </p>
                <a href="menuUI.php">View Menu</a>
              </div>
            </div>
            <div class="box">
              <img src="img/italianfood.jpg" alt="" />
              <div class="overlay">
                <h3>Italian</h3>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Fugiat voluptas quod sed quis pariatur placeat!
                </p>
                <a href="menuUI.php">View Menu</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- displaying events -->
    <section class="events">
      <div id="events-area">
        <h1 id="events">Upcoming Events</h1>
        <div class="line"></div>
        <div class="wrapper">
          <div class="event-card">
            <img src="img/event1.png" alt="Live Music Night" />
            <div class="event-details">
              <h3>Live Music Night</h3>
              <p>
                Join us for an every weekends evening of live music with local bands. Enjoy your favorite dishes while listening to great music.
              </p>
            </div>
          </div>
          <div class="event-card">
            <img src="img/event3.png" alt="Cooking Workshop" />
            <div class="event-details">
              <h3>Cooking Workshop</h3>
              <p>
                Learn to cook like a pro with our special cooking workshops. Limited seats available.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- this is the review section from customers -->
    <section class="testimonials">
      <h1>TESTIMONIALS</h1>
      <div class="line"></div>
      <div class="testimonial-container">
        <div class="testimonial-slide">
          <div class="testimonial">
            <div class="testimonial-content">
              <img src="img/1.jpg" alt="Avinash Kr" />
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Perferendis dolores ratione exercitationem laborum, aliquid
                aspernatur, sint, officia deleniti quam voluptate iste itaque
                blanditiis! Voluptates sint eveniet repudiandae qui aut quis.
              </p>
              <h3>Avinash Kr</h3>
            </div>
          </div>
          <div class="testimonial">
            <div class="testimonial-content">
              <img src="img/2.jpg" alt="Bharat Kunal" />
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Perferendis dolores ratione exercitationem laborum, aliquid
                aspernatur, sint, officia deleniti quam voluptate iste itaque
                blanditiis! Voluptates sint eveniet repudiandae qui aut quis.
              </p>
              <h3>Bharat Kunal</h3>
            </div>
          </div>
          <div class="testimonial">
            <div class="testimonial-content">
              <img src="img/3.jpg" alt="Prabhakar D" />
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Perferendis dolores ratione exercitationem laborum, aliquid
                aspernatur, sint, officia deleniti quam voluptate iste itaque
                blanditiis! Voluptates sint eveniet repudiandae qui aut quis.
              </p>
              <h3>Prabhakar D</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- footer section -->
    <footer class="footer-distributed">
      <div class="footer-left">
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
    <script src="home.js"></script>
    <!--  link of the script file -->
  </body>
</html>


