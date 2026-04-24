<!DOCTYPE html>
<html>
<head>
<title>Login</title>

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
  padding:30px;
  border-radius:10px;
  color:white;
  width:300px;
  text-align:center;
}

input,select{
  width:100%;
  padding:10px;
  margin:10px 0;
  border:none;
  border-radius:6px;
}

button{
  width:100%;
  padding:10px;
  background:#22c55e;
  border:none;
  border-radius:6px;
  cursor:pointer;
}
</style>
</head>

<body>

<div class="card">
<h2>Login</h2>

<form action="login_process.php" method="POST">

<select name="role">
  <option value="student">Student</option>
  <option value="teacher">Teacher</option>
</select>

<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>

<button>Login</button>

</form>
</div>

</body>
</html>