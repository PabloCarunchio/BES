<div class="m-5 row ">                  

<?php

    include_once PATH_HELPERS . '/html_helper.php';

    include_once PATH_DAOS . '/ventasDAO.php';

    $ventas = buscarVentasUsuario( $_SESSION["id_usuario"] );



    if ($ventas){
        foreach ($ventas as $venta) {
            crearHTMLCardVentas($venta['pub_titulo'], $venta['pub_descripcion'] . "...", $venta['pub_imagen'], "$ " . $venta['pub_precio'], $venta['pub_id'], $venta['id_contr'], $venta['usr_nombre_usuario']);  


            //echo $contratacion['id_contr'];
        }
    }   

?>

</div>



