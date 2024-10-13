<?php
include 'connect.php';

if (isset($_POST['submit'])){
    $customerEmail = $_POST['customerEmail'];
    $customerPass = $_POST['customerPass'];
    $customerPassHashed = md5($customerPass); // Hashing password

    // Check if the login credentials are for the admin
    if ($customerEmail === 'admin@thecafegallery' && $customerPass === 'admin123') {
        session_start();
        $_SESSION['customerEmail'] = $customerEmail;
        header("Location: adminDashboard.php");
    } 
    // Check if the login credentials are for the staff
    elseif ($customerEmail === 'staff@thecafegallery' && $customerPass === 'staff123') {
        session_start();
        $_SESSION['customerEmail'] = $customerEmail;
        header("Location: staffDashboard.php");
    }
    else {
        // Check in the users table
        $sql = "SELECT * FROM users WHERE customerEmail='$customerEmail' AND customerPass='$customerPassHashed'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            session_start();
            $row = $result->fetch_assoc();
            $_SESSION['customerEmail'] = $row['customerEmail'];
            header("Location: home.php");
        } else {
            header("Location: loginUI.php?error=Incorrect Email or Password !");
        }
    }
}
?>
