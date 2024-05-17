<?php
require_once('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $booking_id = $_POST['booking_id'];
    $room_no = $_POST['room_no'];

    // Update the booking with the assigned room number and set the booking status to confirmed
    try {
        $stmt = $conn->prepare("UPDATE bookings SET arrival = ?, booking_status = 'confirmed' WHERE booking_id = ?");
        $stmt->bind_param("si", $room_no, $booking_id);

        if ($stmt->execute()) {
            echo 'success';
        } else {
            echo 'Error updating record: ' . $conn->error;
        }
    } catch (mysqli_sql_exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>