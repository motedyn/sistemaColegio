<!DOCTYPE html>
<html lang="es">
	<head>
	    <meta charset="utf-8">
	    <link rel="stylesheet" href="css/bootstrap.css">
	    <link rel="stylesheet" href="ercss/basico.css">
	    <script type="text/javascript" src="js/jquery.js"></script> 
	    <script type="text/javascript" src="js/bootstrap.js"></script>
	    <title>Registro de docentes / administrativo</title>
	    
	</head>
	<body id="inscribody">
		<nav class="navbar navbar-default">
			<a class="navbar-brand">Bienvenido:</a>
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="iniciodireccion.php">Regresar</a>
				</li>
				<li class="active">
					<a href="#">Ayuda</a>
				</li>
			</ul>
		</nav>


	<div class="container" id="panel1">
		<div class="col-md-10">
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading">
				<h4>Inscripcion personal docente / administrativo</h4>
			</div>
				<div class="panel-body">
					<h4>Datos Principales</h4><br>
						<div class="container" id="fila1">
							<div class="btn-group col-md-3">
								Primer apellido:<input name="nombres"class="form-control"  type="text" autofocus="" required=""  placeholder=""><br>
						    </div>
							<div class="btn-group col-md-3">
								Segundo apellido: <input name="apellidos"class="form-control"  type="text" autofocus="" required=""  placeholder=""><br>
						    </div>
						    <div class="btn-group col-md-3">
								Primer nombre:<input name="fechanac"class="form-control"  type="date" autofocus="" required=""  placeholder=""><br>
						    </div>
						</div>
					<br><div class="container">
							<div class="btn-group col-md-3">
								Segundo Nombre:<input name="nombres"class="form-control"  type="text" autofocus="" required=""  placeholder=""><br>
						    </div>
							<div class="btn-group col-md-3">
								Tercer nombre: <input name="apellidos"class="form-control"  type="text" autofocus="" required=""  placeholder=""><br>
						    </div>
						    <div class="btn-group col-md-3">
								Dirección (calle,avenida,zona):<input name="fechanac"class="form-control"  type="date" autofocus="" required=""  placeholder=""><br>
						    </div>
						</div>
						<br><div class="container">
							<div class="btn-group col-md-3">
								Teléfono/celular:<input name="nombres"class="form-control"  type="text" autofocus="" required=""  placeholder=""><br>
						    </div>
							<div class="btn-group col-md-3">
								Grado cursará: <input name="apellidos"class="form-control"  type="text" autofocus="" required=""  placeholder=""><br>
						    </div>
						    <div class="btn-group col-md-3">
								:<input name="fechanac"class="form-control"  type="date" autofocus="" required=""  placeholder=""><br>
						    </div>
						</div>
							<br><br><div class="btn-group col-md-12">
								<button type="button" class="btn btn-danger">Guardar</button>
								<a href="iniciodireccion.php"><button type="button" class="btn btn-success">Cancelar</button></a>
							</div>
				</div>
			</div>
		</div>
	</div>
	

	</body>
</html>	