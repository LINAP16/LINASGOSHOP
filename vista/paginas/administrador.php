<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/administrador.css">
    <title>Document</title>
</head>

<body>
    <?php
    require_once('../../modelo/usuarios.php');
    require_once('../../modelo/login.php');
    
    // Verificar sesión
    $ModeloLogin = new Login();
    $ModeloLogin->validateSession();
    $model = new Usuario();
    ?>
    
    <nav class="navbar">
        <div class="logo">
            <a href="../../index.php">Bienvenidos administrador LinasgoShop</a>
        </div>
        <ul class="nav-links">
            <li><a href="../../controlador/cerrarsecion.php">Cerrar Sesión</a></li>
        </ul>
        

    </nav>

    <header class="header">
        <div class="background-image"></div>
        <div class="header-content">
            <h1><?php echo "Administradora " . htmlspecialchars($_SESSION['Nombre']); ?></h1>
        </div>
      <a href="AgregarUsuario.php" class="btn-agregar">
          <button>Agregar Usuario</button>

          </a>
        </header>


    <table class="table table-striped">
        <thead>
            <tr>
                <th style="width:30px;">Id</th>
                <th style="width:150px;">Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th style="width:100px;">Sexo</th>
                <th style="width:100px;">Nacimiento</th>
                <th style="width:100px;">Tipo de Usuario</th>
                <th style="width:100px;">Usuario</th>
                <th style="width:120px;">Contraseña</th>
                <th style="width:120px; text-align: center;" colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php
/** @var array|null $Usuario */
$Usuario = $model->Listar();

if ($Usuario !== null && is_array($Usuario)) {
    foreach ($Usuario as $r) { 
        ?>
                    <tr>
                        <td><?php echo htmlspecialchars($r['id']); ?></td>
                        <td><?php echo htmlspecialchars($r['Nombre']); ?></td>
                        <td><?php echo htmlspecialchars($r['Apellido']); ?></td>
                        <td><?php echo htmlspecialchars($r['Correo']); ?></td>
                        <td><?php echo $r['Sexo'] == 1 ? 'Hombre' : 'Mujer'; ?></td>
                        <td><?php echo htmlspecialchars($r['FechaNacimiento']); ?></td>
                        <td><?php echo htmlspecialchars($r['TipoUser']); ?></td>
                        <td><?php echo htmlspecialchars($r['User']); ?></td>
                        <td>
                            <div class="form-group">
                                <input type="password" value="****" disabled="true" />
                            </div>
                         </td>
                         <td>
                         <a class="btn btn-edit" href="EditarUsuario.php?id=<?php echo urlencode($r['id']); ?>">
                         <img src="../assets/img/editar.png" alt="editar" style="width:20px; height:20px;">
                         </a>
                         </td>
                        <td>
                         <a class="btn btn-delete" href="../../controlador/EliminarUsuario.php?id=<?php echo urlencode($r['id']); ?>" 
                          onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?');">
                         <img src="../assets/img/eliminar.png" alt="Eliminar" style="width:20px; height:20px;">
                          </a>
                        </td>
                        <td>
                        <a class="btn btn-edit" href="EditarUsuario.php?id=<?php echo urlencode($r['id']); ?>">
                        <img src="../assets/img/actualizar.png" alt="actualizar" style="width:20px; height:20px;">
                        </a>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table>

</body>

</html>
