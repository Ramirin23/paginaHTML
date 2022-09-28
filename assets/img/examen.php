<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Ciudades";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Conexion Exitosa :D";
/*
// Create database
$sql = "CREATE DATABASE Ciudades";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}*/

// Sql para crear tabla

/*$sql = "CREATE TABLE cuidades (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre_cuidad VARCHAR(30) NOT NULL
    )";
    
    if (mysqli_query($conn, $sql)) {
      echo "Table ciudades Se acaba de crear";
    } else {
      echo "Error creating table: " . mysqli_error($conn);
    }*/

 /*
    $sql = "CREATE TABLE poblacion (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nombre_poblacion VARCHAR(30) NOT NULL
        )";
        
        if (mysqli_query($conn, $sql)) {
          echo "Table poblacion Se acaba de crear";
        } else {
          echo "Error creating table: " . mysqli_error($conn);
        }   
*/

/*$sql = "INSERT INTO cuidades (nombre_cuidad)
VALUES ('Samuel Manuel')";

if (mysqli_query($conn, $sql)) {
  echo "Registro creado";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/

/*$sql = "INSERT INTO poblacion (nombre_poblacion)
VALUES ('Mendiola Mendiola')";

if (mysqli_query($conn, $sql)) {
  echo "Registro creado para la tabla poblacion";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/


mysqli_close($conn);
/*
$sql = "SELECT * FROM cuidades";
$result = $conn->query($sql);
while($mostrar=mysqli_fetch_array($result))*/
?>

    <table border="4" >
		<tr>
			<td>id</td>
			<td>nombre</td>	
		</tr>
		<?php 
		$sql="SELECT * from cuidades";
		$result=mysqli_query($conn,$sql);
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


</body>
</html>