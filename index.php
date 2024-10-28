<?php
// Example of SQL Injection vulnerability
if (isset($_POST['username']) && isset($_POST['password'])) {
    $conn = new mysqli('localhost', 'root', '', 'testdb');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        echo 'Login successful';
    } else {
        echo 'Invalid credentials';
    }
}
?>