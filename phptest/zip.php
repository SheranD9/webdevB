<?php
$zip1 = $_POST['zip1'] ?? '';
$zip2 = $_POST['zip2'] ?? '';

if (preg_match('/^\d{3}$/', $zip1) && preg_match('/^\d{4}$/', $zip2)) {
    echo "The postal code {$zip1}-{$zip2} is valid.";
} else {
    echo "Invalid postal code. Please enter in the format 123-4567.";
}
?>