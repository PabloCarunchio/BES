<?php

     include_once PATH_DAOS . '/perfilDAO.php';
  ?>



<div class="container">
		<div class="row">
			<div class="col-12">

				<nav>

				  <div class="nav nav-tabs" id="nav-tab" role="tablist">
				    <a class="nav-item nav-link active " id="nav-usuario-tab" data-toggle="tab" href="#nav-usuario" role="tab" aria-controls="nav-usuario" aria-selected="true">Datos Usuario</a>
				  </div>
				</nav>

				<div class="tab-content" id="nav-tabContent">
					  <div class="tab-pane fade show active shadow-lg p-3 mb-5 bg-white rounded" id="nav-usuario" role="tabpanel" aria-labelledby="nav-usuario-tab">
					  	<form class="form-horizontal border" enctype="multipart/form-data" action="index.php" method="POST">
						<fieldset>
	           	 		<input type="hidden" name="m" value="perfil">
						<!-- Form Name -->
						<legend class="d-flex justify-content-center ">Cambiar Datos del Usuario</legend>



						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="nombre_usr">Nombre de Usuario</label>  
						  <div class="col-md-4">
						  <input id="nombre_usr" name="nombre_usr" type="text" placeholder="" class="form-control input-md">
							</div>	
						</div>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="nombre_real">Nombre completo</label>  
						  <div class="col-md-4">
						  <input id="nombre_real" name="nombre_real" type="text" placeholder="" class="form-control input-md">
						    
						  </div>
						</div>



						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="mail">Mail</label>  
						  <div class="col-md-4">
						  <input id="mail" name="mail" type="text" placeholder="" class="form-control input-md">
						    
						  </div>
						</div>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="localidad">Localidad</label>  
						  <div class="col-md-4">
						  <input id="localidad" name="localidad" type="text" placeholder="" class="form-control input-md">
							</div>	
						</div>

						<!-- Password input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="contrasena">Contraseña</label>
						  <div class="col-md-4">
						    <input id="contrasena" name="contrasena" type="password" placeholder="" class="form-control input-md" >
						    
						  </div>
						</div>
					
	                      <input type="submit" name="actualizar" value="Actualizar" class="btn btn-primary">
							<div class="mt-5 mb-5">
	                      <h5>Nota: Al finalizar la actualización deberá volver a iniciar sesión para que se aplique los cambios.</h5> 
							</div>
	                  </fieldset>
				</form>