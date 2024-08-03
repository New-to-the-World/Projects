<?php
include 'db_connect.php';

$sql = "SELECT * FROM transactions";
$result = $conn->query($sql);

echo '<h1>Transactions List</h1>';
if ($result->num_rows > 0) {
    echo '<table border="1"><tr><th>ID</th><th>Donor ID</th><th>Recipient ID</th><th>Blood Type</th><th>Quantity</th><th>Transaction Date</th></tr>';
    while($row = $result->fetch_assoc()) {
        echo '<tr><td>' . $row["transaction_id"]. '</td><td>' . $row["donor_id"]. '</td><td>' . $row["recipient_id"]. '</td><td>' . $row["blood_type"]. '</td><td>' . $row["quantity"]. '</td><td>' . $row["transaction_date"]. '</td></tr>';
    }
    echo '</table>';
} else {
    echo "0 results";
}

$conn->close();
?>
