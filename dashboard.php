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
  <!-- <script src="login.js" defer></script> -->


  <!-- <style>
        /* Adjustments for sidebar */
        .sidepanel {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #f8f9fa;
            padding-top: 100px;
        }

        .sidepanel a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 20px;
            color: #000;
            display: block;
        }

        .sidepanel a:hover {
            background-color: #e9ecef;
        }

        /* Adjustments for content */
        .content {
            margin-left: 250px;
            padding: 20px;
        }


        }
    </style> -->

    <link href="../bootstrap/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }

  .b-example-divider {
    width: 100%;
    height: 3rem;
    background-color: rgba(0, 0, 0, .1);
    border: solid rgba(0, 0, 0, .15);
    border-width: 1px 0;
    box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
  }

  .b-example-vr {
    flex-shrink: 0;
    width: 1.5rem;
    height: 100vh;
  }

  .bi {
    vertical-align: -.125em;
    fill: currentColor;
  }

  .nav-scroller {
    position: relative;
    z-index: 2;
    height: 2.75rem;
    overflow-y: hidden;
  }

  .nav-scroller .nav {
    display: flex;
    flex-wrap: nowrap;
    padding-bottom: 1rem;
    margin-top: -1px;
    overflow-x: auto;
    text-align: center;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
  }

  .btn-bd-primary {
    --bd-violet-bg: #712cf9;
    --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

    --bs-btn-font-weight: 600;
    --bs-btn-color: var(--bs-white);
    --bs-btn-bg: var(--bd-violet-bg);
    --bs-btn-border-color: var(--bd-violet-bg);
    --bs-btn-hover-color: var(--bs-white);
    --bs-btn-hover-bg: #6528e0;
    --bs-btn-hover-border-color: #6528e0;
    --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
    --bs-btn-active-color: var(--bs-btn-hover-color);
    --bs-btn-active-bg: #5a23c8;
    --bs-btn-active-border-color: #5a23c8;
  }

  .bd-mode-toggle {
    z-index: 1500;
  }

  .bd-mode-toggle .dropdown-menu .active .bi {
    display: block !important;

    
  }
</style>

<link href="../bootstrap/sidebars/sidebars.css" rel="stylesheet">
<link href="../bootstrap/dashboard/dash.css" rel="stylesheet">


  <!-- Font Awesome Icons with Integrity Check -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Title of the Page -->
  <title>Tanza Oasis Hotel & Resort</title>

  <!-- Favicon for the Browser Tab -->
  <link rel="icon" href="images/logo.png">
    <!-- Header Section -->
    <header>
        <!-- Logo and Site Title -->
        <a href="index.php">
            <h1>
                <img src="images/logo.png" alt="Logo"> Tanza Oasis Hotel & Resort
            </h1>
        </a>
        <!-- Navigation Menu -->
        <nav>
          <ul class="nav-links">
            <li>                <a href="settings.php">
                  <i class="fa-solid fa-arrow-right-from-bracket
" style="color: #009e6f;"></i>
                  Logout
              </a></li>;

          </ul>
      </nav>
    </header>





<body>
<main class="d-flex flex-nowrap">


<div class="flex-shrink-0 p-3" style="width: 280px;">
    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
      <svg class="bi pe-none me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-5 fw-semibold">ADMIN PANEL</span>
    </a>
    <ul class="list-unstyled ps-0">
      <li class="mb-1">
        <button class="btn d-inline-flex align-items-center rounded border-0" aria-expanded="true">
            <a href="dashboard.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Dashboard</a>
        </button>
      </li>
      <li class="mb-1">
        <button class="btn d-inline-flex align-items-center rounded border-0 collapsed" aria-expanded="false">
            <a href="ap_users.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Users</a>
        </button>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
          Bookings
        </button>
        <div class="collapse" id="dashboard-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="ap_newbookings.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded">New Bookings</a></li>
            <li><a href="ap_bookingrecords.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Booking Records</a></li>
          </ul>
        </div>
      </li>


    </ul>
</div>




<div class="b-example-divider b-example-vr"></div>

<div class="col-lg-10 ms-auto p-4 overflow-scroll">
    <h3 class="mb4">Dashboard</h3>

    <?php
require_once('db_connection.php');

try {
    // Count total number of bookings and sum of trans_amt
    $stmtTotal = $conn->prepare("SELECT COUNT(*) AS total_bookings, SUM(trans_amt) AS total_amount FROM bookings");
    $stmtTotal->execute();
    $resultTotal = $stmtTotal->get_result();
    $totalData = $resultTotal->fetch_assoc();

    // Count number of confirmed bookings and sum of trans_amt
    $stmtConfirmed = $conn->prepare("SELECT COUNT(*) AS confirmed_bookings, SUM(trans_amt) AS confirmed_amount FROM bookings WHERE booking_status = 'confirmed'");
    $stmtConfirmed->execute();
    $resultConfirmed = $stmtConfirmed->get_result();
    $confirmedData = $resultConfirmed->fetch_assoc();

    // Count number of pending bookings and sum of trans_amt
    $stmtPending = $conn->prepare("SELECT COUNT(*) AS pending_bookings, SUM(trans_amt) AS pending_amount FROM bookings WHERE booking_status = 'pending'");
    $stmtPending->execute();
    $resultPending = $stmtPending->get_result();
    $pendingData = $resultPending->fetch_assoc();

    // Count number of cancelled bookings and sum of trans_amt
    $stmtCancelled = $conn->prepare("SELECT COUNT(*) AS cancelled_bookings, SUM(trans_amt) AS cancelled_amount FROM bookings WHERE booking_status = 'cancelled'");
    $stmtCancelled->execute();
    $resultCancelled = $stmtCancelled->get_result();
    $cancelledData = $resultCancelled->fetch_assoc();

    $stmtUser = $conn->prepare("SELECT COUNT(*) AS total_users  FROM users");
    $stmtUser->execute();
    $resultUser = $stmtUser->get_result();
    $userData = $resultUser->fetch_assoc();
} catch (mysqli_sql_exception $e) {
    echo "Error: " . $e->getMessage();
}
?>

<main role="main" class="col-md-8 ml-sm-auto col-lg-12 my-5">
    <div class="card-list">
        <div class="row">
            <div class="title">Booking Analytics</div>
            <div class="title"></div>

            <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                <div class="card blue">
                    <div class="title">Total Bookings</div>
                    <i class="zmdi zmdi-upload"></i>
                    <div class="value"><?php echo $totalData['total_bookings']; ?></div>
                    <div class="stat"><b><?php echo 'P' . number_format($totalData['total_amount'], 2); ?></b></div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                <div class="card green">
                    <div class="title">Active Bookings</div>
                    <i class="zmdi zmdi-upload"></i>
                    <div class="value"><?php echo $confirmedData['confirmed_bookings']; ?></div>
                    <div class="stat"><b><?php echo 'P' . number_format($confirmedData['confirmed_amount'], 2); ?></b></div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                <div class="card orange">
                    <div class="title">Pending Bookings</div>
                    <i class="zmdi zmdi-download"></i>
                    <div class="value"><?php echo $pendingData['pending_bookings']; ?></div>
                    <div class="stat"><b><?php echo 'P' . number_format($pendingData['pending_amount'], 2); ?></b></div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                <div class="card red">
                    <div class="title">Cancelled Bookings</div>
                    <i class="zmdi zmdi-download"></i>
                    <div class="value"><?php echo $cancelledData['cancelled_bookings']; ?></div>
                    <div class="stat"><b><?php echo 'P' . number_format($cancelledData['cancelled_amount'], 2); ?></b></div>
                </div>
            </div>
        </div>
    </div>
</main>

            <main role="main" class="col-md-8 ml-sm-auto col-lg-12 my-5">
			<div class="card-list">
				<div class="row">
                <div class="title">Users</div>
                <div class="title"></div>

					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
						<div class="card green">
							<div class="title">Active Users</div>
							<i class="zmdi zmdi-upload"></i>
							<div class="value"><?php echo $userData['total_users']; ?></div>

						</div>
					</div>

				</div>
			</div>

            </main> 
</div>




<script src="../bootstrap/assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- <script src="sidebars.js"></script></body> -->


</body>
</html>