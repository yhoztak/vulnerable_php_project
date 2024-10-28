<?php
// Example of Open Redirect
if (isset($_GET['redirect'])) {
    header("Location: " . $_GET['redirect']);
}
?>