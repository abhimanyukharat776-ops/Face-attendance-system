<?php
include "database.php";

$data = json_decode(file_get_contents("php://input"), true);

// ✅ FIXED POSITION
if(!$data){
  echo "Invalid request";
  exit();
}

$name = $conn->real_escape_string($data['name']);
$subject = $conn->real_escape_string($data['subject']);

$date = date("Y-m-d");
$time = date("H:i:s");

$check = "SELECT * FROM attendance 
WHERE student_name='$name' 
AND subject='$subject' 
AND date='$date'";

$res = $conn->query($check);

if($res->num_rows == 0){

  $sql = "INSERT INTO attendance (student_name,subject,date,time)
          VALUES ('$name','$subject','$date','$time')";

  $conn->query($sql);

  echo "Face Attendance Saved ✅";

} else {
  echo "Already Marked ❌";
}
?>