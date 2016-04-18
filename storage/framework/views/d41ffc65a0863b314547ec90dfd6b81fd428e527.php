<!DOCTYPE HTML>
<html lang="en">
  <link href="assets/bootstrap/css/login.css" rel="stylesheet" type="text/css" /> 
  <title>Login | EmpSys</title> 
</head>
<body>
<div class="login-page">
  <div class="form">
    <h3>Login EmpSys</h3>
    <form class="login-form">
      <input type="text" placeholder="Username"/>
      <input type="password" placeholder="Password"/>
      <button>login</button>
      <p class="message">Belum terdaftar? <a id="createAccount" href="#" onclick="getElementById('hubungiAdmin').innerHTML='<strong>Harap hubungi bagian HRD</strong>'">Buat akun</a></p>
      <p class="message" id="hubungiAdmin"></p>
    </form>
  </div>
</div>
</body>
</html>