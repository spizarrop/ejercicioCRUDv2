<?php

$idProfesor = $_GET['idProfesor'];
$accion = $_GET['accion'];

if ($accion === "modificar") {
    header("Location: modificar.php?idProfesor=$idProfesor");
    exit;
} else if ($accion === "borrar") {
    header("Location: eliminar.php?idProfesor=$idProfesor");
    exit;
}

?>