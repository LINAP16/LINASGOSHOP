<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usuario inicio</title>
    <link rel="stylesheet" href="../assets/css/inicio.css">
</head>
<body>
    <form action="../../controlador/login.php" class="login-form" method="post">
        <h2>Sign In</h2>
        <div class="input-box">
          <input type="text" placeholder="ingrese su usuario " name="User"   required>
        </div>
        <div class="input-box">
          <input type="password" placeholder="contraseña" name="Pass" required>
        </div>
        <div class="input-box">
          <input type="submit" value="Ingresar" class="login-btn">
        </div>
    </form>
   
   
</body>
</html>