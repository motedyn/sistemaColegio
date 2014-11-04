<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="ercss/notas.css">
    <script type="text/javascript" src="js/jquery.js"></script> 
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <title>El Redentor</title>
    
</head>
<body id="body1">

	<nav class="navbar navbar-inverse">
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

<!------------barra_---------------->
<div class="container">
	<div class="row">
		<table  class="table table-bordered" clas="active" >
			<thead id="barranotas">
				<tr>
					<th>Nivel:</th>
					<td>Básico</td>
					<th>Grado:</th>
					<td>Primero</td>
					<th>Sección:</th>
					<td>A</td><br>
					<th>Bimestre:</th>
					<td>1</td>
				</tr>
			</thead>
		</table>
	</div>
</div>

<!------Tabla_alumnos------>

<div class="col-md-10 col-md-offset-1">
<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Codigo</th>
			<th>Nombre del Alumno</th>
			<th>Dec</th>
			<th>Procedimental</th>
			<th>Actitudinal</th>
			<th>Total</th>
			<th>Acumulativo</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>0001</td>
			<td>Bubalu Mendoza</td>
			<td>15</td>
			<td>10</td>
			<td>10</td>
			<td>35</td>
			<td>35</td>
		</tr>		<button type="submit" class="btn btn-primary">Agregar</button>
	</tbody>
	<tbody>
		<tr>
			<td>0001</td>
			<td>Bubalu Mendoza</td>
			<td>15</td>
			<td>10</td>
			<td>10</td>
			<td>35</td>
			<td>35</td>
		</tr>		<button type="submit" class="btn btn-primary">Agregar</button>
	</tbody>
	<tbody>
		<tr>
			<td>0001</td>
			<td>Bubalu Mendoza</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</tbody>
</table>
</div>


<div class="container">
	<div class="row">
		<table  class="table table-bordered" clas="active" >
			<thead id="barranotas">
				<tr>
					<th>Codigo</th>
					<th>Nombre del Alumno</th>
					<th>Declarativa</th>
					<th>Procedimental</th>
					<th>Actitudinal</th>
					<th>Total</th>
					<th>Acumulativo</th>
				</tr>
				<tr>
					<th>Codigo</th>
					<th>Nombre del Alumno</th>
				</tr>
			</thead>
		</table>
	</div>
	<form action="" method="POST" class="form-inline" role="form">
		<div class="form-group">
			<label class="sr-only" for="">label</label>
			<input type="text" class="form-control" id="" placeholder="Input field">
			<input type="text" class="form-control" id="" placeholder="Input field">
			<input type="text" class="form-control" id="" placeholder="Input field">
			<input type="text" class="form-control" id="" placeholder="Input field">
			<input type="text" class="form-control" id="" placeholder="Input field">
			<input type="text" class="form-control" id="" placeholder="Input field" disabled="active">
		</div>
		<button type="submit" class="btn btn-primary">Agregar</button>
	</form>
</div>


</body>
</html>