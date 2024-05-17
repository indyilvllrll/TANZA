<?php
// Start the session (if not already started)
    session_start();
    // Unset or destroy the 'logged_in' session variable
    unset($_SESSION['logged_in']); // Or use session_destroy() if you want to destroy all session data
    // Redirect to login page or any other page as needed
    header("Location: index.php");
    exit;

?>