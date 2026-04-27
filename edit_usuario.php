<?php
include("connection.php");
$con = connection();

$id_usuario = $_POST['id_usuario'];
$nombre = $_POST['nombre'];
$contrasena = $_POST['contrasena'];
$rol = $_POST['rol'];

$sql="UPDATE usuarios SET id_usuario='$id_usuario', nombre='$nombre', contrasena='$contrasena', rol='$rol' WHERE id_usuario=$id_usuario";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>