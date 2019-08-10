<header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<nav id="barra">
					  <a href="index.php"><img id="logo-nav" src="<?=PATH_IMAGENES?>/logo-bes.png" alt="logo-servicio"></a>  
					<ul  id="barra-nav" class="nav nav-pills justify-content-end">

	
			
		<?php 
		if ( !isset($_SESSION["usuario"]) ){ ?>
			<li class="link-nav" class="nav-item">
				<a  type="button" href="index.php?m=nos" class="letras-nav"> NOSOTROS</a>
			</li>

			<li class="link-nav" class="nav-item">	
				 <a href="#" type="button" data-toggle="modal" data-target="#exampleModal" class="letras-nav">LOGIN</a>
			</li>
			
		<?php 
		}
		else{
		?>
			<ul class="navbar-nav ml-md-auto">
				<li class="nav-item dropdown">
					 <a type="button" class="nav-link dropdown-toggle letras-nav" href="" id="navbarDropdownMenuLink" data-toggle="dropdown">
					 	<?= $_SESSION["usuario"] ?></a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

						 <a class="dropdown-item letras-nav" href="index.php?m=perfil">Mi perfil</a>
						 <div class="dropdown-divider"></div>

						 <a class="dropdown-item letras-nav" href="index.php?m=pubs&a=list">Mis publicaciones</a>
						 <div class="dropdown-divider"></div>



						<a class="dropdown-item letras-nav" href="index.php?m=contrataciones">Mis Contrataciones</a>
						<div class="dropdown-divider"></div>

						<a class="dropdown-item letras-nav" href="index.php?m=ventas">Mis Ventas</a>
	 					<div class="dropdown-divider"></div>

						<a class="dropdown-item letras-nav" href="index.php?m=pubs&a=new">Publicar</a>

						  <div class="dropdown-divider"></div>
						 
						 <a class="dropdown-item" href="index.php?m=logout">Salir</a>
					</div>
				</li>
			</ul>



		<?php 
		}
		?> 
		</div>
	</li>
</ul>
</nav>
</div>
</div>
</div>
</header>




	
<!--PRUEBA MODAL ROBADO CON MUCHO AMOR -->

		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Ingresar a B.E.S.</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
      <div class="modal-body">

			<div class="row justify-content-center">
				<div class="col-md-8">
					<form role="form" method="POST">

						<input type="hidden" name="m" value="login">

						<div class="form-group">
							 
							<label for="user_name">Ingresa Mail</label>

							<input type="email" class="form-control" name="user_name" id="email" />
						</div>

						<div class="form-group">
							 
							<label for="password">Contraseña</label>

							<input type="password" class="form-control" name="password" id="password" />
						</div>
					<div class="d-flex justify-content-between">
						<input type="submit" name="submit" value="Ingresar" class="btn btn-primary">
							
						
						<a href="index.php?m=registrar" class="btn btn-dark"><i class="fas fa-user-plus"></i>
							Registrate
						</a>
					</div>

					</form>
				</div>
			</div>
	      </div>
	      
	    </div>
	  </div>
	</div>




