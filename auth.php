<?php
// auth.php

// Include the database connection file
include_once 'db_connection.php';

// Function to register a new user
function register($conn) {
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data and sanitize
        $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

        // Check if the email already exists in the database
        $sql_check_email = "SELECT * FROM users WHERE email='$email'";
        $result_check_email = mysqli_query($conn, $sql_check_email);
        if (mysqli_num_rows($result_check_email) > 0) {
            return "Error: Email already exists!";
        } else {
            // Insert user data into database
            $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";
            if (mysqli_query($conn, $sql)) {
                return "Registration successful!";
            } else {
                return "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    } else {
        // If the form is not submitted, return an error message
        return "Error: Form not submitted!";
    }
}

// Function to handle user login
function login() {
    // Your login logic goes here...
    // After successful login
    session_start();
    $_SESSION['logged_in'] = true;
    // Redirect to home page or any other page as needed
    header("Location: index.php");
    exit;
}

// Function to handle user logout
function logout() {
    // Start the session (if not already started)
    session_start();
    // Unset or destroy the 'logged_in' session variable
    unset($_SESSION['logged_in']); // Or use session_destroy() if you want to destroy all session data
    // Redirect to login page or any other page as needed
    header("Location: login.php");
    exit;
}

// Close the database connection
mysqli_close($conn);
?>
