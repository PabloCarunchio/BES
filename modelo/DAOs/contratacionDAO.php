<?php
	if (isset($_REQUEST["id"])) {
    $id_publi = $_REQUEST["id"];
    $id_usr = $_SESSION["id_usuario"];

include_once (PATH_HELPERS . "/database_helper.php");

        $conexion = getConexion();

        $consulta = "INSERT INTO contrataciones (`id_pub`,`id_usr_comprador`)   VALUES( '$id_publi' , '$id_usr' )";

        $conexion->query( $consulta );

}
?>