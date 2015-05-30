<?php 
/*Desarrollado por Marcos Enrique Gonzalez
  Dni: 37674133
  Fecha: 20-02-2015
  Carrera: Analista en Sistemas de Computacion
*/
  $conexion= new mysqli("localhost","root","","instituto2");

 ?>
 <html>
 <head>
 	<meta charset="UTF-8">
 	<title>Examen de aplicaciones web 1</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<!--Implementamos bootstrap.css para garantizar la maxima compatibilidad entre navegadores y aplicar algunos diseños-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<script type="text/javascript" src="jquery-2.1.3.js"></script>
 </head>
 <body>

<header class="container-fluid">
	<h1>Examen de aplicaciones web 1 - Instituto</h1>
</header>
	<div class="container">
		<section class="main row">
			<article class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<br>
				<br>
				<h1 class="text-center">Seleccione las opciones y luego presione "Consultar"</h1>
			</article>
			<aside class="col-xs-8 col-sm-4 col-md-3 col-lg-3">
				<form method="POST" action="consultar.php" name=frm>
					<p>Seleccione una materia</p>
				<select class="combobox" name="materia">
					<?php 
					$consulta="SELECT *FROM materias";
					$registros=$conexion->query($consulta); //ejecutamos consulta SQL
					while($fila=$registros->fetch_array()){ //recorremos los registros obtenidos
						echo "<option value='".$fila['Id_Materia']."'>";
						echo $fila['Nombre_Materia'];
						echo "</option>";
					}
				 ?>
				</select>
				<br>
				<p>Seleccione condicion</p>
				<input type="radio" value="Regular" name="condicion">Regular &nbsp; &nbsp;<input type="radio" value="Libre" name="condicion">Libre
				<br>
				<br>
				<button class="btn-warning">Consultar</button>
				</form>
			</aside>
		</section>
	</div>
 <script type="text/javascript" src="jquery-2.1.3.js"></script>
 </body>
 </html>