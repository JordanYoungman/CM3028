<?php

$username = $_POST["name"];
$password = $_POST["password"];

if ($username =="Jordan" && $password=="Hello" )

{
    setcookie('access_level_cookie','standarduser');
}

header('Location: loggedIn.php');

?>
