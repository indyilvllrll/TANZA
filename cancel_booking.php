<?php
require_once('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $booking_id = $_POST['booking_id'];
    $reason = $_POST['reason'];

    // Update the booking status to 'cancelled' and insert the cancellation reason
    try {
        $stmt = $conn->prepare("UPDATE bookings SET booking_status = 'cancelled', cancel_reason = ? WHERE booking_id = ?");
        $stmt->bind_param("si", $reason, $booking_id);

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