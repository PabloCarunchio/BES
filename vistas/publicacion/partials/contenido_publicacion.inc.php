<?php

include_once( PATH_DAOS . "/publicacionesDAO.php");

$registros = buscarPublicacion( $_REQUEST["id"] );

$publicacion = mysqli_fetch_assoc($registros);

$id_publi = $_REQUEST["id"];

?>

<div class="container-fluid mt-5 mb-5">
    <div class="row px-5 mx-5">
        <div class="col-md-6 ">
            <img class="ml-5 img-fluid w-75 border border-warning" alt="" src="<?=FILES . "/imagenes/publicaciones/" . $publicacion["pub_imagen"]?>" />
            
            <p class="ml-5 img-fluid w-75 pt-5">
                <?=$publicacion["pub_descripcion"]?>
            </p>
        </div>
        <div class="col-md-6 ">
            <h2>
                <?=$publicacion["pub_titulo"]?>
            </h2>
            <p class="display-4">
                <?="$ " . $publicacion["pub_precio"]?>
            </p>
                
                <?php
                if( isset($_SESSION["usuario"])){ ?>

                <button type="button" class="btn btn-primary"><a  class="btn btn-primary" href="index.php?m=contratacion&id=<?= $id_publi ?>">Comprar</a>

                                                    LIKES ARREGLAR
        <div class="card-body">

                      <?php
                        include_once PATH_DAOS . '/likepubliDAO.php';

                        ?>

            <span class="btn btn-info btn-lg "><i class="far fa-thumbs-up"></i> <?=$TotalLikes?></span>
                        
        </div>

                
            </button> 
                <?php }

                    else{ ?>
            
            <div class="container-fluid mt-5 mb-5">
                <div class="row px-7 mx-7">
                     <div class="col-md-12 ">
                        <div class="alert alert-danger" role="alert">
               <p class="text-center" >Por favor inicar sesion para contratar.</p>
                
            </div>    
                </div>
                    </div>  
                        </div>
           
                   <?php  } ?>

        </div>
    </div>
</div>