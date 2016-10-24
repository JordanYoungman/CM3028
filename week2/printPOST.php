<html>
<head>
    <title>
        Hi
    </title>
</head>
<body>
</body>
</html>
<?
$title = $_POST["title"];
$content = $_POST["content"];
$category = $_POST["species"];
echo "<title>{$title}</title>";
echo "<p>{$content}</p>";
echo "<strong>{$category}</strong>";
?>