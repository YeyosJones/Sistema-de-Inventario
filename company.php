<?php include('conexion.php');?>
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
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Datos de la empresa</title>

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
    <script src="./js/sweetalert2.min.js"></script>

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
                                    <a href="client-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Empleado</a>
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
                    <i class="fas fa-traffic-light"></i> &nbsp; INFORMACÓN DEL SEMAFORO
                </h3>
                <p class="text-justify">
                    Sistema de inventario DGB!
                </p>
            </div>

            <!--CONTENT-->
           <div class="container-fluid">
				<div class="table-responsive">
					<table class="table table-dark table-sm">
						<thead>
							<tr class="text-center roboto-medium">
								<th>DISPOSITIVO</th>
                                
                                <th>ASIGNACIÓN</th>
                                
                                <th>DETALLES</th>
                                
                                <th>SEMAFORO</th>

							</tr>
						</thead>
<?php

$sql="select * from item";
$resultado=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($resultado))

{
?>

<tr class="text-center" >
	<td><?php echo $mostrar['dispositivo'] ?></td>
    
    <td><?php echo $mostrar['asignacion'] ?></td>
    
    <td><?php echo $mostrar['detalles'] ?></td>
    
 <?php
if( $mostrar['fecha'] >= 2023){
    echo '<td style="background-color:#71E64E;color:white;">'.$mostrar['fecha'].'</td>';
}elseif($mostrar['fecha'] >= 2022){
    echo '<td style="background-color:#F9F639;color:black;">'.$mostrar['fecha'].'</td>';
}elseif($mostrar['fecha'] >= 2021){
    echo '<td style="background-color:#F9F639;color:black;">'.$mostrar['fecha'].'</td>';
}elseif($mostrar['fecha'] >= 2020){
    echo '<td style="background-color:#F9F639;color:black;">'.$mostrar['fecha'].'</td>';
}elseif($mostrar['fecha'] >= 2019){
    echo '<td style="background-color:#F9F639;color:black;">'.$mostrar['fecha'].'</td>';
}elseif($mostrar['fecha'] >= 2018){
    echo '<td style="background-color:#F9F639;color:black;">'.$mostrar['fecha'].'</td>';
}elseif($mostrar['fecha'] >= 2017){
    echo '<td style="background-color:#E67E22;color:black;">'.$mostrar['fecha'].'</td>';
}elseif($mostrar['fecha'] >= 2016){
    echo '<td style="background-color:#E67E22;color:black;">'.$mostrar['fecha'].'</td>';
}elseif($mostrar['fecha'] >= 2015){
    echo '<td style="background-color:#E67E22;color:black;">'.$mostrar['fecha'].'</td>';
}elseif($mostrar['fecha'] >= 2014){
    echo '<td style="background-color:#E67E22;color:black;">'.$mostrar['fecha'].'</td>';
}elseif($mostrar['fecha'] >= 2013){
    echo '<td style="background-color:#E67E22;color:black;">'.$mostrar['fecha'].'</td>';
}elseif($mostrar['fecha'] >= 2012){
    echo '<td style="background-color:#CB0000;color:black;">'.$mostrar['fecha'].'</td>';
}elseif($mostrar['fecha'] >= 2011){
    echo '<td style="background-color:#CB0000;color:black;">'.$mostrar['fecha'].'</td>'; 
}elseif($mostrar['fecha'] >= 2010){
    echo '<td style="background-color:#CB0000;color:black;">'.$mostrar['fecha'].'</td>';
}elseif($mostrar['fecha'] >= 2009){
    echo '<td style="background-color:#CB0000;color:black;">'.$mostrar['fecha'].'</td>';
}elseif($mostrar['fecha'] >= 2008){
    echo '<td style="background-color:#CB0000;color:black;">'.$mostrar['fecha'].'</td>';     
}else{
    echo '<td style="background-color:#17202A;color:white;">'.$mostrar['fecha'].'</td>';
}
?>                         
</tr>
<?php  
}
?>
					</table>
				</div>
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1">Previous</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item">
							<a class="page-link" href="#">Next</a>
						</li>
					</ul>
				</nav>
               
                <fieldset>
						<legend><i class="fas fa-traffic-light"></i> &nbsp; Nivel de Semaforo</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12">
									<p><span style="background: #71E64E; color: #FFFFFF; font-weight: bold; padding: 2px; border: 3px solid #71E64E; border-radius: 6px;">Verde</span> Equipo Actualizado</p>
                                    <p><span style="background: #F9F639; color: #FFFFFF; font-weight: bold; padding: 2px; border: 3px solid #F9F639; border-radius: 6px;">Amarillo</span> Equipo Optimo</p>
									<p><span style="background: #E67E22; color: #FFFFFF; font-weight: bold; padding: 2px; border: 3px solid #E67E22; border-radius: 6px;">Naranja</span> Equipo Rezagado</p>
                                    <p><span style="background: #CB0000; color: #FFFFFF; font-weight: bold; padding: 2px; border: 3px solid #CB0000; border-radius: 6px;">Rojo</span> Equipo Desactualizado</p>
                                    <p><span style="background: #17202A ; color: #FFFFFF; font-weight: bold; padding: 2px; border: 3px solid #000000; border-radius: 6px;">Negro</span> Equipo Obsoleto</p>
								</div>
							</div>
						</div>
				 </fieldset>
			</div>
    </section>
  

    </main>
    
    	
	<!--=============================================
	=            Include JavaScript files           =
	==============================================-->
	<!-- jQuery V3.4.1 -->
   <script src="confirmation.js" ></script>
    
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