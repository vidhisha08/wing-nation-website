<?php
include 'connection.php'; // connect to database
?>

<!DOCTYPE html>
<html lang="en-ie">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WingNation | Add Review</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- HEADER -->
	<header>
    <div class="logo">
        <img src="resources/logo.png" alt="WingNation Logo">
    </div>

    <nav>
		<a href="#" class="order-btn">ORDER</a>
        <!-- Hamburger menu for additional links -->
        <div class="hamburger-menu">
            <input type="checkbox" id="menu-toggle" />
            <label for="menu-toggle" class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </label>

            <div class="dropdown-links">
                <a href="home.html">HOME</a>
                <a href="menu.html">MENU</a>
                <a href="locations.html">LOCATIONS</a>
                <a href="contact.html">CONTACT US</a>
                <a href="reviews.php">REVIEWS</a>
                <a href="add_review.php">ADD REVIEW</a>
            </div>
        </div>
    </nav>
</header>
	<!-- END OF HEADER -->

<!-- MAIN SECTION -->
<section class="reviews-page" style="padding: 50px; text-align:center;">
    <h2 style="color:rgb(110,6,6);">Leave a Review</h2>

    <!-- REVIEW FORM -->
    <form method="POST" style="
        max-width:600px;
        margin:30px auto;
        background:#fafafa;
        padding:20px;
        border-radius:10px;
        border:2px solid rgb(173,135,79);
        box-shadow:0 3px 6px rgba(0,0,0,0.15);">

        <input type="text" name="customer_name" placeholder="Your Name" required
        style="width:90%; padding:10px; margin-bottom:15px;">

        <input type="number" name="rating" min="1" max="5" placeholder="Rating (1–5)" required
        style="width:90%; padding:10px; margin-bottom:15px;">

        <textarea name="message" placeholder="Write your review..." required
        style="width:90%; padding:10px; height:120px; margin-bottom:15px;"></textarea>

        <select name="location" required style="width:90%; padding:10px; margin-bottom:15px;">
            <option value="">Select Location</option>
            <option value="Cork">Cork</option>
            <option value="Limerick">Limerick</option>
            <option value="Castletroy">Castletroy</option>
        </select>

        <button type="submit" name="submit" class="order-btn"
        style="padding:10px 25px; font-size:16px;">Submit Review</button>
    </form>

    <?php
    // PROCESS FORM
    if (isset($_POST['submit'])) {

        $name = $_POST['customer_name'];
        $rating = $_POST['rating'];
        $message = $_POST['message'];
        $location = $_POST['location'];

        $sql = "INSERT INTO reviews (customer_name, rating, message, location)
                VALUES ('$name', '$rating', '$message', '$location')";

        if (mysqli_query($conn, $sql)) {
            echo "<p style='color:green; font-weight:bold;'>Review submitted successfully!</p>";
        } else {
            echo "<p style='color:red;'>Error: " . mysqli_error($conn) . "</p>";
        }
    }
    ?>

</section>

<!-- FOOTER -->
<footer>
    <div class="footer-links">
        <a href="#">ABOUT</a>
        <a href="contact.html">CONTACT US</a>
        <a href="contact.html">FEEDBACK</a>
    </div>

    <div class="footer-bottom-links">
        <a href="#">Terms</a>
        <a href="#">Privacy</a>
        <a href="#">Cookie Policy</a>
        <a href="#">Accessibility</a>
        <a href="#">Sitemap</a>
        <a href="#">Allergen Info</a>
        <a href="#">FAQ</a>
    </div>

    <div class="social-icons">
        <i class="fa-brands fa-tiktok"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-facebook-f"></i>
        <i class="fa-brands fa-x-twitter"></i>
        <i class="fa-brands fa-spotify"></i>
    </div>

    <div class="copyright">
        © WingNation 2025. All rights reserved.
    </div>
</footer>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</body>
</html>