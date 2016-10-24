<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// execute if requested using HTTP POST Method
    $forename = $_POST["forename"];
    $surname = $_POST["surname"];
    print("<h1>Hello {$forename} {$surname}</h1>");
}
?>