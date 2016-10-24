<?php

session_start();
$accesslevel = $_COOKIE['access_level_cookie'];

displayAccessLevelInformation($accesslevel);

function displayAccessLevelInformation($accessLevel)
{
    if ($accessLevel == "standarduser") {
        echo "<p> you are a standard user</p>";
    }
    elseif ($accessLevel == "root") {
        echo "<p> you are a root user</p>";
        echo "<p> you have admin rights</p>";
    }
}
?>