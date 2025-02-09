<!-- TO CREATE A DATABASE CONNECTION FILE -->

<?php
$host = "localhost";  // XAMPP runs MySQL on localhost
$user = "root";       // Default MySQL user in XAMPP
$pass = "";           // Default password is empty
$db = "thesis";   // Database name

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>