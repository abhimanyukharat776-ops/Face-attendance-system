<?php
include "database.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Attendance Record</title>

<style>
body{
  font-family:Poppins;
  background:#0f172a;
  color:white;
  text-align:center;
}

table{
  width:80%;
  margin:auto;
  border-collapse:collapse;
  margin-top:30px;
}

th,td{
  padding:10px;
  border:1px solid white;
}

th{
  background:#22c55e;
  color:black;
}
</style>
</head>

<body>

<h2> Face Attendance Records</h2>
<table>
<tr>
  <th>ID</th>
  <th>Name</th>
  <th>Subject</th>
  <th>Date</th>
  <th>Time</th>
</tr>

<?php

$sql = "SELECT * FROM attendance ORDER BY id DESC";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
  echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['student_name']}</td>
    <td>{$row['subject']}</td>
    <td>{$row['date']}</td>
    <td>{$row['time']}</td>
  </tr>";
}

?>

</table>

</body>
</html>