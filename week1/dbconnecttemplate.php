<?php

$db = new mysqli(
    "eu-cdbr-azure-north-e.cloudapp.net",
    "b8e2bb8a8314c4",
    "b422cf68",
    "cm3020database"
);  //connects to database on azure


// test if connection was established, and print any errors
if (!$db) {
    die('Connect Error: ' . mysqli_connect_errno());
}