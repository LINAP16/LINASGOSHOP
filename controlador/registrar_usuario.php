<?php
require_once ('../modelo/usuarios.php');
if($_POST){
    $ModeloUsuario=new Usuario();
    $numdocUsuario=$_POST["numdocUsuario"];
    $nombreapellidoU=$_POST["nombreapellidoU"];
    $direccionUsuario=$_POST["direccionUsuario"];
    $telefonoUsuario=$_POST["telefonoUsuario"];
    $correoUsuario=$_POST["correoUsuario"];
    $idUsuarioFK=$_POST["idUsuarioFK"];
    $passwordUsuario=$_POST["passwordUsuario"];
    $ModeloUsuario->Agregar($numdocUsuario,$nombreapellidoU,$direccionUsuario,$telefonoUsuario,$correoUsuario,$passwordUsuario,$idUsuarioFK);

   }
    else{
        header('location:../vista/usuarios.php');
    }


?>
