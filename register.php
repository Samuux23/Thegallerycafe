<?php
include 'connect.php';

if(isset($_POST['register'])){
    $customerName = $_POST['customerName'];
    $customerEmail = $_POST['customerEmail'];
    $customerAddress = $_POST['customerAddress'];
    $customerPass = $_POST['customerPass'];
    $customerPassValidate = $_POST['customerPassValidate'];

    if($customerPass !== $customerPassValidate) {
        header("Location: registerUI.php?error=Passwords do not match!");
        exit();
    }

    $customerPass = md5($customerPass);

    $checkEmail = "SELECT * FROM users WHERE customerEmail = '$customerEmail'";
    $result = $conn->query($checkEmail);
    if($result->num_rows > 0){
        header("Location: registerUI.php?error=Email Address Already Exists!");
    } else {
        $insertQuery = "INSERT INTO users (customerName, customerEmail, customerAddress, customerPass)
                        VALUES ('$customerName', '$customerEmail', '$customerAddress', '$customerPass')";
        if($conn->query($insertQuery) === TRUE){
            header("Location: loginUi.php");
        } else {
            header("Location: registerUI.php?error=Error: " . $conn->error);
        }
    }
}
?>
