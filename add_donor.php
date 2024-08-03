<?php
// Assume a database connection is established
$conn = new mysqli('localhost', 'root', '', 'bloodbank_management');

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$date_of_birth = $_POST['date_of_birth'];
$blood_type = $_POST['blood_type'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$address = $_POST['address'];
$last_donation_date = $_POST['last_donation_date'];

$sql = "INSERT INTO donors (first_name, last_name, date_of_birth, blood_type, phone_number, email, address, last_donation_date)
        VALUES ('$first_name', '$last_name', '$date_of_birth', '$blood_type', '$phone_number', '$email', '$address', '$last_donation_date')";

if ($conn->query($sql) === TRUE) {
    echo "New donor added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
