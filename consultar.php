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
		<!--Implementamos bootstrap.css para garantizar la maxima compatibilidad entre navegadores  y aplicar algunos diseños-->
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
				<?php 
				$materia=$_POST['materia'];
				$condicion=$_POST['condicion'];

				$consulta="SELECT a.Nombre_Alumno as Alumno , m.Nombre_Materia as Materia, i.Fecha, i.Hora, i.Condicion FROM inscripciones i 
						   INNER JOIN alumnos a on i.Id_Alumno=a.Id_Alumno
						   INNER JOIN materias m on i.Id_Materia=m.Id_Materia Where Condicion='$condicion' and i.Id_Materia='$materia'";
				$registros=$conexion->query($consulta);
				while($fila=$registros->fetch_array()){ //recorremos los registros obtenidos
							echo "<table class=\"table table-striped\"> \n";
							echo "<tr><td>Alumno</td><td>Materia</td><td>Fecha</td><td>Hora</td><td>Condicion</td></tr>";
						do{
							echo "<tr><td>".$fila['Alumno']."</td><td>".$fila['Materia']."</td><td>".$fila['Fecha']."</td><td>".$fila['Hora']."</td><td>".$fila['Condicion']."</td></tr>";
						}while($fila=$registros->fetch_array());
							echo "</table> \n";
					}
				 ?>
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