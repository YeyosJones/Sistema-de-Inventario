<?php
 session_start();
 $varsesion = $_SESSION['usuario'];
 $varname = $_SESSION['name'];
 $varapellido = $_SESSION['apellido'];
 $varrol = $_SESSION['rol'];

 if ($varsesion == null || $varsesion = '') {
     ?> 
     "<script> alert('Inicie sesión.');window.location= 'index.html' </script>";
     <?php
     die();
 }
if ($varrol == 'Visualizador') {
     ?> 
     "<script> alert('Permisos de Administrador o Editor Necesarios.');window.location= 'client-listV.php' </script>";
     <?php
     die();
 }
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Nuevo Empleado</title>

	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="./css/normalize.css">

	<!-- Bootstrap V4.3 -->
	<link rel="stylesheet" href="./css/bootstrap.min.css">

	<!-- Bootstrap Material Design V4.0 -->
	<link rel="stylesheet" href="./css/bootstrap-material-design.min.css">

	<!-- Font Awesome V5.9.0 -->
	<link rel="stylesheet" href="./css/all.css">

	<!-- Sweet Alerts V8.13.0 CSS file -->
	<link rel="stylesheet" href="./css/sweetalert2.min.css">

	<!-- Sweet Alert V8.13.0 JS file-->
	<script src="./js/sweetalert2.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<link rel="stylesheet" href="./css/jquery.mCustomScrollbar.css">
	
	<!-- General Styles -->
	<link rel="stylesheet" href="./css/style.css">


</head>
<body>
	
	<!-- Main container -->
	<main class="full-box main-container">
		<!-- Nav lateral -->
		<section class="full-box nav-lateral">
			<div class="full-box nav-lateral-bg show-nav-lateral"></div>
			<div class="full-box nav-lateral-content">
				<figure class="full-box nav-lateral-avatar">
					<i class="far fa-times-circle show-nav-lateral"></i>
					<img src="./assets/avatar/Avatar.png" class="img-fluid" alt="Avatar">
					<figcaption class="roboto-medium text-center">
						<?php echo $varname ?> <?php echo $varapellido ?> <br><small class="roboto-condensed-light"><?php echo $varrol ?></small>
					</figcaption>
				</figure>
				<div class="full-box nav-lateral-bar"></div>
				<nav class="full-box nav-lateral-menu">
					<ul>
						<li>
							<a href="home.php"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard</a>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Empleados <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="client-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Empleado</a>
								</li>
								<li>
									<a href="client-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Empleados</a>
								</li>
								<li>
									<a href="client-search.php"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Empleado</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-pallet fa-fw"></i> &nbsp; Items <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="item-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar item</a>
								</li>
								<li>
									<a href="item-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de items</a>
								</li>
								<li>
									<a href="item-search.php"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar item</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; Usuarios <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="user-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo usuario</a>
								</li>
								<li>
									<a href="user-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de usuarios</a>
								</li>
								<li>
									<a href="user-search.php"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar usuario</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="company.php"><i class="fas fa-traffic-light"></i> &nbsp; Semaforo</a>
						</li>
					</ul>
				</nav>
			</div>
		</section>

		<!-- Page content -->
		<section class="full-box page-content">
			<nav class="full-box navbar-info">
				<a href="#" class="float-left show-nav-lateral">
					<i class="fas fa-exchange-alt"></i>
				</a>

				<a href="logout.php">Cerrar Sesión</a>
			</nav>

			<!-- Page header -->
			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR EMPLEADO
				</h3>
				<p class="text-justify">
					Sistemas de inventario DGB!
				</p>
			</div>

			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a class="active" href="client-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR EMPLEADO</a>
					</li>
					<li>
						<a href="client-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE EMPLEADO</a>
					</li>
					<li>
						<a href="client-search.php"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR EMPLEADO</a>
					</li>
				</ul>	
			</div>
			
			<!-- Content here-->
			<div class="container-fluid">
				<form method="post" action="client_new.php" autocomplete="off">
					<fieldset>
						<legend><i class="fas fa-user"></i> &nbsp; Información básica</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="cliente_dni" class="bmd-label-floating">Numero Empleado</label>
										<input type="text" pattern="[0-9()+]{1,20}" class="form-control" name="empleado_numero" id="cliente_nombre" maxlength="40" required>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="cliente_nombre" class="bmd-label-floating">Nombre</label>
										<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="empleado_nombre" id="cliente_nombre" maxlength="40" required>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="cliente_apellido" class="bmd-label-floating">Primer Apellido</label>
										<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="empleado_apellido" id="cliente_apellido" maxlength="40" required>
									</div>
								</div>
                                <div class="col-12 col-md-6">
									<div class="form-group">
										<label for="cliente_apellido" class="bmd-label-floating">Segundo Apellido</label>
										<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="empleado_apellido2" id="cliente_apellido" maxlength="40" required>
									</div>
								</div>
                                <div class="col-12 col-md-6">
									<div class="form-group">
										<label for="cliente_apellido" class="bmd-label-floating">Area</label>
										<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="empleado_area" id="cliente_apellido" maxlength="40" required>
									</div>
								</div>
                                <div class="col-12 col-md-6">
									<div class="form-group">
										<label for="cliente_apellido" class="bmd-label-floating">Cargo</label>
										<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="empleado_cargo" id="cliente_apellido" maxlength="40" required>
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="cliente_telefono" class="bmd-label-floating">Teléfono</label>
										<input type="text" pattern="[0-9()+]{1,20}" class="form-control" name="empleado_telefono" id="cliente_telefono" maxlength="20">
									</div>
								</div>
                                <div class="col-12 col-md-4">
									<div class="form-group">
										<label for="cliente_telefono" class="bmd-label-floating">Extension</label>
										<input type="text" pattern="[0-9()+]{1,20}" class="form-control" name="empleado_ext" id="cliente_telefono" maxlength="20" required>
									</div>
								</div>
								<div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <select class="form-control" type="text" name="empleado_direccion">
                                            <option value="" selected="" disabled="">Empresa</option>
                                            <option value="CUDEC">CUDEC</option>
                                            <option value="ESDEC">ESDEC</option>
                                            <option value="LIMAC">LIMAC</option>
                                            <option value="UDEC">UDEC</option>
                                        </select> 
                                    </div>
                                </div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
					<p class="text-center" style="margin-top: 40px;">
						<button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
						&nbsp; &nbsp;
						<button type="submit" class="btn btn-raised btn-info btn-sm" name="register_empleado"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
					</p>
				</form>
			</div>	

		</section>
	</main>
	
	
	<!--=============================================
	=            Include JavaScript files           =
	==============================================-->
	<!-- jQuery V3.4.1 -->
	<script src="./js/jquery-3.4.1.min.js" ></script>

	<!-- popper -->
	<script src="./js/popper.min.js" ></script>

	<!-- Bootstrap V4.3 -->
	<script src="./js/bootstrap.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<script src="./js/jquery.mCustomScrollbar.concat.min.js" ></script>

	<!-- Bootstrap Material Design V4.0 -->
	<script src="./js/bootstrap-material-design.min.js" ></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

	<script src="./js/main.js" ></script>
</body>
</html>