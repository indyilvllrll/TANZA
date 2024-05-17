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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <!-- Link to External Stylesheet -->
  <link rel="stylesheet" href="style.css">


  <!-- Deferred JavaScript Execution -->
  <!-- <script src="animations.js" defer></script> -->

  <!-- Font Awesome Icons with Integrity Check -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Title of the Page -->
  <title>Tanza Oasis Hotel & Resort</title>



  <script>
        function logout() {
            // Your logout logic here
            // For example, you can make an AJAX call to logout.php
            // Or redirect the user to logout.php
            window.location.href = 'logout.php';
        }
    </script>


  <!-- Favicon for the Browser Tab -->
  <link rel="icon" href="images/logo.png">

</head>

<body>

    <!-- Header Section -->
    <header>
        <?php include_once 'nav.php'; ?>
    </header>




<div class="d-flex flex-nowrap">

<?php
    require_once('db_connection.php');

    try {

        $userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';

        // Fetch all pending bookings
        $stmt = $conn->prepare("SELECT booking_id, user_id, room_id, check_in, check_out, trans_amt, trans_status, booking_status FROM bookings WHERE user_id=?");
        $stmt->bind_param("i", $userId );
        $stmt->execute();
        $result = $stmt->get_result();
    
        $bookingRows = '';
    
        while ($booking = $result->fetch_assoc()) {
            // Fetch user's full name
            $stmtUser = $conn->prepare("SELECT first_name, last_name FROM users WHERE id = ?");
            $stmtUser->bind_param("i", $userId);
            $stmtUser->execute();
            $resultUser = $stmtUser->get_result();
            $user = $resultUser->fetch_assoc();
            $fullName = htmlspecialchars($user['first_name'] . ' ' . $user['last_name']);
    
            // Fetch room name
            $stmtRoom = $conn->prepare("SELECT name FROM rooms WHERE id = ?");
            $stmtRoom->bind_param("i", $booking['room_id']);
            $stmtRoom->execute();
            $resultRoom = $stmtRoom->get_result();
            $room = $resultRoom->fetch_assoc();
            $roomName = htmlspecialchars($room['name']);
    
            // Fetch user's phone number
            $stmtDetails = $conn->prepare("SELECT phonenum, email FROM booking_details WHERE booking_id = ?");
            $stmtDetails->bind_param("i", $booking['booking_id']);
            $stmtDetails->execute();
            $resultDetails = $stmtDetails->get_result();
            $details = $resultDetails->fetch_assoc();
            $phoneNum = htmlspecialchars($details['phonenum']);
            $email = htmlspecialchars($details['email']);

            // Determine the status background class
            $status_bg = '';
            switch ($booking['booking_status']) {
                case 'confirmed':
                    $status_bg = 'bg-success';
                    break;
                case 'cancelled':
                    $status_bg = 'bg-danger';
                    break;
                case 'pending':
                    $status_bg = 'bg-info';
                    break;
                default:
                    $status_bg = 'bg-secondary'; // Default case for any other statuses
            }
    
            // Generate booking row
            $bookingRows .= "
                <tr>
                    <td>
                        BookingID: {$booking['booking_id']}<br>
                        Name: {$fullName}<br>
                        Phone No: {$phoneNum}<br>
                        Email: {$email}

                    </td>
                    <td>
                        Room: {$roomName}<br>
                        Price: ₱{$booking['trans_amt']}
                    </td>
                    <td>
                        Check-in: {$booking['check_in']}<br>
                        Checkout: {$booking['check_out']}<br>
                        Paid: " . ($booking['trans_status'] === 'completed' ? 'Yes' : 'No') . "
                    </td>
                    <td>
                        <span class='badge {$status_bg}'>{$booking['booking_status']}</span>
                    </td>
                </tr>
            ";
        }
    } catch (mysqli_sql_exception $e) {
        echo "Error: " . $e->getMessage();
    }

?>


  <div class="b-example-divider b-example-vr"></div>

  <div class="col-lg-9 ms-auto p-4 overflow-scroll">
    <h3 class="mb4">Bookings</h3>

    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <div class="text-end mb-4">
                <!-- <button type="print" class="btn btn-info text-white shadow-none">Print PDF</button> -->
                <!-- <input type="text" oninput="search_user(this.value)" class="form control shadow" placeholder="Type to search..."> -->
            </div>

            <div class="table-responsive">

            <table class="table table-bordered border table-hover " >
                <thead  class="thead-dark">
                    <tr>
                    <th scope="col">User Details</th>
                    <th scope="col">Room Details</th>
                    <th scope="col">Booking Details</th>
                    <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $bookingRows; ?>

                    </tbody>
                </table>

            </div>
 
        </div>


  </div>


  </div>



</div>


<script src="../bootstrap/assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



    <!-- FOOTER SECTION -->
    <footer>
        <!-- Quick Links -->
        <div class="quick-links">
    
                <a href="accommodations.php">Accommodation</a>
                <a href="dining.php">Dining</a>
                <a href="events.php">Events</a>
                <a href="activities.php">Activities</a>
                <a href="attractions.php">Attraction</a>

        </div>

        <!-- Social Links -->
        <div class="social-links">
            <!-- Facebook Icon and Link -->
            <a href="https://www.facebook.com/tanzaoasishotel" class="icon" id="facebook" target="_blank">
                <i class="fab fa-facebook fa-bounce" style="color: #750023;"></i>
            </a>
            <!-- Instagram Icon and Link -->
            <a href="https://www.instagram.com/tanzaoasishotel/" class="icon" id="instagram" target="_blank">
                <i class="fab fa-instagram fa-bounce" style="color: #85002e;"></i>
            </a>
            <!-- Email Icon and Link -->
            <a href="mailto:sales@tanzaoasis.com" class="icon" id="email">
                <i class="fad fa-envelope fa-bounce" style="--fa-primary-color: #7a0035; --fa-secondary-color: #f03888;"></i>
            </a>
        </div>

        <!-- Copyright Notice -->
        <p>Built by Jhonna Lie Villaruel © 2024</p>

    </footer>


    
</body>
</html>
