<?php
$servername = "localhost";
$username = "root";
$password = "";  // Assuming there's no password for the 'root' user, leave it blank. If there's a password, enter it here.
$dbname = "contact_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} ?>