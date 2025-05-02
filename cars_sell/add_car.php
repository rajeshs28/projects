<?php
include 'db.php';

$title = $_POST['title'];
$desc = $_POST['description'];
$price = $_POST['price'];

$target_dir = "uploads/";
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true);
}

$image_name = time() . "_" . basename($_FILES["image"]["name"]);
$target_file = $target_dir . $image_name;

if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    $sql = "INSERT INTO cars (title, description, price, image, status) 
            VALUES ('$title', '$desc', '$price', '$target_file', 'available')";
    if ($conn->query($sql) === TRUE) {
        echo "Car added successfully! <a href='sell.php'>Go back</a>";
    } else {
        echo "DB Error: " . $conn->error;
    }
} else {
    echo "Upload failed!";
}

if ($conn->query($sql) === TRUE) {
    header("Location: sell.php?added=1");
    exit();
}
?>