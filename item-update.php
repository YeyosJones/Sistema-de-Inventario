<?php
    include("conexion.php");
$id_item=$_GET['id_item'];

$sql="SELECT * FROM item WHERE id_item='$id_item'";
$query=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($query);
?>

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
    <title>Actualizar item</title>

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
                                    <a href="user-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo usuario</a>
                                </li>
                                <li>
                                    <a href="user-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de usuarios</a>
                                </li>
                                <li>
                                    <a href="user-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar usuario</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="company.php"><i class="fas fa-traffic-light"></i>&nbsp; Semaforo</a>
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
  
                <a href="#" class="btn-exit-system">
                    <i class="fas fa-power-off"></i>
                </a>
            </nav>
            <!-- Page header -->
            <div class="full-box page-header">
                <h3 class="text-left">
                    <i class="fas fa-sync-alt fa-fw"></i> &nbsp; ACTUALIZAR ITEM
                </h3>
                <p class="text-justify">
                    Sistema de inventario DGB!
                </p>
            </div>
            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs">
                    <li>
                        <a href="item-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR ITEM</a>
                    </li>
                    <li>
                        <a href="item-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE ITEMS</a>
                    </li>
                    <li>
                        <a href="item-search.php"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR ITEM</a>
                    </li>
                </ul>
            </div>
            
            <!--CONTENT-->
 <div class="container-fluid">
				<form action="update2.php" method="post" name="formulario1" class="form-neon" autocomplete="off">
					<fieldset>
						<legend><i class="far fa-plus-square"></i> &nbsp; Información del item</legend>
						<div class="container-fluid">
							<div class="row">

								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="item_nombre" id="maac" class="bmd-label-floating">Dispositivo</label>
										<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ][^'\x22]{1,140}" class="form-control" name="dispositivo" id="dispositivo" maxlength="140" required value="<?php echo $row['dispositivo']  ?>">
									</div>
								</div>

								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="item_nombre" class="bmd-label-floating">N.serie</label>
										<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control" name="serie" id="item_nombre" maxlength="140" required value="<?php echo $row['serie']  ?>">
									</div>
								</div>
                                
                                <div class="col-12 col-md-4">
									<div class="form-group">
										<label for="item_nombre" id="maac" class="bmd-label-floating">Direccion Mac</label>
										<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ][^'\x22]{1,140}" class="form-control" name="mac" id="mac" maxlength="140" required value="<?php echo $row['mac']  ?>">
									</div>
								</div>
                                
                                <div class="col-12 col-md-4">
									<div class="form-group">
										<label for="item_nombre" id="maac" class="bmd-label-floating">Marca</label>
										<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ][^'\x22]{1,140}" class="form-control" name="marca" id="mac" maxlength="140" required value="<?php echo $row['marca']  ?>">
									</div>
								</div>
                                
                               <div class="col-12 col-md-4">
									<div class="form-group">
										<label for="item_nombre" class="bmd-label-floating">Modelo</label>
										<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control" name="modelo" id="modelo" maxlength="140" required value="<?php echo $row['modelo']  ?>">
									</div>
								</div>
                               <div class="col-12 col-md-4">
									<div class="form-group">
										<label for="item_nombre" id="maac" class="bmd-label-floating">Memoria Ram</label>
										<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ][^'\x22]{1,140}" class="form-control" name="ram" id="mac" maxlength="140" required value="<?php echo $row['ram']  ?>">
									</div>
								</div>
                               
                                <div class="col-12 col-md-4">
									<div class="form-group">
										<label for="item_nombre" id="maac" class="bmd-label-floating">Tipo de Procesador</label>
										<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ][^'\x22]{1,140}" class="form-control" name="tprocesador" id="mac" maxlength="140" required value="<?php echo $row['tprocesador']  ?>">
									</div>
								</div>
                                
                                 <div class="col-12 col-md-4">
									<div class="form-group">
										<label for="item_nombre" id="maac" class="bmd-label-floating">Procesador</label>
										<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ][^'\x22]{1,140}" class="form-control" name="procesador" id="mac" maxlength="140" required value="<?php echo $row['procesador']  ?>">
									</div>
								</div>
                                
								<div class="col-12 col-md-4">
									<div class="form-group">
										<select class="form-control" name="estado" required>
                                            <option value="<?php echo $row['estado']  ?>" selected="" disabled="">Estado de Dispositivo</option>
                                            <option value="Habilitado">Habilitado</option>
                                            <option value="Stock">Stock</option>
                                            <option value="Baja">Baja</option>
                                        </select>
									</div>
								</div>
                                
                                <div class="col-12 col-md-3">
									<div class="form-group">
										 <p class="text-justify">
                                         Fecha de Compra
                                         </p>
										<input type="date" name="fecha" required value="<?php echo $row['fecha']  ?>">
									</div>
								</div>
                                <div class="col-12 col-md-4">
									<div class="form-group">
										<label for="item_detalle" class="bmd-label-floating">Asignacion</label>
										<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9()- ]{1,190}" class="form-control" name="asignacion" id="item_detalle" maxlength="190" required value="<?php echo $row['asignacion']  ?>">
									</div>
								</div>
                                
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="item_detalle" class="bmd-label-floating">Detalles</label>
										<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9()- ]{1,190}" class="form-control" name="detalles" id="item_detalle" maxlength="190" required value="<?php echo $row['detalles']  ?>">
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
					<p class="text-center" style="margin-top: 40px;">
						<button type="submit" class="btn btn-raised btn-success btn-sm"><i class="fas fa-sync-alt"></i> &nbsp; ACTUALIZAR</button>
					</p>
                   <input type="hidden" name="id_item" value="<?php echo $id_item; ?>">
				</form>
			</div>
        </section>
        
        <script type="text/javascript">
			//1) Definir Las Variables Correspondintes
			var marca_Acces_Point = new Array ("Marca", "Grandstream", "Meraki", "Aironet", "Tp Link", "NetGear");
			var marca_Computadora_escritorio = new Array ("Marca", "Dell", "HP", "Generico");
			var marca_iMac = new Array ("Marca", "Apple",);
			var marca_Impresora = new Array ("Marca", "HP", "Brother", "Epson");
            var marca_iPad = new Array ("Marca", "Apple");
            var marca_Lap_Top = new Array ("Marca", "HP", "Dell", "ASUS", "ACER");
            var marca_Monitor = new Array ("Marca", "HP", "Dell", "GIGABYTE", "Samsung");
            var marca_Mouse = new Array ("Marca", "Generico", "Apple");
            var marca_Proyector = new Array ("Marca", "HP", "Epson");
            var marca_Scanner = new Array ("Marca", "Viewsonic", "Epson", "Brother",);
            var marca_Switch = new Array ("Marca", "Cisco", "Unifi", "Tp Link", "Hp", "Huawei");
            var marca_Teclado = new Array ("Marca", "Generico", "Apple");
			// 2) crear una funcion que permita ejecutar el cambio dinamico
			
			function cambia(){
				var dispositivo;
				//Se toma el vamor de la "cosa seleccionada"
				dispositivo = document.formulario1.dispositivo[document.formulario1.dispositivo.selectedIndex].value;
				//se chequea si la "cosa" esta definida
				if(dispositivo!=0){
					//selecionamos las cosas Correctas
					mis_opts=eval("marca_" + dispositivo);
					//se calcula el numero de cosas
					num_opts=mis_opts.length;
					//marco el numero de opt en el select
					document.formulario1.marca.length = num_opts;
					//para cada opt del array, la pongo en el select
					for(i=0; i<num_opts; i++){
						document.formulario1.marca.options[i].value=mis_opts[i];
						document.formulario1.marca.options[i].text=mis_opts[i];
					}
					}else{
						//si no habia ninguna opt seleccionada, elimino las cosas del select
						document.formulario1.marca.length = 1;
						//ponemos un guion en la unica opt que he dejado
						document.formulario1.marca.options[0].value="-";
						document.formulario1.marca.options[0].text="-";
					}
					//hacer un reset de las opts
					document.formulario1.marca.options[0].selected = true;
					
				}
            </script>
        
        <script type="text/javascript">
			//1) Definir Las Variables Correspondintes
			var procesador_AMD = new Array ("Procesador","AMD A10 Micro-6700T","AMD A10 Pro-7350B","AMD A10-4600M","AMD A10-4655M","AMD A10-4657M","AMD A10-5700","AMD A10-5745M","AMD A10-5750M","AMD A10-5757M","AMD A10-5800K","AMD A10-6700","AMD A10-6700T","AMD A10-6790B","AMD A10-6790K ","AMD A10-6800B","AMD A10-6800K","AMD A10-7300","AMD A10-7350B","AMD A10-7400P","A10-7700K","AMD A10-7800","AMD A10-7850K ","AMD A10-7860k","AMD A10-7870K","AMD A10-7890K","AMD A10-8700P","AMD A10-9600P","AMD A10-9620P","AMD A10-9700","AMD A10-9700E","AMD A12-9700P","AMD A12-9720P","AMD A12-9800","AMD A12-9800E","AMD A4 Micro-6400T","AMD A4-1200","AMD A4-1250","AMD A4-1350","AMD A4-3300","AMD A4-3300M","AMD A4-3305M","AMD A4-3310MX","AMD A4-3320M","AMD A4-3330MX","AMD A4-3400","AMD A4-3420","AMD A4-3450","AMD A4-4000","AMD A4-4020","AMD A4-4300M","AMD A4-4355M","AMD A4-5000","AMD A4-5050","AMD A4-5100","AMD A4-5145M","AMD A4-5150M","AMD A4-5300","AMD A4-5300B","AMD A4-6210","AMD A4-6300","AMD A4-6300B","AMD A4-6320","AMD A4-7210","AMD A4-7300","AMD A4-9120","AMD A4-9120C","AMD A6 Pro-7050B","AMD A6-1450","AMD A6-3400M","AMD A6-3410MX","AMD A6-3420M","AMD A6-3430MX","AMD A6-3500","AMD A6-3600","AMD A6-3620","AMD A6-3650","AMD A6-3670K","AMD A6-4400M","AMD A6-4455M","AMD A6-5200","AMD A6-5350M","AMD A6-5357M","AMD A6-5400B","AMD A6-5400K","AMD A6-6310","AMD A6-6400K","AMD A6-6420K","AMD A6-7000","AMD A6-7050B","AMD A6-7310","AMD A6-7400K","AMD A6-7470K","AMD A6-7480","AMD A6-8500P","AMD A6-9120","AMD A6-9120C","AMD A6-9210","AMD A6-9220","AMD A6-9220C","AMD A6-9225","AMD A6-9500","AMD A6-9500E","AMD A6-9550","AMD A8-3500M","AMD A8-3510MX","AMD A8-3520M","AMD A8-3530MX ","AMD A8-3550MX","AMD A8-3800","AMD A8-3820","AMD A8-3850","AMD A8-3870K","AMD A8-4500M","AMD A8-4555M","AMD A8-5500","AMD A8-5500B","AMD A8-5545M","AMD A8-5550M","AMD A8-5557M","AMD A8-5600K","AMD A8-6410","AMD A8-6500","AMD A8-6500T","AMD A8-6600K","AMD A8-7100","AMD A8-7150B","AMD A8-7200P","AMD A8-7410","AMD A8-7600","AMD A8-7650K","AMD A8-7670K","AMD A8-7680","AMD A8-8600P","AMD A8-9600","AMD A9-9410","AMD A9-9420","AMD A9-9420e","AMD A9-9425","AMD Athlon 200GE","AMD Athlon 220GE","AMD Athlon 240GE","AMD Athlon 3000G","AMD Athlon 300U","AMD Athlon 5150","AMD Athlon 5350","AMD Athlon 5370","AMD Athlon 64 2000+","AMD Athlon 64 2600+","AMD Athlon 64 2800+","AMD Athlon 64 3000+","AMD Athlon 64 3200+","AMD Athlon 64 3300+","AMD Athlon 64 3400+","AMD Athlon 64 3500+","AMD Athlon 64 3600+","AMD Athlon 64 3700+","AMD Athlon 64 3800+","AMD Athlon 64 4000+","AMD Athlon 64 FX-51","AMD Athlon 64 FX-53","AMD Athlon 64 FX-55","AMD Athlon 64 FX-57","AMD Athlon 64 FX-60","AMD Athlon 64 FX-62","AMD Athlon 64 FX-72","AMD Athlon 64 FX-74","AMD Athlon 64 TF-20","AMD Athlon 64 X2 3600+","AMD Athlon 64 X2 3800+","AMD Athlon 64 X2 4000+","AMD Athlon 64 X2 4200+","AMD Athlon 64 X2 4400+","AMD Athlon 64 X2 4600+","AMD Athlon 64 X2 4800+","AMD Athlon 64 X2 5000+","AMD Athlon 64 X2 5200+","AMD Athlon 64 X2 5400+","AMD Athlon 64 X2 5600+","AMD Athlon 64 X2 5800+","AMD Athlon 64 X2 6000+","AMD Athlon 64 X2 FX-60","AMD Athlon 64 X2 TK-42","AMD Athlon 64 X2 TK-53","AMD Athlon 64 X2 TK-55","AMD Athlon 64 X2 TK-57","AMD Athlon Gold 3150U","AMD Athlon II 160u","AMD Athlon II M300","AMD Athlon II M320","AMD Athlon II M340","AMD Athlon II N330","AMD Athlon II N350","AMD Athlon II N370","AMD Athlon II Neo K125","AMD Athlon II Neo K145","AMD Athlon II Neo K325","AMD Athlon II Neo K345","AMD Athlon II P320","AMD Athlon II P340","AMD Athlon II P360","AMD Athlon II X2 210e","AMD Athlon II X2 215","AMD Athlon II X2 220","AMD Athlon II X2 221","AMD Athlon II X2 235e","Athlon II X2 240","AMD Athlon II X2 240e","AMD Athlon II X2 245","AMD Athlon II X2 245e","AMD Athlon II X2 250","AMD Athlon II X2 250e","AMD Athlon II X2 250u","AMD Athlon II X2 255","AMD Athlon II X2 260","AMD Athlon II X2 260u","AMD Athlon II X2 265","AMD Athlon II X2 270","AMD Athlon II X2 270u","AMD Athlon II X2 280","AMD Athlon II X2 340","AMD Athlon II X2 370K","AMD Athlon II X3 400e","AMD Athlon II X3 405e","AMD Athlon II X3 415e","AMD Athlon II X3 420e","AMD Athlon II X3 425","AMD Athlon II X3 425e","AMD Athlon II X3 435","AMD Athlon II X3 440","AMD Athlon II X3 445","AMD Athlon II X3 450","AMD Athlon II X3 455","AMD Athlon II X3 460","AMD Athlon II X4 600e","AMD Athlon II X4 605e","AMD Athlon II X4 610e","AMD Athlon II X4 615e","AMD Athlon II X4 620","AMD Athlon II X4 620e","AMD Athlon II X4 630","AMD Athlon II X4 631","AMD Athlon II X4 635","AMD Athlon II X4 638","AMD Athlon II X4 640","AMD Athlon II X4 641","AMD Athlon II X4 645","AMD Athlon II X4 651","AMD Athlon II X4 651K","AMD Athlon II X4 740","AMD Athlon II X4 750K","AMD Athlon II X4 760K","AMD Athlon II X4 860K","AMD Athlon MP 2400+","AMD Athlon MP 2800+","AMD Athlon Neo MV-40","AMD Athlon Neo X2 L325","AMD Athlon Neo X2 L335","AMD Athlon PRO 200GE","AMD Athlon PRO 300GE","AMD Athlon PRO 300U","AMD Athlon Silver 3050U","AMD Athlon X2 340","AMD Athlon X2 350","AMD Athlon X2 370K","AMD Athlon X2 450","AMD Athlon X2 BE-2300","AMD Athlon X2 BE-2350","AMD Athlon X2 BE-2400","AMD Athlon X2 L310","AMD Athlon X2 QL-60","AMD Athlon X2 QL-64","AMD Athlon X2 QL-65","AMD Athlon X2 QL-66","AMD Athlon X4 530","AMD Athlon X4 550","AMD Athlon X4 740","AMD Athlon X4 750K","AMD Athlon X4 760K","AMD Athlon X4 835","AMD Athlon X4 840","AMD Athlon X4 845","AMD Athlon X4 860K","AMD Athlon X4 870K","AMD Athlon X4 880K","AMD Athlon X4 940","AMD Athlon X4 950","AMD Athlon X4 970","AMD Athlon XP 1500+","AMD Athlon XP 1600+","AMD Athlon XP 1700+","AMD Athlon XP 1800+","AMD Athlon XP 1900+","AMD Athlon XP 2000+","AMD Athlon XP 2100+","AMD Athlon XP 2200+","AMD Athlon XP 2400+","AMD Athlon XP 2500+","AMD Athlon XP 2600+","AMD Athlon XP 2700+","AMD Athlon XP 2800+","AMD Athlon XP 3000+","AMD Athlon XP 3100+","AMD Athlon XP 3200+","AMD C-30","AMD C-50","AMD C-60","AMD C-70","AMD E-240","AMD E-300","AMD E-350","AMD E-350D","AMD E-450","AMD E1-1200","AMD E1-1500","AMD E1-2100","AMD E1-2200","AMD E1-2500","AMD E1-6010","AMD E2-1800","AMD E2-2000","AMD E2-3000","AMD E2-3000M","AMD E2-3200","AMD E2-3300M","AMD E2-3800","AMD E2-6110","AMD E2-7110","AMD E2-9000","AMD E2-9010","AMD EPYC 7371","AMD Epyc 7232P","AMD Epyc 7251","AMD Epyc 7252","AMD Epyc 7262","AMD Epyc 7272","AMD Epyc 7281","AMD Epyc 7282","AMD Epyc 7301","AMD Epyc 7302","AMD Epyc 7302P","AMD Epyc 7351","AMD Epyc 7351P","AMD Epyc 7352","AMD Epyc 7401","AMD Epyc 7401P","AMD Epyc 7402","AMD Epyc 7402P","AMD Epyc 7451","AMD Epyc 7452","AMD Epyc 7501 ","AMD Epyc 7502","AMD Epyc 7502P","AMD Epyc 7532","AMD Epyc 7542","AMD Epyc 7551","AMD Epyc 7551P","AMD Epyc 7552","AMD Epyc 7601","AMD Epyc 7642","AMD Epyc 7662","AMD Epyc 7702","AMD Epyc 7702P","AMD Epyc 7742","AMD FX-4100","AMD FX-4130","AMD FX-4150","AMD FX-4170 ","AMD FX-4200","AMD FX-4300","AMD FX-4320","AMD FX-4350","AMD FX-6100","AMD FX-6120","AMD FX-6130","AMD FX-6200","AMD FX-6300","AMD FX-6330","AMD FX-6350","AMD FX-7500","AMD FX-7600P","AMD FX-8100","AMD FX-8120","AMD FX-8140","AMD FX-8150","AMD FX-8300","AMD FX-8310","AMD FX-8320","AMD FX-8320E","AMD FX-8350","AMD FX-8370","AMD FX-8370E","AMD FX-8800P","AMD FX-9370","AMD FX-9590","AMD FX-9800P","AMD FX-9830P","AMD G-T16R","AMD G-T24L","AMD G-T30L","AMD G-T40E","AMD G-T40N","AMD G-T40R","AMD G-T44R","AMD G-T48E","AMD G-T48L","AMD G-T48N","AMD G-T52R","AMD G-T56E","AMD G-T56N","AMD Mobile Athlon 64 2700+","AMD Mobile Athlon 64 2800+","AMD Mobile Athlon 64 3000+","AMD Mobile Athlon 64 3200+","AMD Mobile Athlon 64 3400+","AMD Mobile Athlon 64 3700+","AMD Mobile Athlon 64 4000+","AMD Mobile Sempron 210U","AMD Mobile Sempron 2600+","AMD Mobile Sempron 2800+","AMD Mobile Sempron 3000+","AMD Mobile Sempron 3100+","AMD Mobile Sempron 3200+","AMD Mobile Sempron 3300+","AMD Mobile Sempron 3400+","AMD Mobile Sempron 3500+","AMD Mobile Sempron 3600+","AMD Mobile Sempron 3800+","AMD Mobile Sempron M100","AMD Mobile Sempron SI-40","AMD Mobile Sempron SI-42","AMD Opteron 140","AMD Opteron 142","AMD Opteron 144","AMD Opteron 146","AMD Opteron 148","AMD Opteron 150","AMD Opteron 152","AMD Opteron 154","AMD Opteron 246","AMD Opteron 248","AMD Opteron 250","AMD Opteron 252","AMD Opteron 254","AMD Opteron 3280","AMD Opteron 3320 EE","AMD Opteron 3350 HE","AMD Opteron 3380","AMD Opteron 4332 HE","AMD Opteron 4332 HE","AMD Opteron 4386","AMD Opteron 6272","AMD Opteron 6274","AMD Opteron 6276","AMD Opteron 6282 SE","AMD Opteron 632","AMD Opteron 6328","AMD Opteron 6344","AMD Opteron 6366 HE","AMD Opteron 6376","AMD Opteron 6378","AMD Opteron 6380","AMD Opteron 6386 SE","AMD PRO A12-9800B","AMD PRO A8-9600B","AMD Phenom II 42 TWKR Black Edition","AMD Phenom II X2 511","AMD Phenom II X2 521","AMD Phenom II X2 545","AMD Phenom II X2 550","AMD Phenom II X2 550 Black","AMD Phenom II X2 555","AMD Phenom II X2 555 Black","AMD Phenom II X2 560","AMD Phenom II X2 560 Black","AMD Phenom II X2 565","AMD Phenom II X2 565 Black","AMD Phenom II X2 B53","AMD Phenom II X2 B55","AMD Phenom II X2 B57","AMD Phenom II X2 B59","AMD Phenom II X2 N620","AMD Phenom II X2 N640","AMD Phenom II X2 X640 BE","AMD Phenom II X3 700e","AMD Phenom II X3 705e","AMD Phenom II X3 710","AMD Phenom II X3 715","AMD Phenom II X3 715 Black","AMD Phenom II X3 720 ","AMD Phenom II X3 720 Black","AMD Phenom II X3 740","AMD Phenom II X3 740 Black","AMD Phenom II X3 B73","AMD Phenom II X3 B75","AMD Phenom II X3 B77","AMD Phenom II X3 N830","AMD Phenom II X3 N850","AMD Phenom II X3 N870","AMD Phenom II X3 P820","AMD Phenom II X3 P840","AMD Phenom II X4 805","AMD Phenom II X4 810","AMD Phenom II X4 820","AMD Phenom II X4 830","AMD Phenom II X4 840","AMD Phenom II X4 840T","AMD Phenom II X4 850","AMD Phenom II X4 900e","AMD Phenom II X4 905e","AMD Phenom II X4 910","AMD Phenom II X4 910e","AMD Phenom II X4 920","AMD Phenom II X4 925","AMD Phenom II X4 940","AMD Phenom II X4 940 Black","AMD Phenom II X4 945","AMD Phenom II X4 955","AMD Phenom II X4 955 Black","AMD Phenom II X4 960T","AMD Phenom II X4 960T Black","AMD Phenom II X4 965","AMD Phenom II X4 965 Black","AMD Phenom II X4 965 Black","AMD Phenom II X4 970","AMD Phenom II X4 970 Black","AMD Phenom II X4 975","AMD Phenom II X4 980","AMD Phenom II X4 980 Black","AMD Phenom II X4 B93","AMD Phenom II X4 B95","AMD Phenom II X4 B97","AMD Phenom II X4 B99","AMD Phenom II X4 N930","AMD Phenom II X4 N950","AMD Phenom II X4 N970","AMD Phenom II X4 P920","AMD Phenom II X4 P960 ","AMD Phenom II X4 X920 BE","AMD Phenom II X6 1035T","AMD Phenom II X6 1045T","AMD Phenom II X6 1055T","AMD Phenom II X6 1055T","AMD Phenom II X6 1065T","AMD Phenom II X6 1075T","AMD Phenom II X6 1090T","AMD Phenom II X6 1090T Black","AMD Phenom II X6 1100T","AMD Phenom II X6 1100T BE","AMD Phenom II X6 1100T Black","AMD Phenom X3 8250e","AMD Phenom X3 8400","AMD Phenom X3 8450","AMD Phenom X3 8450e","AMD Phenom X3 8550","AMD Phenom X3 8600","AMD Phenom X3 8650","AMD Phenom X3 8750","AMD Phenom X3 8850","AMD Phenom X4 9100e","AMD Phenom X4 9150e","AMD Phenom X4 9350e","AMD Phenom X4 9450e","AMD Phenom X4 9500","AMD Phenom X4 9550","AMD Phenom X4 9600","AMD Phenom X4 9600B","AMD Phenom X4 9650","AMD Phenom X4 9750B","AMD Phenom X4 9850B","AMD Pro A10-7800B ","AMD Pro A10-7850B","AMD Pro A10-8700B","AMD Pro A12-8800B","AMD Pro A4-7300B","AMD Pro A6-7400B","AMD Pro A6-8500B","AMD Pro A8-7600B","AMD Pro A8-8600B","AMD Ryzen 3 1200","AMD Ryzen 3 1300X","AMD Ryzen 3 2200G","AMD Ryzen 3 2200GE","AMD Ryzen 3 2200U","AMD Ryzen 3 2300U","AMD Ryzen 3 2300X","AMD Ryzen 3 3100","AMD Ryzen 3 3200G","AMD Ryzen 3 3200U","AMD Ryzen 3 3250U","AMD Ryzen 3 3300U","AMD Ryzen 3 3300X","AMD Ryzen 3 4300U","AMD Ryzen 3 PRO 2200G","AMD Ryzen 3 PRO 2200U","AMD Ryzen 3 PRO 2300U","AMD Ryzen 3 PRO 3200G","AMD Ryzen 3 PRO 3300U","AMD Ryzen 3 Pro 1200","AMD Ryzen 3 Pro 1300","AMD Ryzen 5 1400","AMD Ryzen 5 1500X ","AMD Ryzen 5 1600","AMD Ryzen 5 1600 AF","AMD Ryzen 5 1600X","AMD Ryzen 5 2400G","AMD Ryzen 5 2400GE","AMD Ryzen 5 2500U","AMD Ryzen 5 2500X","AMD Ryzen 5 2600","AMD Ryzen 5 2600H","AMD Ryzen 5 2600X","AMD Ryzen 5 3400G","AMD Ryzen 5 3500","AMD Ryzen 5 3500U","AMD Ryzen 5 3500X","AMD Ryzen 5 3550H","AMD Ryzen 5 3580U","AMD Ryzen 5 3600","AMD Ryzen 5 3600X","AMD Ryzen 5 3600XT","AMD Ryzen 5 4500U","AMD Ryzen 5 4600H","AMD Ryzen 5 4600U","AMD Ryzen 5 5500","AMD Ryzen 5 5600X","AMD Ryzen 5 7600X","AMD Ryzen 5 PRO 2400G","AMD Ryzen 5 PRO 2500U","AMD Ryzen 5 PRO 2600","AMD Ryzen 5 PRO 3400G","AMD Ryzen 5 PRO 3500U","AMD Ryzen 5 Pro 1500","AMD Ryzen 5 Pro 1600","AMD Ryzen 7 1700","AMD Ryzen 7 1700X","AMD Ryzen 7 1800X","AMD Ryzen 7 2700","AMD Ryzen 7 2700E","AMD Ryzen 7 2700U","AMD Ryzen 7 2700X","AMD Ryzen 7 2800H","AMD Ryzen 7 3700U","AMD Ryzen 7 3700X","AMD Ryzen 7 3750H","AMD Ryzen 7 3780U","AMD Ryzen 7 3800X","AMD Ryzen 7 3800XT","AMD Ryzen 7 4700U","AMD Ryzen 7 4800H","AMD Ryzen 7 4800HS","AMD Ryzen 7 4800U","AMD Ryzen 7 5700X","AMD Ryzen 7 5800X","AMD Ryzen 7 5800X3D","AMD Ryzen 7 7700X","AMD Ryzen 7 PRO 2700","AMD Ryzen 7 PRO 2700U","AMD Ryzen 7 PRO 2700X","AMD Ryzen 7 PRO 3700U","AMD Ryzen 7 Pro 1700","AMD Ryzen 7 Pro 1700X","AMD Ryzen 9 3900","AMD Ryzen 9 3900X","AMD Ryzen 9 3900XT","AMD Ryzen 9 3950X","AMD Ryzen 9 4900H","AMD Ryzen 9 4900HS","AMD Ryzen 9 4900U","AMD Ryzen 9 5900X","AMD Ryzen 9 5950X","AMD Ryzen 9 7900X","AMD Ryzen 9 7950X","AMD Ryzen 9 PRO 3900","AMD Ryzen PRO 7 4700U","AMD Ryzen Threadripper 1900X","AMD Ryzen Threadripper 1920X","AMD Ryzen Threadripper 1950","AMD Ryzen Threadripper 1950X","AMD Ryzen Threadripper 2920X","AMD Ryzen Threadripper 2950X","AMD Ryzen Threadripper 2970WX","AMD Ryzen Threadripper 2990WX","AMD Ryzen Threadripper 3960X","AMD Ryzen Threadripper 3970X","AMD Ryzen Threadripper 3990X","AMD Sempron 130","AMD Sempron 140","AMD Sempron 145","AMD Sempron 150","AMD Sempron 2200+","AMD Sempron 2300+","AMD Sempron 2400+","AMD Sempron 2500+","AMD Sempron 2600+","AMD Sempron 2650","AMD Sempron 2800+","AMD Sempron 3000+","AMD Sempron 3100+","AMD Sempron 3200+","AMD Sempron 3300+","AMD Sempron 3400+","AMD Sempron 3500+","AMD Sempron 3600+","AMD Sempron 3800+","AMD Sempron 3850","AMD Sempron LE-1100","AMD Sempron LE-1150","AMD Sempron LE-1200","AMD Sempron LE-1250","AMD Sempron LE-1300","AMD Sempron X2 190","AMD Sempron X2 198","AMD Sempron X2 250","AMD Turion 64 MK-36","AMD Turion 64 MK-38","AMD Turion 64 ML-28","AMD Turion 64 ML-30 ","AMD Turion 64 ML-34","AMD Turion 64 ML-37","AMD Turion 64 ML-40","AMD Turion 64 ML-44","AMD Turion 64 MT-28","AMD Turion 64 MT-30","AMD Turion 64 MT-32","AMD Turion 64 MT-37","AMD Turion 64 MT-40","AMD Turion 64 X2 TL-50","AMD Turion 64 X2 TL-52","AMD Turion 64 X2 TL-56","AMD Turion 64 X2 TL-58","AMD Turion 64 X2 TL-60","AMD Turion 64 X2 TL-62","AMD Turion 64 X2 TL-64","AMD Turion 64 X2 TL-66","AMD Turion II M500","AMD Turion II M520","AMD Turion II N530","AMD Turion II N550","AMD Turion II Neo K625","AMD Turion II Neo K685","AMD Turion II P520","AMD Turion II P540","AMD Turion II P560","AMD Turion II Ultra M600","AMD Turion II Ultra M620","AMD Turion II Ultra M660","AMD Turion Neo X2 L625","AMD Turion X2 RM-70","AMD Turion X2 RM-72","AMD Turion X2 RM-74","AMD Turion X2 RM-75","AMD Turion X2 RM-76","AMD Turion X2 Ultra ZM-80","AMD Turion X2 Ultra ZM-82","AMD Turion X2 Ultra ZM-84","AMD Turion X2 Ultra ZM-85","AMD Turion X2 Ultra ZM-86","AMD V-Series V105","AMD V-Series V120","AMD V-Series V140","AMD Z-01");
			var procesador_INTEL = new Array ("Procesador","i3", "i5", "i7");
            var procesador_MAC = new Array ("Procesador","M1", "M2", "M3");

			// 2) crear una funcion que permita ejecutar el cambio dinamico
			
			function cambiar(){
				var tprocesador;
				//Se toma el vamor de la "cosa seleccionada"
				tprocesador = document.formulario1.tprocesador[document.formulario1.tprocesador.selectedIndex].value;
				//se chequea si la "cosa" esta definida
				if(tprocesador!=0){
					//selecionamos las cosas Correctas
					mis_opts=eval("procesador_" + tprocesador);
					//se calcula el numero de cosas
					num_opts=mis_opts.length;
					//marco el numero de opt en el select
					document.formulario1.procesador.length = num_opts;
					//para cada opt del array, la pongo en el select
					for(i=0; i<num_opts; i++){
						document.formulario1.procesador.options[i].value=mis_opts[i];
						document.formulario1.procesador.options[i].text=mis_opts[i];
					}
					}else{
						//si no habia ninguna opt seleccionada, elimino las cosas del select
						document.formulario1.procesador.length = 1;
						//ponemos un guion en la unica opt que he dejado
						document.formulario1.procesador.options[0].value="-";
						document.formulario1.procesador.options[0].text="-";
					}
					//hacer un reset de las opts
					document.formulario1.procesador.options[0].selected = true;
					
				}
            </script>
        
        <script type="text/javascript">
			//1) Definir Las Variables Correspondintes
			var ram_Acces_Point = new Array ("N/A");
			var ram_Computadora_escritorio = new Array ("Memoria Ram", "2GB", "4GB", "6GB", "8GB", "12GB", "16GB", "32GB");
			var ram_iMac = new Array ("Memoria Ram", "2GB", "4GB", "6GB", "8GB", "12GB", "16GB", "32GB");
			var ram_Impresora = new Array ("N/A");
            var ram_iPad = new Array ("Memoria Ram", "2GB", "4GB", "6GB", "8GB", "12GB", "16GB", "32GB");
            var ram_Lap_Top = new Array ("Memoria Ram", "2GB", "4GB", "6GB", "8GB", "12GB", "16GB", "32GB");
            var ram_Monitor = new Array ("N/A");
            var ram_Mouse = new Array ("N/A");
            var ram_Proyector = new Array ("N/A");
            var ram_Scanner = new Array ("N/A");
            var ram_Switch = new Array ("N/A");
            var ram_Teclado = new Array ("N/A");
			// 2) crear una funcion que permita ejecutar el cambio dinamico
			
			function cambiaa(){
				var dispositivo;
			    //Se toma el vamor de la "cosa seleccionada"
				dispositivo = document.formulario1.dispositivo[document.formulario1.dispositivo.selectedIndex].value;
				//se chequea si la "cosa" esta definida
				if(dispositivo!=0){
					//selecionamos las cosas Correctas
					mis_opts=eval("ram_" + dispositivo);
					//se calcula el numero de cosas
					num_opts=mis_opts.length;
					//marco el numero de opt en el select
					document.formulario1.ram.length = num_opts;
					//para cada opt del array, la pongo en el select
					for(i=0; i<num_opts; i++){
						document.formulario1.ram.options[i].value=mis_opts[i];
						document.formulario1.ram.options[i].text=mis_opts[i];
					}
					}else{
						//si no habia ninguna opt seleccionada, elimino las cosas del select
						document.formulario1.ram.length = 1;
						//ponemos un guion en la unica opt que he dejado
						document.formulario1.ram.options[0].value="-";
						document.formulario1.ram.options[0].text="-";
					}
					//hacer un reset de las opts
					document.formulario1.ram.options[0].selected = true;
					
				}
            </script>
        
         <script type="text/javascript">
			//1) Definir Las Variables Correspondintes
			var tprocesador_Acces_Point = new Array ("N/A");
			var tprocesador_Computadora_escritorio = new Array ("Tipo de Procesador", "INTEL", "AMD", "MAC");
			var tprocesador_iMac = new Array ("Tipo de Procesador", "INTEL", "AMD", "MAC");
			var tprocesador_Impresora = new Array ("N/A");
            var tprocesador_iPad = new Array ("Tipo de Procesador", "INTEL", "AMD", "MAC");
            var tprocesador_Lap_Top = new Array ("Tipo de Procesador", "INTEL", "AMD", "MAC");
            var tprocesador_Monitor = new Array ("N/A");
            var tprocesador_Mouse = new Array ("N/A");
            var tprocesador_Proyector = new Array ("N/A");
            var tprocesador_Scanner = new Array ("N/A");
            var tprocesador_Switch = new Array ("N/A");
            var tprocesador_Teclado = new Array ("N/A");
			// 2) crear una funcion que permita ejecutar el cambio dinamico
			
			function cambiaaa(){
				var dispositivo;
			    //Se toma el vamor de la "cosa seleccionada"
				dispositivo = document.formulario1.dispositivo[document.formulario1.dispositivo.selectedIndex].value;
				//se chequea si la "cosa" esta definida
				if(dispositivo!=0){
					//selecionamos las cosas Correctas
					mis_opts=eval("tprocesador_" + dispositivo);
					//se calcula el numero de cosas
					num_opts=mis_opts.length;
					//marco el numero de opt en el select
					document.formulario1.tprocesador.length = num_opts;
					//para cada opt del array, la pongo en el select
					for(i=0; i<num_opts; i++){
						document.formulario1.tprocesador.options[i].value=mis_opts[i];
						document.formulario1.tprocesador.options[i].text=mis_opts[i];
					}
					}else{
						//si no habia ninguna opt seleccionada, elimino las cosas del select
						document.formulario1.tprocesadpr.length = 1;
						//ponemos un guion en la unica opt que he dejado
						document.formulario1.tprocesador.options[0].value="-";
						document.formulario1.tprocesador.options[0].text="-";
					}
					//hacer un reset de las opts
					document.formulario1.tprocesador.options[0].selected = true;
					
				}
            </script>
        
           <script type="text/javascript">
			//1) Definir Las Variables Correspondintes
			var procesador_Acces_Point = new Array ("N/A");
			var procesador_Computadora_escritorio = new Array ("Procesador");
			var procesador_iMac = new Array ("Procesador");
			var procesador_Impresora = new Array ("N/A");
            var procesador_iPad = new Array ("Procesador");
            var procesador_Lap_Top = new Array ("Procesador");
            var procesador_Monitor = new Array ("N/A");
            var procesador_Mouse = new Array ("N/A");
            var procesador_Proyector = new Array ("N/A");
            var procesador_Scanner = new Array ("N/A");
            var procesador_Switch = new Array ("N/A");
            var procesador_Teclado = new Array ("N/A");
			// 2) crear una funcion que permita ejecutar el cambio dinamico
			
			function cambi(){
				var dispositivo;
			    //Se toma el vamor de la "cosa seleccionada"
				dispositivo = document.formulario1.dispositivo[document.formulario1.dispositivo.selectedIndex].value;
				//se chequea si la "cosa" esta definida
				if(dispositivo!=0){
					//selecionamos las cosas Correctas
					mis_opts=eval("procesador_" + dispositivo);
					//se calcula el numero de cosas
					num_opts=mis_opts.length;
					//marco el numero de opt en el select
					document.formulario1.procesador.length = num_opts;
					//para cada opt del array, la pongo en el select
					for(i=0; i<num_opts; i++){
						document.formulario1.procesador.options[i].value=mis_opts[i];
						document.formulario1.procesador.options[i].text=mis_opts[i];
					}
					}else{
						//si no habia ninguna opt seleccionada, elimino las cosas del select
						document.formulario1.procesador.length = 1;
						//ponemos un guion en la unica opt que he dejado
						document.formulario1.procesador.options[0].value="-";
						document.formulario1.procesador.options[0].text="-";
					}
					//hacer un reset de las opts
					document.formulario1.procesador.options[0].selected = true;
					
				}
            </script>
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