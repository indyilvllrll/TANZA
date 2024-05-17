<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appdev";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function filteration($data){
    foreach($data as $key => $value){
        $data[$key] = trim($value);
        $data[$key] = stripcslashes($value);
        $data[$key] = htmlspecialchars($value);
        $data[$key] = strip_tags($value);

    }
    return $data;
}

function select($sql, $values, $datatypes)
{
    global $conn;
    if($stmt = mysqli_prepare($conn, $sql)) {
        // Bind parameters
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);

        // Execute the statement
        mysqli_stmt_execute($stmt);

        // Get result
        $res = mysqli_stmt_get_result($stmt);
        
        // Close statement
        mysqli_stmt_close($stmt);

        return $res;
    } else {
        die("Query cannot be executed - SELECT");
    }
}



?>
