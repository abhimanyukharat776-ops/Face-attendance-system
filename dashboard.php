<!DOCTYPE html>
<html>
<head>
<title>AI Dashboard</title>

<style>
body{
  margin:0;
  font-family:Poppins;
  background:linear-gradient(135deg,#0f172a,#1e293b);
  color:white;
}

/* GLASS CARD */
.card{
  width:260px;
  height:180px;
  background:rgba(255,255,255,0.08);
  backdrop-filter:blur(15px);
  border-radius:20px;
  display:flex;
  flex-direction:column;
  justify-content:center;
  align-items:center;
  cursor:pointer;
  transition:0.4s;
}

.card:hover{
  transform:translateY(-10px) scale(1.05);
  background:#22c55e;
  color:black;
}

.container{
  display:flex;
  justify-content:center;
  gap:50px;
  margin-top:100px;
}

h1{
  text-align:center;
  margin-top:30px;
}
</style>
</head>

<body>

<h1>🤖 AI Attendance System</h1>

<div class="container">

<div class="card" onclick="location.href='face_scan.html'">
  🎓 Student
</div>

<div class="card" onclick="location.href='teacher_panel.html'">
  👨‍🏫 Teacher
</div>

</div>

</body>
</html>