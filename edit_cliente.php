<?php
include("connection.php");
$con = connection();

$id_cliente = $_POST['id_cliente'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];

$sql="UPDATE clientes SET id_cliente='$id_cliente', nombre='$nombre', email='$email', telefono='$telefono', direccion='$direccion' WHERE id_cliente=$id_cliente";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>