<?php

function crearHTMLCardPublicacion($titulo, $descripcion, $imagen, $precio, $id_pub, $pub_usuario = false, $es_favorito = false){
?>	

  <div class="col-md-3 mb-4 text-center d-flex align-items-stretch">


	<div class="card">

        <?php
            if ( !$pub_usuario ) {


                echo '<a class="nav-link" href="index.php?m=show_pub&id=' . $id_pub .'">';

            }
        ?>

		<div class="card-title mb-5 p-4">
          
		  <?= $titulo ?>
	  	</div>

	    <img class="card-img-top"  alt=""  src="<?= FILES . '/imagenes/publicaciones/' . $imagen ?>">
	   
        <?php
            if ( !$pub_usuario ) {
                echo '</a>';
            }
        ?>

	    <div class="card-img-top card-body">

		</div>
	      



	      <div class="card-footer">
	    	  <?php echo $precio ;  

              if ( $pub_usuario ) {
              ?>
              <div class="row py-2 mt-2 bg-light">
            
                <div class="col-12 ">
                    <a class="btn px-4 btn-success" href="index.php?m=pubs&a=edit&id=<?=$id_pub?>" >Editar</a>
                    <a class="btn px-4 btn-danger" href="index.php?m=pubs&a=del&id=<?=$id_pub?>" >Eliminar</a>
                </div>

              </div>              
        
         <?php } ?>

        </div>



	</div>



  </div>


<?php 

}


function crearHTMLCardContratacion($titulo, $descripcion, $imagen, $precio, $id_pub, $id_contr, $nombre_comprador){
?>  

  <div class="col-md-3 mb-4 text-center d-flex align-items-stretch"">


  <div class="card">


    <div class="card-title mb-5 p-4">
          
      <?= $titulo ?>
      </div>

      <img class="card-img-top"  alt=""  src="<?= FILES . '/imagenes/publicaciones/' . $imagen ?>">
     


      <div class="card-img-top card-body">

    </div>
        



        <div class="card-footer">
          <?php echo $precio ;  ?>
          
          <?php echo "Comprador: " . $nombre_comprador ;  ?>
          

        </div>



  </div>



  </div>


<?php 

}




function crearHTMLCardVentas($titulo, $descripcion, $imagen, $precio, $id_pub, $id_contr, $nombre_comprador){
?>  

  <div class="col-md-3 mb-4 text-center d-flex align-items-stretch"">


  <div class="card">


    <div class="card-title mb-5 p-4">
          
      <?= $titulo ?>
      </div>

      <img class="card-img-top"  alt=""  src="<?= FILES . '/imagenes/publicaciones/' . $imagen ?>">
     


      <div class="card-img-top card-body">

    </div>
        



        <div class="card-footer">
          <?php echo $precio ;  ?>
          
          <?php echo "Comprador: " . $nombre_comprador ;  ?>
          

        </div>



  </div>



  </div>


<?php 

}




function getTablaHTML( $registros, $campos, $primary_key, $nombre_modulo ){

  $tablaHTML = "<table class=\"table table-hover\">";

      $tablaHTML .= "<thead><tr>";

      foreach ($campos as $campo => $label){
        $tablaHTML .= "<th>$label</th>";
      }

      $tablaHTML .= "<th>Acciones</th></tr></thead>";

  while ( $registro = $registros->fetch_assoc() ){

    $tablaHTML .= '<tr id="' . $registro[$primary_key] . '">';

    foreach ($campos as $campo => $label){

      $tablaHTML .= '<td>' . $registro[ "$campo" ] . "</td>";

    }
    
    $tablaHTML .= "<td>";

    $tablaHTML .= "<button onclick=\"mostrarEditor('modificar', " . $registro[$primary_key]  . ");\" class=\"btn btn-success btn-sm\">Editar</button>";

    $tablaHTML .= "<a role=\"button\" class=\"btn btn-danger btn-sm ml-1  \" href='index.php?m=" . $nombre_modulo . "&a=del&id=" . $registro[$primary_key] . "'>Eliminar</a>";
  }

  $tablaHTML .= "</table>";

  return $tablaHTML;

}

function getOptionsComboCategorias($incluir_cat_todas = false, $id_item_seleccionado = null){
  
    include_once PATH_DAOS . '/categoriasDAO.php';

    $categorias = buscarCategorias();

    $opcionesCombo = "";

    if ($incluir_cat_todas){
        $opcionesCombo .= '<option value="-1">Todas</option>';
    }

    
    foreach ( $categorias as $categoria ){
        $opcionesCombo .= '<option  value="'. $categoria["cat_id"] . '"';


        if ( $id_item_seleccionado != null && ($id_item_seleccionado == $categoria["cat_id"]) ){
            $opcionesCombo .= 'selected="selected" ';
        }

        $opcionesCombo .= '>' . $categoria["cat_descripcion"] . '</option>';
    }

    return $opcionesCombo;    

}

function getOptionsComboTiposPublicacion($incluir_opcion_todos = false, $id_item_seleccionado = null){
  
    include_once(PATH_HELPERS . "/database_helper.php");
    include_once PATH_DAOS . '/tipos_pubsDAO.php';

    $conexion = getConexion();

    $tipos_pubs = buscarTiposPublicaciones();

    $opcionesCombo = "";

    if ($incluir_opcion_todos){
        $opcionesCombo .= '<option value="-1">Todas</option>';
    }
    
    foreach ( $tipos_pubs as $tipo_pub ){
        $opcionesCombo .= '<option value="'. $tipo_pub["tp_id"] . '"';

        if( $id_item_seleccionado == $tipo_pub["tp_id"]){
            $opcionesCombo .=  ' selected="selected"';      
        }

        $opcionesCombo .= '>' . $tipo_pub["tp_descripcion"] . '</option>';
    }

    return $opcionesCombo;    

}