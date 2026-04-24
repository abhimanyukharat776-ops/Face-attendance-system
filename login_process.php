<?php
session_start();
include "database.php";

$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
$res = $conn->query($sql);

if($res->num_rows > 0){

  $row = $res->fetch_assoc();

  $_SESSION['user'] = $row['username'];

  if($row['role'] == "teacher"){
    header("Location: dashboard.php");
  } else {
    header("Location: face_scan.html");
  }

}else{
  echo "Invalid Login";
}
?>