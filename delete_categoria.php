<?php

include("connection.php");
$con = connection();

$id=$_GET["id"];

$sql="DELETE FROM categorias WHERE id_categoria='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>