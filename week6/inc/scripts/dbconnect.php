<?php

$db = new mysqli(
    "eu-cdbr-azure-north-e.cloudapp.net",
    "b8e2bb8a8314c4",
    "b422cf68",
    "cm3020database");

if ($db->connect_errno){
    die('Connectfailed['.$db->connect_error.']');
}