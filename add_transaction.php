<?php
include 'db_connect.php';

$donor_id = $_POST['donor_id'];
$recipient_id = $_POST['recipient_id'];
$blood_type = $_POST['blood_type'];
$quantity = $_POST['quantity'];
$transaction_date = $_POST['transaction_date'];

$sql = "INSERT INTO transactions (donor_id, recipient_id, blood_type, quantity, transaction_date)
        VALUES ('$donor_id', '$recipient_id', '$blood_type', '$quantity', '$transaction_date')";

if ($conn->query($sql) === TRUE) {
    echo "New transaction added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
