<?php
require_once "conexionDB.php";
$conexion = new mysqli(SERVER,USER,PASS,DB);
$sql = "SELECT * FROM profesores ORDER BY nombre";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD de Profesores</title>
</head>
<body>
<h2>Gestión de Profesores</h2>

<?php
    while ($fila = $resultado->fetch_assoc()) {
        echo "<label>".$fila['nombre']."</label>";
        echo " <a href='procesar.php?idProfesor=".$fila['idProfesor']."&accion=modificar'>Modificar</a>";
        echo " <a href='procesar.php?idProfesor=".$fila['idProfesor']."&accion=borrar'>Eliminar</a>";
        echo "<br>";
    }
?>

</body>
</html>