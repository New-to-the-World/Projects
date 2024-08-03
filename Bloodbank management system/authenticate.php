<?php
// Simple authentication logic for demo purposes
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'admin' && $password == 'admin123') {
    header("Location: index.html");
} else {
    echo 'Invalid login credentials';
}
?>
