<?php
include 'db_connect.php';

$sql = "SELECT * FROM recipients";
$result = $conn->query($sql);

echo '<h1>Recipients List</h1>';
if ($result->num_rows > 0) {
    echo '<table border="1"><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Date of Birth</th><th>Blood Type</th><th>Phone Number</th><th>Email</th><th>Address</th><th>Required Blood Type</th></tr>';
    while($row = $result->fetch_assoc()) {
        echo '<tr><td>' . $row["recipient_id"]. '</td><td>' . $row["first_name"]. '</td><td>' . $row["last_name"]. '</td><td>' . $row["date_of_birth"]. '</td><td>' . $row["blood_type"]. '</td><td>' . $row["phone_number"]. '</td><td>' . $row["email"]. '</td><td>' . $row["address"]. '</td><td>' . $row["required_blood_type"]. '</td></tr>';
    }
    echo '</table>';
} else {
    echo "0 results";
}

$conn->close();
?>
