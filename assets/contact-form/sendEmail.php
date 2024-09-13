<?php
require "./dbConnect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sender = $_POST['sender'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Sanitize input data to prevent SQL injection
    $sender = mysqli_real_escape_string($conn, $sender);
    $email = mysqli_real_escape_string($conn, $email);
    $message = mysqli_real_escape_string($conn, $message);

    // Insert form data into the database
    $sql = "INSERT INTO contacts (sender, email, message) VALUES ('$sender', '$email', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>window.location.href='index.html?status=success';</script>";
    } else {
        echo "<script>window.location.href='index.html?status=error';</script>";
    }

    mysqli_close($conn);
}
?>