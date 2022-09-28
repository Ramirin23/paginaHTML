?php 
	$conexion=mysqli_connect('localhost','root','','examen');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
	<h1>PROGRAMACION WEB</h1>
</head>
<body>
<p style="background-color:Tomato;"></p>
<br>
<h1 style="border:2px solid Tomato;">Tabla ciudades</h1>
	<table border="4" >
		<tr>
			<td>id</td>
			<td>nombre</td>	
		</tr>
		<?php 
		$sql="SELECT * from cuidades";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombre_cuidad'] ?>
		</tr>
	<?php 
	}
	 ?>
	</table>
	<h1 style="border:2px solid Violet;">Personas Registradas</h1>
    <table border="2" >
		<tr>
			<td>id</td>
			<td>nombre_poblacion</td>	
		</tr>
		<?php 
		$sql="SELECT * from poblaciones";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombre_poblacion'] ?>
		</tr>
	<?php 
	}
	 ?>
	</table>
</body>
</html>