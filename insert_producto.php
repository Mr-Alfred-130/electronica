<?php
include("connection.php");
$con = connection();

$id_producto = $_POST['id_producto'];
$nombre     = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];
$id_categoria = $_POST['id_categoria'];


$sql = "INSERT INTO productos (id_producto, nombre, descripcion, precio, stock, id_categoria) 
VALUES ('$id_producto', '$nombre', '$descripcion', '$precio', '$stock', '$id_categoria')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{
    echo "Error en SQL: " . mysqli_error($con);
}

?>