<?php
include 'db_connect.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$date_of_birth = $_POST['date_of_birth'];
$blood_type = $_POST['blood_type'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$address = $_POST['address'];
$required_blood_type = $_POST['required_blood_type'];

$sql = "INSERT INTO recipients (first_name, last_name, date_of_birth, blood_type, phone_number, email, address, required_blood_type)
        VALUES ('$first_name', '$last_name', '$date_of_birth', '$blood_type', '$phone_number', '$email', '$address', '$required_blood_type')";

if ($conn->query($sql) === TRUE) {
    echo "New recipient added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
