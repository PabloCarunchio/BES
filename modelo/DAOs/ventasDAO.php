<?php
	
include_once (PATH_HELPERS . "/database_helper.php");


function buscarVentasUsuario( $id_usuario ){
	$conexion = getConexion();

	$consulta = "SELECT * FROM contrataciones, publicaciones_prov, usuarios " . 
				"WHERE publicaciones_prov.pub_id = contrataciones.id_pub "  . 
				"AND publicaciones_prov.pub_id_usuario = " . $id_usuario .
				" AND contrataciones.id_usr_comprador = usuarios.usr_id"; 



	$resultado = $conexion->query( $consulta );

	return $resultado;
}
?>