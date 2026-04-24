<?php
include "database.php";

$res = $conn->query("SELECT * FROM faces");

$data = [];

while($row = $res->fetch_assoc()){
  $data[] = $row;
}

echo json_encode($data);
?>