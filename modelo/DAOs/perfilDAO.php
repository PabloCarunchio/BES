  <?php                        revisar

 if (isset ($_POST["actualizar"])) {

        if ($_POST["nombre_usr"] != '') {
          $nombre_usr = $_POST["nombre_usr"];
         
        }else{
          $nombre_usr = $_SESSION["nombre_usr"];
        }

        if ($_POST["nombre_real"] != '') {
          $nombre_real = $_POST["nombre_real"];
         
        }
        else{
          $nombre_real = $_SESSION["nombre_real"];
        }
        if ($_POST["mail"] != '') {
          $mail = $_POST["mail"];
         
        }
        else{
          $mail = $_SESSION["mail"];
        }

        if ($_POST["localidad"] != '') {
          $localidad = $_POST["localidad"];
         
        }
        else{
          $localidad = $_SESSION["localidad"];
        }
        if ($_POST["contrasena"] != '') {
          $contrasena = $_POST["contrasena"];
         
        }else{
          $contrasena = $_SESSION["contrasena"];
        }




 include_once PATH_HELPERS .'/database_helper.php';
    
  $conexion = getConexion();

                    $sql = "UPDATE usuarios SET usr_nombre_usuario = '$nombre_usr', usr_nombre_real = '$nombre_real', email = '$mail', usr_localidad = '$localidad', usr_password = '$contrasena',
                    WHERE usr_id = " . $_SESSION["id_usuario"];
    

                $conexion->query($sql); 

        
        }







 ?>