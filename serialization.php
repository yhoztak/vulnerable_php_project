<?php
// Example of Insecure Deserialization
if (isset($_POST['data'])) {
    $data = unserialize($_POST['data']);
    echo "Deserialized data: " . print_r($data, true);
}
?>