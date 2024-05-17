<?php


// Include the database connection file
include_once 'db_connection.php';
include_once 'essentials.php';

$showAlert = false;

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
        alert('warning', " Error, Email already exists!");
        $showAlert = true;

    } else {
        // Insert user data into database
        $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";
        if (mysqli_query($conn, $sql)) {
            echo "Registration successful!";
            alert('success', "Registration successful!");
            $showAlert = true;


        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            
            // alert(warning, " Error, Email already exists!");

        }
    }
} else {
    // If the form is not submitted, redirect or show an error message
    
    alert('danger', " Error, Form not submitted!!");

}

// Close the database connection
mysqli_close($conn);
?>
