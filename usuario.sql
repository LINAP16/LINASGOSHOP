-- Active: 1725464391868@@127.0.0.1@3306@usuarios
DELIMITER $$

CREATE PROCEDURE pa_insertarusuario (
    IN p_Nombre VARCHAR(50),
    IN p_Apellido VARCHAR(50),
    IN p_Sexo ENUM('M', 'F'),
    IN p_FechaNacimiento DATE,
    IN p_FechaRegistro DATE,
    IN p_Correo VARCHAR(100),
    IN p_TipoUser ENUM('admin', 'user'),
    IN p_User VARCHAR(50),
    IN p_Pass VARCHAR(255)
)
BEGIN
    INSERT INTO usuario (Nombre, Apellido, Sexo, FechaNacimiento, FechaRegistro, Correo, TipoUser, User, Pass)
    VALUES (p_Nombre, p_Apellido, p_Sexo, p_FechaNacimiento, p_FechaRegistro, p_Correo, p_TipoUser, p_User, p_Pass);
END $$

DELIMITER ;







DELIMITER $$

CREATE PROCEDURE pa_leerusuario (IN p_id INT)
BEGIN
    IF p_id IS NOT NULL THEN
        SELECT * FROM usuario WHERE id = p_id;
    ELSE
        SELECT * FROM usuario;
    END IF;
END $$

DELIMITER ;








DELIMITER $$

CREATE PROCEDURE pa_actualizarusuario (
    IN p_id INT,
    IN p_Nombre VARCHAR(50),
    IN p_Apellido VARCHAR(50),
    IN p_Sexo ENUM('M', 'F'),
    IN p_FechaNacimiento DATE,
    IN p_Correo VARCHAR(100),
    IN p_TipoUser ENUM('admin', 'user'),
    IN p_User VARCHAR(50),
    IN p_Pass VARCHAR(255)
)
BEGIN
    UPDATE usuario
    SET Nombre = p_Nombre, Apellido = p_Apellido, Sexo = p_Sexo,
        FechaNacimiento = p_FechaNacimiento, Correo = p_Correo,
        TipoUser = p_TipoUser, User = p_User, Pass = p_Pass
    WHERE id = p_id;
END $$

DELIMITER ;













DELIMITER $$

CREATE PROCEDURE pa_eliminarusuario (IN p_id INT)
BEGIN
    DELETE FROM usuario WHERE id = p_id;
END $$

DELIMITER ;














<?php
// Conexión a la base de datos
include 'registro.php'; // Conexión incluida

// Datos que quieres insertar
$nombre = 'Juan';
$apellido = 'Pérez';
$sexo = 'M';
$fechaNacimiento = '1990-01-01';
$fechaRegistro = date('Y-m-d');
$correo = 'juan.perez@example.com';
$tipoUser = 'user';
$user = 'juan123';
$pass = password_hash('password123', PASSWORD_BCRYPT);

// Preparar la consulta
$sql = "CALL pa_insertarusuario(?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Preparar la consulta con PDO
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssss", $nombre, $apellido, $sexo, $fechaNacimiento, $fechaRegistro, $correo, $tipoUser, $user, $pass);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Usuario insertado correctamente";
} else {
    echo "Error al insertar el usuario: " . $conn->error;
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
