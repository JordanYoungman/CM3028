<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// execute if requested using HTTP POST Method
    $title = $_POST["title"];
    $content = $_POST["content"];
    $category = $_POST["species"];
    print("<h1> $title </h1>");
    echo "<title>{$title}</title>";
    echo "<p>{$content}</p>";
    echo "<strong>{$category}</strong>";
}
?>