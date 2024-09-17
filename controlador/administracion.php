<tr>
            <td><?php echo $r['id']; ?></td>
            <td><?php echo $r['Nombre']; ?></td>
            <td><?php echo $r['Apellido']; ?></td>
            <td><?php echo $r['Correo']; ?></td>
            <td><?php echo $r['Sexo'] == 1 ? 'Hombre' : 'Mujer'; ?></td>
            <td><?php echo $r['FechaNacimiento']; ?></td>
            <td><?php echo $r['TipoUser']; ?></td>
            <td><?php echo $r['User']; ?></td>
            <td><div class="form-group"><input type="password" value="<?php echo $r['Pass']; ?>" disabled="true"/></div></td>
            <td>
                <a href="EditarUsuario.php?id=<?php echo $r['id'];?>">Editar</a><!--INDICA QUE CONTROLADOR Y QUE ACCION EJECUTAR, EN ESTE CASO LLAMARIA AL ARCHIVO EDITARUSUARIO.PHP PASANDO EL ID COMO PARÁMETRO--->
            </td>
            <td>
                <a href="EliminarUsuario.php?id=<?php echo $r['id'];?>">Eliminar</a><!--INDICA QUE CONTROLADOR Y QUE ACCION EJECUTAR, EN ESTE CASO LLAMARIA AL ARCHIVO ELIMINARUSUARIO.PHP PASANDO EL ID COMO PARÁMETRO--->
            </td>
        </tr>
        <?php
        }

        }
        ?>
       </tbody>
    </table> 
    <hr />
   
</body>
</html>