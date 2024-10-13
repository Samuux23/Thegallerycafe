<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Box icons link for icon usage throughout the site -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
    <!-- Remix icon link for additional icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- Google fonts link for custom typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Afacad:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet" />
    <!-- Custom CSS link for admin dashboard styling -->
    <link rel="stylesheet" href="adminDashboard.css">
</head>
<body>
    <!-- Sidebar section for navigation -->
    <div class="sidebar">
        <!-- Logo -->
        <img src="img/logocafe.png" alt="" class="logo" />
        <!-- Navigation links -->
        <ul class="nav">
          <li><a href="#" id="orders-tab">Orders</a></li>
          <li><a href="#" id="users-tab">Users</a></li>
          <li><a href="#" id="menu-tab">Menu</a></li>
          <li><a href="#" id="Reservation-tab">Reservations</a></li>
          <li><a href="#" id="offers-tab">Offers</a></li>
          <li><a href="#" id="messages-tab">Messages</a></li>
        </ul>
        <!-- Logout button -->
        <button class="logout" id="logout-btn">Log Out</button>
        <!-- Dashboard title -->
        <h3>ADMIN DASHBOARD</h3>
    </div>
    <!-- Main content section -->
    <div class="main-content">
        <header>
            <!-- Dynamic table title -->
            <h2 id="table-title">Orders</h2>
        </header>
        <!-- Orders table -->
        <div id="orders-table">
            <table>
                <thead id="table-head">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Order Details</th>
                        <th>Total</th>
                        <th>Order Date</th>
                        <th>Approved</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    <!-- Dynamic content will be inserted here -->
                </tbody>
            </table>
        </div>
        <!-- Users table -->
        <div id="users-table" style="display:none;">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="users-table-body">
                    <!-- Dynamic content will be inserted here -->
                </tbody>
            </table>
        </div>
        <!-- Menu form for adding items -->
        <div id="menu-form" style="display:none;">
            <h2>Add Menu Item</h2>
            <form id="add-menu-item" enctype="multipart/form-data" class="styled-form">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required><br>
                <label for="price">Price:</label>
                <input type="number" id="price" name="price" required><br>
                <label for="cuisine">Cuisine:</label>
                <select id="cuisine" name="cuisine" required>
                    <option value="Sri Lankan">Sri Lankan</option>
                    <option value="Chinese">Chinese</option>
                    <option value="Italian">Italian</option>
                </select><br>
                <label for="image">Image:</label>
                <input type="file" id="image" name="image" accept="image/*" required><br>
                <p>(Size of the image should be 300px*300px)</p>
                <button type="submit">Add Item</button>
            </form>
            <!-- Menu items table -->
            <div id="menu-table" style="display:none;">
                <h2>Menu Items</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Cuisine</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="menu-table-body">
                        <!-- Dynamic content will be inserted here -->
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Reservations table -->
        <div id="reservations-table" style="display:none;">
            <table>
                <thead>
                    <tr>
                        <th>Reservation ID</th>
                        <th>Number Of People</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="reservations-table-body">
                    <!-- Dynamic content will be inserted here -->
                </tbody>
            </table>
            <!-- Table and parking availability section -->
            <div class="availability-section">
                <div class="availability-box">
                    <h3>Table Availability</h3>
                    <input type="number" id="table-availability" name="table-availability" value="10" />
                    <button id="update-table-availability">Update</button>
                </div>
                <div class="availability-box">
                    <h3>Parking Availability</h3>
                    <input type="number" id="parking-availability" name="parking-availability" value="5" />
                    <button id="update-parking-availability">Update</button>
                </div>
            </div>
        </div>
        <!-- Offers form for editing offers -->
        <div id="offers-form" style="display:none;">
            <form id="edit-offers-form" enctype="multipart/form-data" class="styled-form">
                <!-- Offer item 1 -->
                <div class="offer-item-edit">
                    <label for="offer-title-1">Title 1:</label>
                    <input type="text" id="offer-title-1" name="offer-title-1" required><br>
                    <label for="offer-desc-1">Description 1:</label>
                    <textarea id="offer-desc-1" name="offer-desc-1" required></textarea><br>
                    <label for="offer-image-1">Image 1:</label>
                    <input type="file" id="offer-image-1" name="offer-image-1" accept="image/*"><br>
                </div>
                <!-- Offer item 2 -->
                <div class="offer-item-edit">
                    <label for="offer-title-2">Title 2:</label>
                    <input type="text" id="offer-title-2" name="offer-title-2" required><br>
                    <label for="offer-desc-2">Description 2:</label>
                    <textarea id="offer-desc-2" name="offer-desc-2" required></textarea><br>
                    <label for="offer-image-2">Image 2:</label>
                    <input type="file" id="offer-image-2" name="offer-image-2" accept="image/*"><br>
                </div>
                <!-- Offer item 3 -->
                <div class="offer-item-edit">
                    <label for="offer-title-3">Title 3:</label>
                    <input type="text" id="offer-title-3" name="offer-title-3" required><br>
                    <label for="offer-desc-3">Description 3:</label>
                    <textarea id="offer-desc-3" name="offer-desc-3" required></textarea><br>
                    <label for="offer-image-3">Image 3:</label>
                    <input type="file" id="offer-image-3" name="offer-image-3" accept="image/*"><br>
                </div>
                <button type="submit">Update Offers</button>
            </form>
        </div>
        <!-- Messages table -->
        <div id="messages-table" style="display:none;">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="messages-table-body">
                    <!-- Dynamic content will be inserted here -->
                </tbody>
            </table>
        </div>
    </div>
    <!-- JavaScript link for dynamic functionalities -->
    <script src="admin.js"></script>
</body>
</html>
