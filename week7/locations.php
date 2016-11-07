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

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

$query = "SELECT * FROM markers WHERE 1";
$result = $db->query($query);
if (!$result) {
    die('Nothing in result: ');
}

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each

while ($row = $result->fetch_array()){
    // ADD TO XML DOCUMENT NODE
    $node = $dom->createElement("marker");
    $newnode = $parnode->appendChild($node);
    $newnode->setAttribute("name",$row['name']);
    $newnode->setAttribute("address", $row['address']);
    $newnode->setAttribute("lat", $row['lat']);
    $newnode->setAttribute("lng", $row['lng']);
    $newnode->setAttribute("type", $row['type']);
}

$result->close();
$db->close();
echo $dom->saveXML();

?>

