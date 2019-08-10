                                        <!--titulo-empresa!-->
 <div class="container">
    	<div class="row">
    		<div class="col">
    			<div id="nombre-busqueda" class="justify">
	    			 <a href="index.php"><img id="logo-index" src="<?=PATH_IMAGENES?>/logo-bes.png" alt="logo-servicio"></a>
	    			
    			</div>
    		</div>
    	</div>
    </div>
                                            <!--barra buscador !-->



 <div class="container-fluid">
                <div class="row mt-2 pb-4">
                        
                            <div class="col-12">

                                <form class="col-md-7 mx-auto">
                                  <div class="form-row justify-content-center">

                                    <div class="cols-xs-12 col-md-3 my-2">
                                      <select id="categoria" name="categoria" class="custom-select">
                                        <?php
                                            include_once( PATH_HELPERS . "/html_helper.php");

                                            echo getOptionsComboCategorias(true);
                                        ?>
                                      </select>
                                    </div>

                                    <div class="cols-xs-12 col-md-7 my-2">
                                      <input id="buscar" name="buscar" placeholder="Buscar" type="text" class="form-control">
                                    </div>

                                    <div class="my-2">
                                      <button onclick="enviarBusqueda();" name="submit" type="button" class="btn btn-primary">Buscar</button>
                                    </div>
                                </div></form></div></div></div>    
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>

             <div class="container">

                <div class="m-5 row">               
                    <?php

                        include ($contenido_listado);

                    ?>
                </div>
            </div>
