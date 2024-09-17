<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style>
        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
            font-family: "Segoe UI", "Roboto", "Arial Black", Arial, sans-serif;
            font-size: 16px;
            color: white;
            margin: 0;
            background-color: rgb(209, 196, 233 );
        }
        .background {
            width: 430px;
            height: 520px;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
        }
        .background .shape {
            height: 200px;
            width: 200px;
            position: absolute;
            border-radius: 50%;
        }
        form {
            width: 29rem;
            background-color: rgba(250, 250, 250);
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgb(255, 255, 255);
            padding: 2em 2em 3em;
            margin: 3em auto;
        }
        form * {
            font-family: 'Poppins', sans-serif;
            color:#4a148c ;
            letter-spacing: 0.5px;
            outline: none;
            border: none;
        }
        form h2 {
            font-size: 32px;
            font-weight: 500;
            line-height: 42px;
            text-align: center;
        }
        label {
            display: block;
            margin-top: 30px;
            font-size: 16px;
            font-weight: 500;
        }
        input, select {
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.07);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
        }
        ::placeholder {
            color: ##d1c4e9;
        }
        button {
            margin-top: 50px;
            width: 100%;
            background-color: #e1bee7;
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }
        @media screen and (max-width: 600px) {
            body { font-size: 13px; }
            form { width: 90%; padding: 25px 20px; }
        }
    </style>
</head>
<body>
    <form method="POST" action="registro.php">
        <h2>Registro</h2>
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="apellido" placeholder="Apellido" required>
        <select name="sexo" required>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select>
        <input type="date" name="fechanacimiento" placeholder="Fecha de Nacimiento" required>
        <input type="email" name="correo" placeholder="Correo Electrónico" required>
        <select name="tipouser" required>
            <option value="user">Usuario</option>
            <option value="admin">Administrador</option>
        </select>
        <input type="text" name="user" placeholder="Cliente" required>
        <input type="password" name="pass" placeholder="Contraseña" required>
        <button type="submit">Registrarse</button>
    </form>
</body>
</html>
