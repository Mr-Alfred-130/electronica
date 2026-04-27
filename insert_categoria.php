<?php
include("connection.php");
$con = connection();

$id_categoria = $_POST['id_categoria'];
$nombre_categoria = $_POST['nombre_categoria'];


$sql = "INSERT INTO categorias (id_categoria, nombre_categoria) 
VALUES ('$id_categoria', '$nombre_categoria')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{
    echo "Error en SQL: " . mysqli_error($con);
}

?>