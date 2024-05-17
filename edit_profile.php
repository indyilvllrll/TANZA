<!DOCTYPE html>
<html lang="en">
  
  <!-- HEAD SECTION -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Preconnect to Google Fonts for improved performance -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- Importing Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&family=Great+Vibes&family=Lustria&family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

  <!-- jQuery Library -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <!-- bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Link to External Stylesheet -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="stylescss.css">

  <!-- Deferred JavaScript Execution -->
  <script src="login.js" defer></script>

  <!-- Font Awesome Icons with Integrity Check -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Title of the Page -->
  <title>Tanza Oasis Hotel & Resort</title>

  <!-- Favicon for the Browser Tab -->
  <link rel="icon" href="images/logo.png">
    <!-- Header Section -->
    <header>
    <?php include_once 'nav.php'; ?>

    </header>

    <div class="container py-4">
    <?php

      // Check if user is logged in
      if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
        header("Location: login.php");
        exit;
      }

      // Include database connection script (replace with your actual file path)
      require_once("db_connection.php");

      if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $sql = "SELECT * FROM `users` WHERE id = $user_id";
        $result = mysqli_query($conn, $sql);
    
        if ($result->num_rows > 0) {
          $row = mysqli_fetch_assoc($result);
        } else {
          echo "Error fetching user data.";
          exit;
        }
      } else {
        // Handle case where user_id is not in session (e.g., redirect to login)
      }


    ?>

    <h1>Edit Profile</h1>

    <?php
      // Display any error messages (if needed)
      if (isset($_SESSION['errors'])) {
        echo '<div class="alert alert-danger" role="alert">';
        foreach ($_SESSION['errors'] as $error) {
          echo $error . '<br>';
        }
        unset($_SESSION['errors']); // Clear error messages after displaying
        echo '</div>';
      }
    ?>

    <form action="update_profile.php" method="post">
      <div class="mb-3">
        <label for="fname" class="form-label">First Name</label>
        <input type="text" class="form-control" id="fname" name="fname" value="<?php if (isset($row['first_name'])) { echo $row['first_name']; } ?>">

      </div>

      <div class="mb-3">
        <label for="lname" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lname" name="lname" value="<?php if (isset($row['last_name'])) { echo $row['last_name']; } ?>">
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php if (isset($row['email'])) { echo $row['email']; } ?>">
      </div>
      <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-OgwbZS7/BXzYhFOTujIkA54hxJC rojGAkMMSo295MyKNs1LtA41IWq+/u7UFvegz" crossorigin="anonymous"></script>




    <!-- FOOTER SECTION -->
    <footer>
        <!-- Quick Links -->
        <div class="quick-links">
            <a href="our_company.php">Our Company</a>
            <a href="community.php">Community</a>
            <a href="media.php">Media</a>
        </div>

        <!-- Social Links -->
        <div class="social-links">
            <!-- Facebook Icon and Link -->
            <a href="https://fb.com" class="icon" id="facebook" target="_blank">
                <i class="fab fa-facebook fa-bounce" style="color: #750023;"></i>
            </a>
            <!-- Instagram Icon and Link -->
            <a href="https://www.instagram.com" class="icon" id="instagram" target="_blank">
                <i class="fab fa-instagram fa-bounce" style="color: #85002e;"></i>
            </a>
            <!-- Email Icon and Link -->
            <a href="mailto:jhonnalievillaruel@example.com" class="icon" id="email">
                <i class="fad fa-envelope fa-bounce" style="--fa-primary-color: #7a0035; --fa-secondary-color: #f03888;"></i>
            </a>
        </div>

        <!-- Copyright Notice -->
        <p>Built by Jhonna Lie Villaruel © 2024</p>

    </footer>



</body>
</html>