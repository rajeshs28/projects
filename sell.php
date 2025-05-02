<?php include 'header.php'; ?>
<?php if (isset($_GET['added']) && $_GET['added'] == 1): ?>
    <div class="popup-success" id="popup">
        <div class="popup-content">
            <span class="close-btn" onclick="document.getElementById('popup').style.display='none';">&times;</span>
            <h2>✅ Car Listed Successfully!</h2>
            <p>Your car has been added for sale and is now visible in the marketplace.</p>
        </div>
    </div>
<?php endif; ?>


<h2>Sell Your Car</h2>
<div class="sell-form-container">
    <form action="add_car.php" method="POST" enctype="multipart/form-data" class="sell-form">

        <label for="title">Car Title</label>
        <input type="text" name="title" id="title" required placeholder="e.g. Honda City 2020">

        <label for="description">Description</label>
        <textarea name="description" id="description" rows="4" required
            placeholder="Enter details like model, year, condition, etc."></textarea>

        <label for="price">Price (₹)</label>
        <input type="number" name="price" id="price" required placeholder="e.g. 550000">

        <label for="image">Upload Image</label>
        <input type="file" name="image" id="image" required>

        <div class="image-preview">
            <label>Preview:</label><br>
            <img id="preview" src="#" alt="Image Preview"
                style="display: none; width: 200px; height: 150px; object-fit: cover; border: 1px solid #ccc; padding: 5px;">
        </div>

        <button type="submit" class="btn">Submit Car</button>
    </form>
</div>

<script>
    document.getElementById('image').addEventListener('change', function (event) {
        const preview = document.getElementById('preview');
        preview.src = URL.createObjectURL(event.target.files[0]);
        preview.style.display = 'block';
    });
</script>

<script>
    setTimeout(() => {
        const popup = document.getElementById('popup');
        if (popup) popup.style.display = 'none';
    }, 3000);
</script>


<?php include 'footer.php'; ?>