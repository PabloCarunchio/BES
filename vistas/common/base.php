<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>B.E.S.</title>
	<link rel="icon" type="image/png" href="<?=PATH_IMAGENES?>/logo-bes.png"/>
	
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Roboto+Mono&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="<?= PATH_VENDOR?>/bootstrap/css/bootstrap.min.css">
	


	<link rel="stylesheet" type="text/css" href="<?= PATH_CSS?>/estilo.css">
</head>
	<body>

			<!--BARRA NAV-->

<?php 

include("partials/nav.php"); 

?>


<!-- ACA VA EL CONTENIDO DINAMICO -->

<?php
	if ( isset($contenido_seccion1) )
	{
		include ( $contenido_seccion1 );
	}
?>



<?php
	if ( isset($contenido_seccion2) )
	{
		include ( $contenido_seccion2 );
	}
?>


			<!--FOOTER-->
<?php
	include("partials/footer.php"); 

	?>
   
		<script src= "<?= PATH_VENDOR ?>/jquery/jquery-3.4.1.min.js"></script>
		<script src= "<?= PATH_VENDOR ?>/popper/popper.min.js"></script>
		<script src= "<?= PATH_VENDOR ?>/bootstrap/js/bootstrap.min.js"> </script>

		    <script type="text/javascript">
    	
    	function enviarBusqueda(){
    		
			var urlBusqueda = 'index.php?buscar=' + $("#buscar").val() +
							  '&categoria=' + $("#categoria").val(); 

			window.setTimeout( window.location = urlBusqueda, 100 );	

	    }


    </script>
	</body>
</html>