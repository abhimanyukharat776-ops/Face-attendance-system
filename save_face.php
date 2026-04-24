<?php
include "database.php";

$data = json_decode(file_get_contents("php://input"), true);

$name = $data['name'];
$desc = json_encode($data['descriptor']);

$conn->query("INSERT INTO faces (name,descriptor) VALUES ('$name','$desc')");

echo "Saved";
?>