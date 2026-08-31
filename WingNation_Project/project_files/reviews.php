<?php
// CONNECT TO DATABASE
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en-ie">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WingNation | Reviews</title>
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


<!-- MAIN CONTENT -->
<section class="reviews-page" style="padding: 50px; text-align:center;">
    <h2 style="color:rgb(110,6,6);">Customer Reviews</h2>

    <!-- FORM TO SELECT LOCATION -->
    <form method="GET" style="margin-bottom:30px;">
        <label><strong>Select Location:</strong></label>
        <select name="location" required>
            <option value="">-- Choose --</option>
            <option value="Cork">Cork</option>
            <option value="Limerick">Limerick</option>
            <option value="Castletroy">Castletroy</option>
        </select>
        <button type="submit" class="order-btn">Show Reviews</button>
    </form>

    <div style="max-width:700px; margin:0 auto;">

    <?php
    // ONLY RUN QUERY IF USER SELECTED A LOCATION
    if (isset($_GET['location'])) {
        $location = $_GET['location'];

        echo "<h3 style='color:rgb(110,6,6); margin-bottom:20px;'>Reviews for $location</h3>";

        // GET REVIEWS FROM DATABASE
        $sql = "SELECT * FROM reviews WHERE location='$location'";
        $result = mysqli_query($conn, $sql);

        // CHECK IF ANY RESULTS
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
                <div style='
                    background:#fafafa;
                    border:2px solid rgb(173,135,79);
                    padding:20px;
                    margin-bottom:20px;
                    border-radius:10px;
                    box-shadow:0 3px 6px rgba(0,0,0,0.15);
                '>
                    <h4 style='color:rgb(110,6,6); margin-bottom:10px;'>{$row['customer_name']}</h4>
                    <p><strong>Rating:</strong> {$row['rating']} ⭐</p>
                    <p style='font-style:italic; margin-top:10px;'>{$row['message']}</p>
                </div>
                ";
            }
        } else {
            echo "<p>No reviews found for this location.</p>";
        }
    }
    ?>
    </div>

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