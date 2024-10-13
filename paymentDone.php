<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payment Success</title>
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <style>
      body {
        font-family: Arial, sans-serif;
        background-image: url(img/foodhero.jpeg);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
      }
      body::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: inherit;
        filter: blur(10px);
        z-index: -1;
      }
      .success-container {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 15px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        padding: 30px;
        width: 300px;
      }
      .success-icon {
        font-size: 50px;
        color: #4caf50;
      }
      .success-message {
        font-size: 24px;
        margin: 20px 0;
        color: white;
      }
      .success-details {
        font-size: 16px;
        color: rgb(161, 161, 161);
        margin-bottom: 20px;
      }
      .continue-button {
        display: inline-block;
        background: #4caf50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        font-size: 16px;
        transition: all 0.5s ease;
      }
      .continue-button:hover {
        background-color: #337636;
        transition: all 0.5s ease;
      }
      p {
        font-size: 11px;
        padding: 0px 80px;
      }
    </style>
  </head>
  <body>
    <div class="success-container">
      <div class="success-icon">
        <i class="ri-check-fill"></i>
      </div>
      <div class="success-message">Success!</div>
      <div class="success-details">
        Your payment has been completed. <br />
        <p>Thank you for ordered from The Cafe Gallery</p>
      </div>
      <a href="home.php" class="continue-button">Continue</a>
    </div>
  </body>
</html>
