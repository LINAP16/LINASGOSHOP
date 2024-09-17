<?php
session_start();
require_once('conexion.php');
class Login {
    private $pdo;
    public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = conexion::StartUp();    
        }
        catch(Exception $e)
        {   echo "HAY PROBLEMAS DE CONEXION";
            die($e->getMessage());
        }
    }
 
    public function login($Usuario, $Password){
        $stm= $this->pdo->prepare("SELECT * FROM usuario WHERE User = :UserU AND Pass = :PasswordU");
        $stm->bindParam(':UserU',$Usuario);
        $stm->bindParam(':PasswordU',$Password);
        $stm->execute();
        if ($stm->rowCount() == 1){
            $result = $stm->fetch();

            $_SESSION['Nombre']=$result["Nombre"]." ".$result['Apellido'];
            $_SESSION['id']= $result['id'];
            $_SESSION['TipoUser']= $result['TipoUser'];
            return $result['id'];
            }
        return false;
        }
    public function validateSession(){
        if($_SESSION['id']==null){
            header('Location:../vista/paginas/inincio.php');
            }
        }

    public function validateSessionAdmin(){
        if($_SESSION['TipoUser']=='Administrador'){
            header('Location: ../vista/paginas/administrador.php');
            }
            else{
                header('Location:  ../vista/paginas/Productos.php');

            }
        }
    public function GetIdUsuario(){
            return $_SESSION['id'];
    }
    }
?>
