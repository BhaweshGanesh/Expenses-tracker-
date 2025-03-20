<?php
$host = "localhost";
$user = "root";  // Change if using another user
$pass = "";      // Change if a password is set
$dbname = "expense_tracker";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
