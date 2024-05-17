<?php
    require('db_connection.php');
    require('essentials.php');

?>

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
  <link rel="stylesheet" href="adminpanel.css">

  <!-- <link rel="stylesheet" href="stylescss.css"> -->

  <!-- Deferred JavaScript Execution -->
  <!-- <script src="login.js" defer></script> -->



  <!-- Font Awesome Icons with Integrity Check -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Title of the Page -->
  <title>Tanza Oasis Hotel & Resort</title>

  <!-- Favicon for the Browser Tab -->
  <link rel="icon" href="images/logo.png">



  <?php
    // Start session if not already started
    session_start();

    // Include the database connection file
    require_once('db_connection.php');

    // Include essentials
    require_once('essentials.php');

    // Handle form submission
    if(isset($_POST['login'])) {
        $username = $_POST['admin_name'];
        $password = $_POST['admin_pass'];

        // Validate credentials
        $sql = "SELECT * FROM admin_cred WHERE admin_name = ? AND admin_password = ?";
        $values = array($username, $password); // Values for prepared statement
        $datatypes = "ss"; // Data types of values (s for string)
        $result = select($sql, $values, $datatypes);

        if(mysqli_num_rows($result) == 1) {
            // Valid credentials, start session and redirect
            $_SESSION['username'] = $username;
            redirect('dashboard.php'); // Redirect to dashboard upon successful login
        } else {
            alert('danger', 'Invalid username or password.');
        }
    }
?>


    <!-- Header Section -->
    <header>
        <!-- Logo and Site Title -->
        <a href="index.php">
            <h1>
                <img src="images/logo.png" alt="Logo"> Tanza Oasis Hotel & Resort - ADMIN
            </h1>
        </a>
        <!-- Navigation Menu -->
        <nav>

      </nav>
    </header>




    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    ADMIN PANEL
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                    <form action="" method="POST">
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input name="admin_name" required type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input name="admin_pass" required type="password" class="form-control" i>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button name="login" type="submit" class="btn btn-outline-primary">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>




</body>
</html>