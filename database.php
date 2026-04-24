<?php
$conn = new mysqli("localhost", "root", "", "qr_project");

if ($conn->connect_error) {
    die("Connection failed");
}
?>