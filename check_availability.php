<?php
include_once 'db_connection.php';

// Get the room ID from the URL
$roomId = isset($_GET['id']) ? $_GET['id'] : '';

// Initialize message and button status
$message = '';
$buttonDisabled = false;
$responseData = array();

if ($roomId) {
    // Count the number of bookings for this room that overlap with the submitted check-in and check-out dates
    $sql = "SELECT COUNT(booking_id) AS total_matched_bookings FROM bookings 
            WHERE check_out > ? AND check_in < ? 
            AND booking_status = 'confirmed' AND room_id = ?";
    $stmt = $conn->prepare($sql);
    $checkIn = isset($_GET['check_in']) ? $_GET['check_in'] : '';
    $checkOut = isset($_GET['check_out']) ? $_GET['check_out'] : '';
    $stmt->bind_param("sss",  $checkIn, $checkOut, $roomId); // Reversed the order of check_out and check_in
    $stmt->execute();
    $result = $stmt->get_result();
    $totalMatchedBookings = $result->fetch_assoc()['total_matched_bookings'];

    // Check if the room is available
    $sql = "SELECT quantity FROM rooms 
            WHERE id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $roomId);
    $stmt->execute();
    $result = $stmt->get_result();
    $roomAvailable = $result->fetch_assoc()['quantity'];

    // Prepare response data
    $responseData['roomAvailable'] = $roomAvailable;
    $responseData['totalMatchedBookings'] = $totalMatchedBookings;
} else {
    // Room ID not provided in URL
    $responseData['error'] = 'Room ID not provided.';
}

// Output response as JSON
header('Content-Type: application/json');
echo json_encode($responseData);
?>

