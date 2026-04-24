<!DOCTYPE html>
<html>
<head>
<title>Teacher Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body{
  margin:0;
  font-family:Poppins;
  background:#0f172a;
  display:flex;
  justify-content:center;
  align-items:center;
  height:100vh;
}

.card{
  background:#1e293b;
  padding:40px;
  border-radius:15px;
  text-align:center;
  color:white;
  width:350px;
  box-shadow:0 10px 30px rgba(0,0,0,0.5);
}

.btn{
  display:block;
  width:100%;
  padding:15px;
  margin:15px 0;
  border:none;
  border-radius:10px;
  cursor:pointer;
  font-size:16px;
}

.face{
  background:#22c55e;
  color:black;
}

.view{
  background:#3b82f6;
  color:white;
}

.back{
  background:red;
  color:white;
}
</style>
</head>

<body>

<div class="card">

<h2>👨‍🏫 Teacher Panel</h2>

<button class="btn face" onclick="openFace()">🎥 Face Attendance</button>
<button class="btn view" onclick="openAttendance()">📊 Check Attendance</button>
<button class="btn back" onclick="goBack()">⬅ Back</button>

</div>

<script>
function openFace(){
  window.location.href = "face_teacher.php";
}

function openAttendance(){
  window.location.href = "view_attendance.php";
}

function goBack(){
  window.location.href = "dashboard.php";
}
</script>

</body>
</html>