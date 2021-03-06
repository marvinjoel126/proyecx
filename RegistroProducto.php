<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Registro Producto</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/jvectormap/jquery-jvectormap-2.0.3.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="vendors/images/img1/ayo1.jpg" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Cargando :V
			</div>
		</div>
	</div>


	<!--Buscador-->
	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				<form>
					<div class="form-group mb-0">
						<i class="dw dw-search2 search-icon"></i>
						<input type="text" class="form-control search-input" placeholder="Buscar">
						<div class="dropdown">
							<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
								<i class="ion-arrow-down-c"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label"></label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">a</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Sujeto</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="text-right">
									<button class="btn btn-primary">Buscar</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		
		<!--panel de arriba-->
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
			<div class="user-notification">
				<div class="dropdown">
					
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="vendors/images/ayo.jpg" alt="">
						</span>
						<span class="user-name">Usuario :v</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="salir.php"><i class="dw dw-logout"></i> Cerar sesion</a>
					</div>
				</div>
			</div>
			
		</div>
	</div>

	
	<!--confiuracion de modo oscuro y blanco-->
	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Escoge la opci??n del dise??o
				<span class="btn-block font-weight-400 font-12">Configuracion del usuario</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Elige el color del fondo del encabezado</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">Blanco</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Negro</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Elige el color del fondo de la barra lateral</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">Blanco</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Negro</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Escoge el icono del menu del desplegable</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Escoge el menu de los subtemas</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reiniciar ajustes</button>
				</div>
			</div>
		</div>
	</div>

	<!--panel izquierdo-->
	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.html">
				<img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
				<img src="vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Inicio</span>
						</a>
						<ul class="submenu">
							<li><a href="inicio.php">Ir a la pagina de Inicio</a></li>
							
						</ul>
					</li>
					<!--
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Tablas</span>
						</a>
						<ul class="submenu">
							<li><a href="basic-table.html">Tablas basicas</a></li>
							<li><a href="datatable.html">Tablas de datos</a></li>
						</ul>
					</li>
					-->
					
					<li>
						<a href="calendar.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-calendar1"></span><span class="mtext">Calendario</span>
						</a>
					</li>
					
					<li>
						<a href="invoice.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-invoice"></span><span class="mtext">Factura</span>
						</a>
					</li>
					<li>
						<div class="dropdown-divider"></div>
					</li>

				</ul>
			</div>
			
		</div>
		
	</div>
	
	
	 
	 <div class="main-container">
		<!--los labels para registrar-->
		<!--Inicio Contenido-->
		<div class="container-fluid">
			<div class="p-5">
				<div class="text-center">
					<h1 class="h4 text-gray-900 mb-4">Registrar Producto</h1>
				</div>
				<form class="user" action="registrarproducto.php" method="POST">
					<div class="form-group right">
						<div class="col-sm-15 mb-6 mb-sm-0">
							<input type="text" name="producto" class="form-control form-control-user" id="exampleName"
								placeholder="Ingrese el nombre del producto">
						</div>
					</div>
					<div class="form-group">
						<input type="text" name="cantidad" class="form-control form-control-user" id="exampleInputEmail"
							placeholder="Cantidad del producto">
					</div>
					<div class="form-group row">
						<div class="col-sm-6 mb-3 mb-sm-0">
							<input type="text" name="precio" class="form-control form-control-user" id="exampleInputMovil"
								placeholder="Precio del producto">
						</div>
						<div class="col-sm-6">
							<input type="text" name="total" class="form-control form-control-user" id="exampleInputFijo"
								placeholder="Total del producto">
						</div>
					</div>
					<button type="submit" class="btn btn-primary btn-user btn-block">Registrar</button>
				</form>
				<hr>
			</div>
			<!--Fin Contenido-->
  
		</div>
		
	  
		
				

		
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/jQuery-Knob-master/jquery.knob.min.js"></script>
	<script src="src/plugins/highcharts-6.0.7/code/highcharts.js"></script>
	<script src="src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>
	<script src="src/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
	<script src="src/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="vendors/scripts/dashboard2.js"></script>
</body>
</html>