<?php
session_start();

// Include database connection script (replace with your actual file path)
require_once("db_connection.php");

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect user to login page if not logged in
    header("Location: login.php");
    exit;
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = []; // Array to store any errors

    // Validate user input
    $first_name = trim($_POST['fname']);
    $last_name = trim($_POST['lname']);
    $email = trim($_POST['email']);

    // Name validation
    if (empty($first_name)) {
        $errors[] = "Please enter your First name.";
    }

    if (empty($last_name)) {
        $errors[] = "Please enter your Last name.";
    }

    // Email validation
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address.";
    }

    // If no errors, update user information
    if (empty($errors)) {
        $user_id = $_SESSION['user_id'];

        $sql = "UPDATE users 
                SET first_name = '$first_name', 
                    last_name = '$last_name', 
                    email = '$email' 
                WHERE id = $user_id";

        if (mysqli_query($conn, $sql)) {
            // Update successful, redirect to profile page or display confirmation message
            $_SESSION['message'] = "Profile updated successfully!";
            header("Location: profile.php"); // Replace with your profile page
            exit;
        } else {
            $errors[] = "Error updating profile: " . mysqli_error($conn);
        }
    }

    // If errors exist, store them in session and redirect back to edit profile
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header("Location: edit_profile.php");
        exit;
    }
} else {
    // Accessing update_profile.php directly should not be allowed (redirect to login?)
    header("Location: index.php");
    exit;
}
?>
