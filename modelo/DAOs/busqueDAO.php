<?php

                         include_once PATH_HELPERS . '/database_helper.php';

                         function getComboCategorias (){

                                $conexion= getConexion();

                                     $consulta = "SELECT *" .
                                                 "FROM categorias";
                        


                                  $resultadocat= $conexion->query($consulta);

                                  $listacat = '<option value="0">Elegi tu categoria</option>';

                                   while ($rowcat = $resultadocat->fetch_assoc())
                                  { 

                                        $listacat .= "<option value ='$rowcat[cat_id]'> $rowcat[cat_descripcion]</option>";
                                     }


                                     return $listacat;     

                          }