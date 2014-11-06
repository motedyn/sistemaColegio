<?php
	session_start();
	
	if(!isset($_SESSION['valido']))
		$_SESSION['valido'] = 0;

	$user=$_POST['usuario'];
	$pass=$_POST['pass'];

	$conexion = mysql_connect('localhost','root','toor');

	if(mysql_select_db('sistemacolegio',$conexion))
		echo 'Conexion satisfactoria';
	else
		echo 'No se pudo conectar';

	$query = "SELECT * FROM cuenta WHERE usuario='$user' AND contrasenia='$pass' ";

	$record = mysql_query($query);

	if(mysql_num_rows($record)>0)
	{
		$_SESSION['valido']=1;
		header('location: iniciodireccion.php');
	}
	else
	{
		$_SESSION['valido']=0;
		header('location: index.php');
	}

?>