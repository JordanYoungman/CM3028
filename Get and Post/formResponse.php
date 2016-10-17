<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$forename = $_POST["forename"];
$surname = $_POST["surname"];
echo "<p>Hello{$forename}{$surname}</p>"
?>