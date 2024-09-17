<?php
require_once('Conexion.php');
require_once('Login.php');

class Usuario{
    //ATRIBUTOS
    private $pdo;//VARIABLE PARA CONEXION
    public $id;
    public $Nombre;
    public $Apellido;
    public $Sexo;
    public $FechaRegistro;
    public $FechaNacimiento;
    public $Correo;
    public $TipoUser;
    public $User;
    public $Pass;
//MÉTODOS
    public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = Conexion::StartUp(); //SE CONECTA CON LA BASE DE DATOS A TRAVÉS DE LA FUNCIÓN STARTUP   
        }
        catch(Exception $e)
        {   echo "HAY PROBLEMAS DE CONEXION";
            die($e->getMessage());
        }
    }
    //MÉTODO DE CONSULTA DE LA TABLA USUARIOS
    public function Listar(){
        $rows = null;
        $stm = $this->pdo->prepare("call pa_listarusuarios()");
        $stm->execute();
        while($result = $stm->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
   


    //MÉTODO PARA OBTENER EL ID DE UN USUARIO
    public function Obtener($id){
        $rows=null;
        $stm=$this->pdo->prepare("call pa_consultarusuariosporid(:id)");
        $stm->bindParam(':id',$id);
        $stm->execute();
        while($result=$stm->fetch()){
                $rows[]=$result;
        }
        return $rows;
    }

    // MÉTODO PARA ACTUALIZAR USUARIO
    public function Actualizar($Nombre,$Apellido,$Sexo,$FechaNacimiento,$Correo, $TipoUser, $User,$Pass,$id){
        $stm=$this->pdo->prepare("call pa_actualizarusuario(:Nombre,:Apellido,:Sexo,:FechaNacimiento,:Correo,:TipoUser,:User,:Pass,:id)");
        $stm->bindParam(':Nombre',$Nombre);
        $stm->bindParam(':Apellido',$Apellido);
        $stm->bindParam(':Sexo',$Sexo);
        $stm->bindParam(':FechaNacimiento',$FechaNacimiento);
        $stm->bindParam(':Correo',$Correo);
        $stm->bindParam(':TipoUser',$TipoUser);
        $stm->bindParam(':User',$User);
        $stm->bindParam(':Pass',$Pass);
        $stm->bindParam(':id',$id);
        if($stm->execute()){
            $model=new Login();
            $model->validateSessionAdmin();
        //header('Location:../Vista/Usuarios.php');
        }else{
        header('Location:../Vista/EditarUsuario.php');
        }
    }


    
    //MÉTODO PARA ELIMINAR UN USUARIO
    public function Eliminar($id){
        $stm=$this->pdo->prepare("call pa_eliminarusuario(:id)");
        $stm->bindParam(':id',$id);
        if($stm->execute()){
        header('Location:../Vista/Paginas/Admin.php');
        }else{
        header('Location:../Vista/EliminarUsuario.php');
        }
    }


}
?>