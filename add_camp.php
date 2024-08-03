<?php
include 'db_connect.php';

$camp_name = $_POST['camp_name'];
$location = $_POST['location'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$organizer_name = $_POST['organizer_name'];
$organizer_contact = $_POST['organizer_contact'];

$sql = "INSERT INTO camps (camp_name, location, start_date, end_date, organizer_name, organizer_contact)
        VALUES ('$camp_name', '$location', '$start_date', '$end_date', '$organizer_name', '$organizer_contact')";

if ($conn->query($sql) === TRUE) {
    echo "New camp added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
