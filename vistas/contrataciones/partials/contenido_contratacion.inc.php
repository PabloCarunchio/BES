<div class="m-5 row ">                  

<?php

    include_once PATH_HELPERS . '/html_helper.php';

    include_once PATH_DAOS . '/ventasDAO.php';

    $contrataciones = buscarContratacionesUsuario( $_SESSION["id_usuario"] );



    if ($contrataciones){
        foreach ($contrataciones as $contratacion) {
            crearHTMLCardContratacion($contratacion['pub_titulo'], $contratacion['pub_descripcion'] . "...", $contratacion['pub_imagen'], "$ " . $contratacion['pub_precio'], $contratacion['pub_id'], $contratacion['id_contr'], $contratacion['usr_nombre_usuario']);  


            //echo $contratacion['id_contr'];
        }
    }   

?>

</div>

