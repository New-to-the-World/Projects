<?php
include 'db_connect.php';

$sql = "SELECT * FROM camps";
$result = $conn->query($sql);

echo '<h1>Camps List</h1>';
if ($result->num_rows > 0) {
    echo '<table border="1"><tr><th>ID</th><th>Camp Name</th><th>Location</th><th>Start Date</th><th>End Date</th><th>Organizer Name</th><th>Organizer Contact</th></tr>';
    while($row = $result->fetch_assoc()) {
        echo '<tr><td>' . $row["camp_id"]. '</td><td>' . $row["camp_name"]. '</td><td>' . $row["location"]. '</td><td>' . $row["start_date"]. '</td><td>' . $row["end_date"]. '</td><td>' . $row["organizer_name"]. '</td><td>' . $row["organizer_contact"]. '</td></tr>';
    }
    echo '</table>';
} else {
    echo "0 results";
}

$conn->close();
?>
