<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="ercss/inicioDocente.css">
    <script type="text/javascript" src="js/jquery.js"></script> 
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <title>El Redentor</title>
    
</head>
<body id="docentebody">

	<nav class="navbar navbar-default">
		<a class="navbar-brand">Bienvenido docente:</a>
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
			      			<center><h3>Mis Datos</h3></center>
			    </div>
			</div>
			<div class="col-md-4">
			    <div class="thumbnail">
			    	<a data-toggle="modal" href='#notas'>
			      		<img src="icon/notas.png" width="100px;"></a>
			      			<center><h3>Ingresar Notas</h3></center>
			    </div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
			    <div class="thumbnail">
			    	<a data-toggle="modal" href='#cursos'>
			      		<img src="icon/cursos.png" width="100px;"></a>
			      			<center><h3>Mis Cursos</h3></center>
			    </div>
			</div>
			<div class="col-md-4">
			    <div class="thumbnail">
			    	<a data-toggle="modal" href="#grados">
			      		<img src="icon/grados.png" width="100px;"></a>
			      			<center><h3>Mis Grados</h3></center>
			    </div>
			</div>
		</div>
	</div>

<!-- -------MODAL----------- -->

	<div class="modal fade" id="datos">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Mis Datos</h4>
				</div>
				<div class="modal-body">	
					<table class="table table-bordered table-hover" class="col-md-2">
						<thead>
							<tr>
								<th>Nombres y Apellidos:</th>
								<td>Bubbaloo Mendoza Barrios</td>
							</tr>
						</thead>
						<thead>
							<tr>
								<th>DPI:</th>
								<td>2335-346-344</td>
							</tr>
						</thead>
						<thead>
							<tr>
								<th>Direccion:</th>
								<td>4av. 10-35 zona 1, Quetzaltenango</td>
							</tr>
						</thead>
						<thead>
							<tr>
								<th>Puesto:</th>
								<td>Maestro de educación primaria</td>
							</tr>
						</thead>
					</table>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" href="" >Cambiar contraseña</button>
					<button type="button" class="btn btn-info" data-dismiss="modal"> Cerrar </button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
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
	<div class="modal fade" id="cursos">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Cursos que le corresponde:</h4>
				</div>
				<div class="modal-body">	
					<table class="table table-bordered table-hover" class="col-md-2">
						<thead>
							<tr>
								<th>Primaria</th>
								<th>Basico</th>
							</tr>
						</thead>
						<thead>
							<tr>
								<td>Matematica</td>
								<td>Computacion</td>
							</tr>
						</thead>
						<thead>
							<tr>
								<td>Matematica</td>
								<td>Computacion</td>
							</tr>
						</thead>
						<thead>
							<tr>
								<td>Matematica</td>
								<td>Computacion</td>
							</tr>
						</thead>
					</table>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-info" data-dismiss="modal"> Aceptar </button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<div class="modal fade" id="grados">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Grados que le corresponde:</h4>
				</div>
				<div class="modal-body">	
						<table class="table table-bordered table-hover" class="col-md-2">
						<thead>
							<tr>
								<th>Grado</th>
								<th>Sección</th>
							</tr>
						</thead>
						<thead>
							<tr>
								<td>Primero Primaria</td>
								<td>A</td>
							</tr>
						</thead>
						<thead>
							<tr>
								<td>Segundo Primaria</td>
								<td>A</td>
							</tr>
						</thead>
						<thead>
							<tr>
								<td>Tercero Basico</td>
								<td>B</td>
							</tr>
						</thead>
					</table>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-info" data-dismiss="modal"> Aceptar </button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->


 </body>
 </html>


