<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM clientes WHERE id_cliente='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar Clientes</title>
        <style>
            /* ======== ESTILO FORMAL PARA GESTIÓN DE USUARIOS ======== */
            /* Reset general */
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            }

            /* Fondo y estructura */
            body {
                background-color: #f5f7fa;
                color: #333;
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 40px;
            }

            /* Títulos */
            h1, h2 {
                color: #1a1a1a;
                margin-bottom: 20px;
                text-align: center;
                font-weight: 600;
            }

            /* Sección de formulario */
            .users-form {
                background-color: #ffffff;
                border: 1px solid #dcdcdc;
                border-radius: 8px;
                box-shadow: 0px 4px 12px rgba(0,0,0,0.08);
                padding: 30px;
                width: 400px;
                margin-bottom: 40px;
            }

            .users-form form {
                display: flex;
                flex-direction: column;
            }

            .users-form input[type="text"],
            .users-form input[type="email"],
            .users-form input[type="password"] {
                margin-bottom: 15px;
                padding: 10px 12px;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 14px;
                transition: border-color 0.3s ease;
            }

            .users-form input[type="text"]:focus,
            .users-form input[type="email"]:focus,
            .users-form input[type="password"]:focus {
                border-color: #0056a3;
                outline: none;
            }

            /* Botón principal */
            .users-form input[type="submit"] {
                background-color: #a30000;
                color: #fff;
                padding: 12px;
                border: none;
                border-radius: 5px;
                font-size: 15px;
                font-weight: 600;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .users-form input[type="submit"]:hover {
                background-color: #003d73;
            }

            /* ======== TABLA DE LISTADO ======== */
            .table-container {
                background-color: #ffffff;
                border: 1px solid #dcdcdc;
                border-radius: 8px;
                box-shadow: 0px 4px 12px rgba(0,0,0,0.08);
                padding: 20px;
                width: 90%;
                max-width: 1000px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                font-size: 14px;
            }

            thead {
                background-color: #0056a3;
                color: #ffffff;
            }

            th, td {
                padding: 12px 10px;
                text-align: left;
                border-bottom: 1px solid #e0e0e0;
            }

            tr:hover {
                background-color: #f2f6fc;
            }

            /* Enlaces de acción */
            a {
                text-decoration: none;
                font-weight: 600;
            }

            a.editar {
                color: #0056a3;
            }

            a.eliminar {
                color: #c0392b;
            }

            a.editar:hover {
                text-decoration: underline;
            }

            a.eliminar:hover {
                text-decoration: underline;
            }

        </style>
    </head>
    <body>
        <div class="users-form">
            <h2>Editar Perfil</h2>
            <form action="edit_cliente.php" method="POST">
            <input type="hidden" name="id_cliente" value="<?= $row['id_cliente']?>">
            <label>Nombre</label>
            <input type="text" name="nombre" value="<?= $row['nombre']?>">
            <label>Correo Electrónico</label>
            <input type="email" name="email" value="<?= $row['email']?>">
            <label>Teléfono</label>
            <input type="text" name="telefono" value="<?= $row['telefono']?>">
            <label>Dirección</label>
            <input type="text" name="direccion" value="<?= $row['direccion']?>">
            <input type="submit" value="Actualizar Datos">
        </form>
        </div>
    </body>
</html>