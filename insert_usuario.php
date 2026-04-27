<?php
include("connection.php");
$con = connection();

$id_usuario = $_POST['id_usuario'];
$nombre     = $_POST['nombre'];
$contrasena = $_POST['contrasena'];
$rol = $_POST['rol'];

$sql = "INSERT INTO usuarios (id_usuario, nombre, contrasena, rol) VALUES ('$id_usuario', '$nombre', '$contrasena', '$rol')";
$query2 = mysqli_query($con, $sql);

if($query2){
    Header("Location: index.php");
}else{
    echo "Error en SQL: " . mysqli_error($con);
}

?>