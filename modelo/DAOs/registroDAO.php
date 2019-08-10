  <?php

// subir foto                             

                  if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
                                        

                        $fileTmpPath = $_FILES['foto']['tmp_name'];
                        $fileName = $_FILES['foto']['name'];

                        $fileNameCmps = explode(".", $fileName);
                        $fileExtension = strtolower(end($fileNameCmps));

                        $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

                        $allowedfileExtensions = array('jpg', 'gif', 'png', 'webp');

                        if (in_array($fileExtension, $allowedfileExtensions)) {
                                                      
                        $dest_path = UPLOAD_PERFIL_PATH . "/" . $newFileName;
                                           
                          if(move_uploaded_file($fileTmpPath, $dest_path))
                                           {
                                            
                      $mensaje_form ="Se subio exitosamente el archivo";
                                         
                                            
                                           }
                                           else
                                           {

                                             $mensaje_form = "ERROR AL SUBIR EL ARCHIVO";
                                             echo $mensaje_form;
                               
                                           }
                                         }
                                         else{
                                             $mensaje_form = "El archivo de imagen no es valido.";
                                              echo $mensaje_form;

                                            
                                         }
                                       }


                //registro//                          

  if (isset ($_POST["registro"])) {
    

    $nombre_usuario= $_POST["nombre_usr"];
    $nombre_real = $_POST["nombre_real"];
    $mail = $_POST["mail"];
    $localidad = $_POST["localidad"];
    $contrasena = $_POST["contrasena"];
   
  include_once PATH_HELPERS .'/database_helper.php';
    
    $conexion = getConexion();

    $sql= "SELECT * FROM usuarios WHERE email = '$mail'";




    $resultado = $conexion->query( $sql );


        if ( $resultado->num_rows == 1  ){

            echo "Ese mail esta en uso";

        }
        else{
            $sql = "INSERT INTO usuarios (`usr_id`,`usr_nombre_usuario`,`usr_nombre_real`,`usr_localidad`,`usr_password`,`email`)
                    VALUES (NULL,'$nombre_usuario','$nombre_real','$localidad','$contrasena','$mail')";

                $conexion->query($sql); 



        }

   }





 ?>