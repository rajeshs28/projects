<?php
$host = 'localhost';
$user = 'root';
$pass = ''; // replace with your password
$dbname = 'carbuysell';

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>