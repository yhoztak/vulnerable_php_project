<?php
// Example of Broken Access Control
session_start();
if (!isset($_SESSION['isAdmin'])) {
    echo "Access denied!";
} else {
    echo "Welcome, admin!";
}
?>