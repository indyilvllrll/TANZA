<?php
// Include the database connection file
include_once 'db_connection.php';

// Check if room ID is provided in the URL parameters
if(isset($_GET['id'])) {
    // Get the room ID from the URL parameters
    $roomId = $_GET['id'];

    // Query the database to fetch the price of the room
    $sql = "SELECT price, adult, children FROM rooms WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $roomId);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the query was successful and if a room with the provided ID exists
    if ($result->num_rows > 0) {
        // Fetch the price from the result set
        $row = $result->fetch_assoc();
        $price = $row['price'];
        $adult = $row['adult'];
        $children = $row['children'];

        // Construct an associative array containing all the data
        $responseData = array(
            "price" => $price,
            "adult" => $adult,
            "children" => $children
        );

        // Return the data as JSON response
        echo json_encode($responseData);
    } else {
        // Room with the provided ID does not exist
        http_response_code(404); // Not Found
        echo json_encode(array("error" => "Room not found"));
    }

    // Close the database connection and statement
    $stmt->close();
    $conn->close();
} else {
    // Room ID is not provided in the URL parameters
    http_response_code(400); // Bad Request
    echo json_encode(array("error" => "Room ID not provided"));
}
?>

