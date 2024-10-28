<?php
// Example of Cross-Site Request Forgery (CSRF)
if (isset($_POST['update'])) {
    echo "Profile updated!";
}
?>