<?php
include("connection.php");
$con = connection();

$id_producto = $_POST['id_producto'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];
$id_categoria = $_POST['id_categoria'];

$sql="UPDATE productos SET id_producto='$id_producto', nombre='$nombre', descripcion='$descripcion', precio='$precio', stock='$stock', id_categoria='$id_categoria' WHERE id_producto=$id_producto";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>