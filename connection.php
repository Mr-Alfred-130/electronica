<?php

function connection(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    //Prueva de conexión a la base de datos
    $bd = "electronica";

    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;

}


?>