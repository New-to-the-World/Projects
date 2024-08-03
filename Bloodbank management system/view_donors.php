<?php
// Assume a database connection is established
$conn = new mysqli('localhost', 'root', '', 'bloodbank_management');

$sql = "SELECT * FROM donors";
$result = $conn->query($sql);

echo '<h1>Donors List</h1>';
if ($result->num_rows > 0) {
    echo '<table border="1"><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Date of Birth</th><th>Blood Type</th><th>Phone Number</th><th>Email</th><th>Address</th><th>Last Donation Date</th></tr>';
    while($row = $result->fetch_assoc()) {
        echo '<tr><td>' . $row["donor_id"]. '</td><td>' . $row["first_name"]. '</td><td>' . $row["last_name"]. '</td><td>' . $row["date_of_birth"]. '</td><td>' . $row["blood_type"]. '</td><td>' . $row["phone_number"]. '</td><td>' . $row["email"]. '</td><td>' . $row["address"]. '</td><td>' . $row["last_donation_date"]. '</td></tr>';
    }
    echo '</table>';
} else {
    echo "0 results";
}

$conn->close();
?>
