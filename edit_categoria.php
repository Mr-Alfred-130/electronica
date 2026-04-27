<?php
include("connection.php");
$con = connection();

$id_categoria = $_POST['id_categoria'];
$nombre_categoria = $_POST['nombre_categoria'];


$sql="UPDATE categorias SET id_categoria='$id_categoria', nombre_categoria='$nombre_categoria' WHERE id_categoria=$id_categoria";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>