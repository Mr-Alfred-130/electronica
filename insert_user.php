<?php
include("connection.php");
$con = connection();

$id_cliente = $_POST['id_cliente'];
$nombre     = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];


$sql = "INSERT INTO clientes (id_cliente, nombre, email, telefono, direccion) 
VALUES ('$id_cliente', '$nombre', '$email', '$telefono', '$direccion')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{
    echo "Error en SQL: " . mysqli_error($con);
}

?>