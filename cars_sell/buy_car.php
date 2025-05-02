<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $conn->query("UPDATE cars SET status = 'sold' WHERE id = $id");
    header("Location: buy.php?success=1");
    exit();
}
?>