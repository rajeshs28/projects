<?php include 'db.php'; ?>
<?php include 'header.php'; ?>
<?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
    <div class="popup-success" id="popup">
        <div class="popup-content">
            <span class="close-btn" onclick="document.getElementById('popup').style.display='none';">&times;</span>
            <h2>🎉 Purchase Successful!</h2>
            <p>Thank you for buying the car. We'll get in touch with you shortly!</p>
        </div>
    </div>
<?php endif; ?>

<h2>Available Cars</h2>

<!-- Search bar -->
<form method="GET" action="buy.php" class="search-form">
    <input type="text" name="search" placeholder="Search by car name or keyword..."
        value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
    <button type="submit">Search</button>
    <?php if (isset($_GET['search']) && $_GET['search'] != ''): ?>
        <a href="buy.php" class="clear-btn">Clear</a>
    <?php endif; ?>
</form>

<div class="product-grid">
    <?php
    $search = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : '';
    $query = "SELECT * FROM cars WHERE status = 'available'";
    if (!empty($search)) {
        $query .= " AND (title LIKE '%$search%' OR description LIKE '%$search%')";
    }
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='product-card'>
          <img src='{$row['image']}' alt='Car Image'>
          <div class='product-info'>
              <h3>{$row['title']}</h3>
              <p>{$row['description']}</p>
              <p class='price'>₹{$row['price']}</p>
              <form action='buy_car.php' method='POST'>
                  <input type='hidden' name='id' value='{$row['id']}'>
                  <button type='submit' class='btn'>Buy Now</button>
              </form>
          </div>
      </div>";
        }
    } else {
        echo "<p style='margin-left: 15px;'>No cars found matching your search.</p>";
    }
    ?>
</div>
<script>
    setTimeout(() => {
        const popup = document.getElementById('popup');
        if (popup) popup.style.display = 'none';
    }, 3000);
</script>


<?php include 'footer.php'; ?>