<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Superhero System</title>
</head>
<body>
<header>
    <h1>The Super-Superhero System</h1>
    <h2>Superhero Home Page</h2>
</header>
<p>What would you like to do?</p>
<ul>
    <li><a href = "insertSuperhero.php">Insert a superhero></a></li>
    <li><a href = "displaySuperheros.php">Display all superheros></a></li>
    <li><a href = "battle.php">Insert a battle></a></li>
    <li><a href = "displayBattles.php.php">Display all battles></a></li>
<ul>
    <?
    include ("db_connect.php");
    $sql_query = "SELECT * FROm "
    ?>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: 1607731
 * Date: 17/10/2016
 * Time: 15:54
 */