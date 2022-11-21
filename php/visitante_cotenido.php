<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="canonical" href="https://demo-basic.adminkit.io/" />
    <link rel="stylesheet" href="../css/style.css">
	<title>Assipark</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link href="../css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../img/logo_assipark.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</head>
<body>
	<div class="wrapper bg-white">
    <nav id="sidebar" class="sidebar js-sidebar bg-white">
			<div class="sidebar-content js-simplebar bg-white">
				<a class="sidebar-brand bg-white" href="index.html">
                    <span class="align-middle bg-white"></span>
                </a>
				<div 
				id="reloj">00 : 00 
				</div>
        <ul class="sidebar-nav bg-white">
            <li class="sidebar-item bg-white">
                <a class="sidebar-link mt-7 bg-white" href="administrador.php">
                    <span class="align-middle">Inicio</span>
                </a>
			</li>
			<li class="sidebar-item bg-white">
				<div class="dropdown mt-3 ms-3  ">
					<button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
						Usuario		
					</button>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="usuario_registro.php">Registrar</a></li>
						<li><a class="dropdown-item" href="usuario_contenido.php">Contenido</a></li>
					</ul>
				</div>
			</li>
			<li class="sidebar-item bg-white">
				<div class="dropdown mt-3 ms-3  ">
					<button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
						Visitantes
					</button>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="visitantes_registro.php">Registrar</a></li>
						<li><a class="dropdown-item" href="visitante_cotenido.php">Contenido</a></li>
					</ul>
				</div>
			</li>
			<li class="sidebar-item bg-white">
				<div class="dropdown mt-3 ms-3  ">
					<button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
						Vehiculos	
					</button>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="vehiculos_registro.php">Registrar</a></li>
						<li><a class="dropdown-item" href="vehiculo_contenido.php">Contenido</a></li>
					</ul>
				</div>
			</li>
            <li class="sidebar-item bg-white">
				<div class="dropdown mt-3 ms-3  ">
					<button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
						Apartamentos
					</button>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="apartamento_registro.php">Registrar</a></li>
						<li><a class="dropdown-item" href="apartamento_contenido.php">Contenido</a></li>
					</ul>
				</div>
			</li>
            <li class="sidebar-item bg-white">
				<div class="dropdown mt-3 ms-3  ">
					<button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
						Residentes	
					</button>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="residentes_registro.php">Registrar</a></li>
						<li><a class="dropdown-item" href="residentes_contenido.php">Contenido</a></li>
					</ul>
				</div>
			</li>
			<li class="sidebar-item bg-white">
				<div class="dropdown mt-3 ms-3  ">
					<button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
						Parqueadero	
					</button>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="parqueaderos_registro.php">Registrar</a></li>
						<li><a class="dropdown-item" href="parquedero_contenido.php">Contenido</a></li>
					</ul>
				</div>
			</li>
		</ul>
		</nav>
		<div class="main">
            <nav class="navbar navbar-expand bg-navbar" id="nabvar-administrator" >
				<a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>
                <a href="administrador.php"><img src="../img/LOGO_ASSIPARK_BLANCO.png" width="200px" height="43px" alt=""></a>  
				<div class="navbar-collapse  nav-bar-justify ">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">4</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-primary" data-feather="home"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.8</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-success" data-feather="user-plus"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Christina accepted your request.</div>
												<div class="text-muted small mt-1">14h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 New Messages
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Vanessa Tucker</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
												<div class="text-muted small mt-1">15m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">William Harris</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Christina Mason</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
												<div class="text-muted small mt-1">4h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Sharon Lessman</div>
												<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>	
			</a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="../img/miguel.jpeg.jpeg" class="avatar img-fluid rounded-circle me-1" alt="miguel" /> <span class="text-dark">Miguel Roldan</span>
                </a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../html/index.html">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<main class="content">
                <div class="container">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>Visitantes <b>Assipark</b></h2>
                                </div>
                                <div class="col-sm-6">
                                    <a href="usuario_registro.html" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Agregar Usuario</span></a>
                                    <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Eliminar</span></a>						
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr class="bg-crud">
                                    <th>
                                    </th>
                                    <th>Documento de Identidad</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Celular</th>
                                    <th>Modificar</th>
                                    <th>Inhabilitar</th>
                                </tr>
                            </thead>
                            <tbody class="col-12">
                                <tr>
                                    <td>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                            <label for="checkbox1"></label>
                                        </span>
                                    </td>
                                    <td>1001315981</td>
                                    <td>Miguel</td>
                                    <td>Roldán</td>
                                    <td>7502817</td>
                                    <td>
                                        <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    </td>
                                    <td>
                                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="checkbox2" name="options[]" value="1">
                                            <label for="checkbox2"></label>
                                        </span>
                                    </td>
                                    <td>1001315981</td>
                                    <td>Miguel</td>
                                    <td>Roldán</td>
                                    <td>7502817</td>
                                    <td>
                                        <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    </td>
                                    <td>
                                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="checkbox3" name="options[]" value="1">
                                            <label for="checkbox3"></label>
                                        </span>
                                    </td>
                                    <td>1001315981</td>
                                    <td>Miguel</td>
                                    <td>Roldán</td>
                                    <td>7502817</td>
                                    <td>
                                        <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    </td>
                                    <td>
                                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="checkbox4" name="options[]" value="1">
                                            <label for="checkbox4"></label>
                                        </span>
                                    </td>
                                    <td>1001315981</td>
                                    <td>Miguel</td>
                                    <td>Roldán</td>
                                    <td>7502817</td>
                                    <td>
                                        <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    </td>
                                    <td>
                                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                    </td>
                                </tr>					
                                <tr>
                                    <td>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="checkbox5" name="options[]" value="1">
                                            <label for="checkbox5"></label>
                                        </span>
                                    </td>
                                    <td>1001315981</td>
                                    <td>Miguel</td>
                                    <td>Roldán</td>
                                    <td>7502817</td>
                                    <td>
                                        <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
                                    </td>
                                    <td>
                                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                    </td>
                                </tr> 
                            </tbody>
                        </table>
                        <div class="clearfix">
                            <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                            <ul class="pagination">
                                <li class="page-item disabled"><a href="#">Previous</a></li>
                                <li class="page-item"><a href="#" class="page-link">1</a></li>
                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                <li class="page-item"><a href="#" class="page-link">4</a></li>
                                <li class="page-item"><a href="#" class="page-link">5</a></li>
                                <li class="page-item"><a href="#" class="page-link">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
			</main>
			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="#" target="_blank"><strong>Miguel Roldan</strong></a> - <a class="text-muted" href="" target="_blank"><strong></strong></a>								&copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="" target="_blank">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="" target="_blank">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="" target="_blank">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="" target="_blank">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
    </div>
</div>
	<script src="../js/app.js"></script>
<script>
	function actual() {
		fecha = new Date(); 
		hora = fecha.getHours(); 
		minuto = fecha.getMinutes(); 
		if (hora < 10) { 
			hora = "0" + hora;
		}
		if (minuto < 10) { 
			minuto = "0" + minuto;
		}
		
		mireloj = hora + " : " + minuto;
		return mireloj;
	}
	function actualizar() { 
		mihora = actual(); 
		mireloj = document.getElementById("reloj"); 
		mireloj.innerHTML = mihora; 
	}
	setInterval(actualizar, 1000);
</script>

</body>

</html>