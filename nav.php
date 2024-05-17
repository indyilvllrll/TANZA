        <!-- Logo and Site Title -->
        <a href="index.php">
            <h1>
                <img src="images/logo.png" alt="Logo"> Tanza Oasis Hotel & Resort
            </h1>
        </a>
        <!-- Navigation Menu -->
        <nav>
            <ul class="nav-links">
                <li><a href="accommodations.php">Accommodation</a></li>
                <li><a href="dining.php">Dining</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="activities.php">Activities</a></li>
                <li><a href="attractions.php">Attraction</a></li>
                <?php
                session_start();
                if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                    // User is logged in, display settings link with dropdown
                    echo '<li class="dropdown">';
                    echo '  <a href="#">';
                    echo '    <i class="fa-solid fa-user" style="color: #009e6f;"></i>';
                    echo '    User';
                    echo '  </a>';
                    echo '  <ul class="dropdown-content hidden">';
                    echo '    <li><a href="manage_booking.php">Bookings</a></li>';
                    echo '    <li><a href="logout.php">Logout</a></li>';
                    echo '  </ul>';
                    echo '</li>';
                } else {
                    // User is not logged in, display login link
                    echo '<li><a href="login.php">LOGIN</a></li>';
                }
                ?>
            </ul>
        </nav>