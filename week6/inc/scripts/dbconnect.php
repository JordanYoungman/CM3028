<?php

$db = new mysqli(
    $hostname = "eu-cdbr-azure-north-e.cloudapp.net",
    $username = "b8e2bb8a8314c4",
    $password = "b422cf68",
    $database = "cm3020database"
);  //connects to database on azure


// test if connection was established, and print any errors
if ($db) {
    die('Connect Error: ' . mysqli_connect_errno());
}