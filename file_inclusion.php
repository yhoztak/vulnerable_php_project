<?php
// Example of Local and Remote File Inclusion (LFI/RFI)
if (isset($_GET['file'])) {
    include($_GET['file']);
}
?>