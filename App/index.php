<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="ercss/index.css">
    <script type="text/javascript" src="js/jquery.js"></script> 
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <title>El Redentor</title>
    
</head>
<body id="indexbody">

<!------------ICONOS-APP---------------->

    <div class="col-md-8 col-md-offset-4"  style="margin-top: 12%" align="center">
        <div class="row">
            <div class="col-md-3">
                <div class="thumbnail">
                    <a data-toggle="modal" href='#sesion'>
                        <img src="icon/direccion.png" width="100px;"></a>
                            <center><h3>Dirección</h3></center>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail">
                    <a data-toggle="modal" href='#sesiondoc'>
                        <img src="icon/docente.png" width="100px;"></a>
                            <center><h3>Docente</h3></center>
                </div>
            </div>
        </div>

    </div>


<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
	<a class="navbar-brand" href="#">Colegio Evangelico "El Redentor"</a>
		<ul class="nav navbar-nav">
		<li class="active">
			<a href="#">Ayuda</a>
		</li>
	</ul>
</nav>

<!---
    <div class="col-md-4 col-md-offset-4"  style="margin-top: 130px" align="center">
        <div id="bienvenido">
            <label for="">Bienvenido Docente</label>
        </div>
            <form action="sesion.php" method="post" class="form-signin" role="form"  autocomplete="off">
                    <div class="campos">        
                        <p><input name="usuario" class="form-control" type="text" autofocus="" required="" placeholder="Nombre de usuario"></input></p>
                        <p><input name="password" class="form-control" type="password" required="" placeholder="Contraseña"></input></p>
                    </div>
                    <div class="rContraseña "> 
                        <label class="checkbox">
                            <input type="checkbox" value="recordar"></input>
                            Recordar contraseña
                         </label>
                    </div>
                    <div class="iSesion">
                        <p><button class="btn  btn-danger btn-block" type="submit">Ingresar</button></p>
                    </div>
            </form>
    </div>
-->
<div class="modal fade in" role="dialog"id="sesion">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 align="center">Inicie sesión</h4>
            </div>
            <div class="modal-body"> 
                <form class="form-register" action="sesion.php" method="post" role="form" autocomplete="off">  
                    <h4>
                        <label>Usuario:</label>
                        <input name="usuario"class="form-control"  type="text" autofocus="" required=""  placeholder="Ingrese su usuario"><br>
                        <label>Contraseña:</label>
                        <input name="pass" class="form-control" type="password" autofocus="" required="" placeholder="Ingrese su contraseña">
                    </h4>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger"> Ingresar </button>
                        <button type="submit" class="btn btn-info" data-dismiss="modal"> Cancelar </button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
<div class="modal fade in" role="dialog"id="sesiondoc">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 align="center">Inicie sesión</h4>
            </div>
            <div class="modal-body"> 
                <form class="form-register" action="sesiondoc.php" method="post" role="form" autocomplete="off">  
                    <h4>
                        <label>Usuario:</label>
                        <input name="usuario"class="form-control"  type="text" autofocus="" required=""  placeholder="Ingrese su usuario"><br>
                        <label>Contraseña:</label>
                        <input name="pass" class="form-control" type="password" autofocus="" required="" placeholder="Ingrese su contraseña">
                    </h4>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger"> Ingresar </button>
                        <button type="submit" class="btn btn-info" data-dismiss="modal"> Cancelar </button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
 </body>
 </html>
