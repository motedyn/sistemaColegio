<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="ercss/inscripcion.css">
    <script type="text/javascript" src="js/jquery.js"></script> 
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <title>El Rédentor</title>
    
</head>
<body id="direccionbody">

	<nav class="navbar navbar-default">
		<a class="navbar-brand">Bienvenido:</a>
		<ul class="nav navbar-nav">
			<li class="active">
				<a href="#">Ayuda</a>
			</li>
			<li class="active">
				<a href="index.php">Salir</a>
			</li>
		</ul>
	</nav>
<!------------ICONOS-APP---------------->

	<div class="col-md-9 col-md-offset-3"  style="margin-top: 8%" align="center">
		<div class="row">
			<div class="col-md-4">
			    <div class="thumbnail">
			    	<a data-toggle="modal" href='#datos'>
			      		<img src="icon/account.png" width="100px;"></a>
			      			<center><h3>Usuarios</h3></center>
			    </div>
			</div>
			<div class="col-md-4">
			    <div class="thumbnail">
			    	<a data-toggle="modal" href='#inscribir'>
			      		<img src="icon/inscribir.png" width="100px;"></a>
			      			<center><h3>Inscribir Alumno</h3></center>
			    </div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
			    <div class="thumbnail">
			    	<a data-toggle="modal" href='#notas'>
			      		<img src="icon/notas.png" width="100px;"></a>
			      			<center><h3>Notas Alumno</h3></center>
			    </div>
			</div>
			<div class="col-md-4">
			    <div class="thumbnail">
			    	<a data-toggle="modal" href="#grados">
			      		<img src="icon/profesor.png" width="100px;"></a>
			      			<center><h3>Inscribir Profesor</h3></center>
			    </div>
			</div>
		</div>
	</div>

	<!---------------notas ---- -->

		<div class="modal fade" id="notas">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Seleccione </h4>
				</div>
				<div class="modal-body">	
					<div class="container">	
						<div class="col-md-2">
							<h5>Nivel</h5>
							<select class="form-control" autocomplete="off">
							  	<option></option>
							  	<option></option>
							  	<option></option>
							</select>
					    </div>
					    <div class="col-md-2">
							<h5>Bimestre</h5>
							<select class="form-control" autocomplete="off">
							  	<option></option>
							  	<option></option>
							</select>
				   		 </div>
			    	</div><br>
			    	<div class="container">	
						<div class="col-md-2">
							<h5>Grado</h5>
							<select class="form-control" autocomplete="off">
							  	<option></option>
							  	<option></option>
							  	<option></option>
							</select>
					    </div>
					    <div class="col-md-2">
							<h5>Sección</h5>
							<select class="form-control" autocomplete="off">
							  	<option></option>
							  	<option></option>
							  	<option></option>
							</select>
				   		 </div>
			    	</div><br>
			    	<div class="container">	
						<div class="col-md-2">
							<h5>Curso</h5>
							<select class="form-control" autocomplete="off">
							  	<option></option>
							  	<option></option>
							  	<option></option>
							</select>
					    </div>
			    	</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" href="#"> Aceptar </button>
					<button type="button" class="btn btn-info" data-dismiss="modal"> Cancelar </button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->



	<!--------------inscripcion ---- -->

	<div class="modal fade" id="inscribir">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Seleccione </h4>
				</div>
				<div class="modal-body">	
					<div class="container"><br>
						<div class="col-md-2">
							<a href="basico.php">
								<button type="button" class="btn btn-info btn-lg" >Nivel Básico</button>
							</a>	
						</div>	
						<div class="col-md-2 col-offset-md-4">
							<a href="primaria.php">
								<button type="button" class="btn btn-success  btn-lg" >Primaria</button>
							</a>
						</div>	
						<div class="col-md-2">
							<a href="preprimaria.php">
								<button type="button" class="btn btn-danger btn-lg">Pre-primaria</button>
							</a>
						</div>
					</div><br>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-info" data-dismiss="modal"> Cancelar </button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->