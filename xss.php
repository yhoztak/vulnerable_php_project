<?php
// Example of Cross-Site Scripting (XSS)
if (isset($_POST['comment'])) {
    echo "User comment: " . $_POST['comment'];
}
?>