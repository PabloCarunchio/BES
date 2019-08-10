   <?php                   



                                no me toma la variable $totallikes


                              function buscarPubli( $id_pub ){
                                    $conexion = getConexion();

                                    $consulta = "SELECT * " . 
                                              "FROM publicaciones_prov " . 
                                              "WHERE pub_id = " . $id_pub;


									$registros = buscarPubli( $_REQUEST["id"] );

									$publicacion = mysqli_fetch_assoc($registros);

									$id_publi = $_REQUEST["id"];

                                    include_once PATH_HELPERS .'/database_helper.php';

                                    $conexion = getConexion();

                                    $sqllike = "SELECT SUM(num_like) as TotalLikes FROM likes WHERE id_usuario_likeado = '" . $_SESSION["id_pub"] ."'";

                                    $likes = $conexion->query($sqllike);

                                    $fila = $likes->fetch_assoc();

                                    $TotalLikes = $likes['TotalLikes'];
                                }
