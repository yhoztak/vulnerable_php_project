<?php
// Example of Directory Traversal
if (isset($_GET['file'])) {
    $file = $_GET['file'];
    echo file_get_contents($file);
}
?>