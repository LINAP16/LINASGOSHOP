<?php
session_start();
require_once('../modelo/login.php');
if ($_POST) {
    $Usuario = $_POST['User'];
    $Password = $_POST['Pass'];

    $model = new Login();
    $entrada = $model->login($Usuario, $Password);
    if ($entrada != false) {
        $model->validateSessionAdmin();
    } else {
        $_SESSION['error_message'] = "Usuario o contraseña incorrectos";
        header('Location: ../vista/paginas/inicio.php');
        exit(); 
    }
}

?>