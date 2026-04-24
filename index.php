<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM clientes";
$query = mysqli_query($con, $sql);

if(!$query){
    die("Error en la consulta: " . mysqli_error($con));
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Creative - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ"target="_blank">HOLA :-)</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" link href="https://www.youtube.com/shorts/TPgfu_Hj0Cc"target="_blank">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Campos</a></li>
                        <li class="nav-item"><a class="nav-link" link href="https://www.youtube.com/shorts/mK5O2aiGfjY" target="_blank">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" link href="https://www.youtube.com/shorts/aOFPsqvKHPQ"target="_blank">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">ELECTRONICA
                        </h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Si cliqueas hola te ganas un premio ;-) </p>
                        <a class="btn btn-primary btn-xl" link href="https://www.youtube.com/watch?v=yT16_7Jizn8" target="_blank">Iniciar</a>
                    </div>
                </div>
            </div>
            <style>
                /* Paleta de Colores Formal */
                :root {
                    --primary: #2c3e50;      /* Azul medianoche (Seriedad) */
                    --accent: #3498db;       /* Azul brillante (Acción) */
                    --success: #27ae60;      /* Verde (Confirmación) */
                    --danger: #c0392b;       /* Rojo (Advertencia) */
                    --bg-body: #f4f7f6;      /* Gris muy claro (Fondo) */
                    --text-main: #333333;    /* Gris oscuro (Lectura) */
                    --border: #dcdde1;       /* Gris suave (Separadores) */
                }

                /* Configuración General */
                body {
                    background-color: var(--bg-body);
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                    color: var(--text-main);
                    line-height: 1.6;
                }

                .page-section {
                    padding: 40px 20px;
                    max-width: 1100px;
                    margin: 0 auto;
                }

                /* Contenedores Estilo Tarjeta (Cards) */
                .users-form, .users-table {
                    background: #ffffff;
                    padding: 30px;
                    border-radius: 8px;
                    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
                    margin-bottom: 40px;
                    border: 1px solid var(--border);
                }

                /* Títulos */
                h1, h2 {
                    color: var(--primary);
                    margin-top: 0;
                    font-weight: 600;
                    border-bottom: 2px solid var(--accent);
                    padding-bottom: 10px;
                    margin-bottom: 25px;
                    font-size: 1.5rem;
                }

                /* Formulario en Cuadrícula (Layout) */
                form {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                    gap: 20px;
                }

                .form-group {
                    display: flex;
                    flex-direction: column;
                }

                /* En el formulario, el botón de envío debe ocupar toda la fila */
                .form-group:last-child {
                    grid-column: 1 / -1;
                    margin-top: 10px;
                }

                /* Etiquetas e Inputs */
                label {
                    font-size: 0.85rem;
                    font-weight: 700;
                    margin-bottom: 8px;
                    color: var(--primary);
                    text-transform: uppercase;
                    letter-spacing: 0.5px;
                }

                input[type="text"],
                input[type="password"],
                input[type="email"],
                input[type="number"] {
                    padding: 12px;
                    border: 1px solid var(--border);
                    border-radius: 4px;
                    font-size: 1rem;
                    transition: all 0.3s ease;
                }

                input:focus {
                    outline: none;
                    border-color: var(--accent);
                    box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
                }

                /* Botones */
                .btn-submit {
                    background-color: var(--primary);
                    color: white;
                    padding: 14px;
                    border: none;
                    border-radius: 4px;
                    font-size: 1rem;
                    font-weight: 600;
                    cursor: pointer;
                    transition: background 0.3s;
                }

                .btn-submit:hover {
                    background-color: #1a252f;
                }

                /* Tabla Formal */
                .users-table {
                    overflow-x: auto; /* Responsivo */
                }

                table {
                    width: 100%;
                    border-collapse: collapse;
                    margin-top: 10px;
                }

                thead th {
                    background-color: #f8f9fa;
                    color: var(--primary);
                    text-align: left;
                    padding: 15px;
                    font-size: 0.9rem;
                    border-bottom: 2px solid var(--border);
                }

                tbody td {
                    padding: 12px 15px;
                    border-bottom: 1px solid #f1f2f6;
                    font-size: 0.95rem;
                }

                tbody tr:hover {
                    background-color: #fcfcfc;
                }

                /* Botones de Acción en la Tabla */
                .btn-edit, .btn-delete {
                    text-decoration: none;
                    padding: 6px 12px;
                    border-radius: 4px;
                    font-size: 0.85rem;
                    font-weight: 600;
                    display: inline-block;
                    margin-right: 5px;
                }

                .btn-edit {
                    color: var(--accent);
                    border: 1px solid var(--accent);
                }

                .btn-edit:hover {
                    background-color: var(--accent);
                    color: white;
                }

                .btn-delete {
                    color: var(--danger);
                    border: 1px solid var(--danger);
                }

                .btn-delete:hover {
                    background-color: var(--danger);
                    color: white;
                }
            </style>
        </header>
        <!-- About-->
        
        <!-- Services-->
        <section class="page-section" id="services">
            
            <div class="users-form">
        <h1>Registro de Clientes</h1>
                <form action="insert_user.php" method="POST">
                    <input type="text" name="nombre" placeholder="Nombre Completo">
                    <input type="email" name="email" placeholder="Correo Electronico">
                    <input type="text" name="telefono" placeholder="Telefono">
                    <input type="text" name="direccion" placeholder="Dirección">
                    <input type="submit" value="Registrar">
                </form>
    </div>

    <div class="users-table">
        <h2>Listado de Clientes</h2>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>email</th>
                    <th>telefono</th>
                    <th>direccion</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id_cliente'] ?></th>
                        <th><?= $row['nombre'] ?></th>
                        <th><?= $row['email'] ?></th>
                        <th><?= $row['telefono'] ?></th>
                        <th><?= $row['direccion'] ?></th>
                        <th><a href="update.php?id=<?= $row['id_cliente'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?id=<?= $row['id_cliente'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
        

<script>
function mostrarVideo() {
    document.getElementById("videoContainer").style.display = "block";
}
</script>
        <section class="page-section bg-light" id="portfolio">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">Catálogo de Laptops</h2>
        <hr class="divider" />
        <div class="row gx-4 gy-4">
            
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="p-3">
                        <img class="card-img-top img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="Laptop HP" />
                    </div>
                    <div class="card-body p-3">
                       
                        <h6 class="card-title mb-2" style="font-size: 0.9rem;">Laptop HP 15-fc0077la AMD Ryzen 7 16GB RAM 512GB SSD</h6>
                        <div class="d-flex align-items-center">
                            <span class="h5 fw-bold mb-0">$ 12,347</span>
                            <span class="badge bg-success ms-2">9% OFF</span>
                        </div>
                        <p class="text-success small mb-0">12 meses sin intereses de $ 1,028</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="p-3">
                        <img class="card-img-top img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="Laptop HP" />
                    </div>
                    <div class="card-body p-3">
                       
                        <h6 class="card-title mb-2" style="font-size: 0.9rem;">Laptop HP 15-fc0077la AMD Ryzen 7 16GB RAM 512GB SSD</h6>
                        <div class="d-flex align-items-center">
                            <span class="h5 fw-bold mb-0">$ 12,347</span>
                            <span class="badge bg-success ms-2">9% OFF</span>
                        </div>
                        <p class="text-success small mb-0">12 meses sin intereses de $ 1,028</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="p-3">
                        <img class="card-img-top img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="Laptop HP" />
                    </div>
                    <div class="card-body p-3">
                       
                        <h6 class="card-title mb-2" style="font-size: 0.9rem;">Laptop HP 15-fc0077la AMD Ryzen 7 16GB RAM 512GB SSD</h6>
                        <div class="d-flex align-items-center">
                            <span class="h5 fw-bold mb-0">$ 12,347</span>
                            <span class="badge bg-success ms-2">9% OFF</span>
                        </div>
                        <p class="text-success small mb-0">12 meses sin intereses de $ 1,028</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="p-3">
                        <img class="card-img-top img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="Laptop HP" />
                    </div>
                    <div class="card-body p-3">
                       
                        <h6 class="card-title mb-2" style="font-size: 0.9rem;">Laptop HP 15-fc0077la AMD Ryzen 7 16GB RAM 512GB SSD</h6>
                        <div class="d-flex align-items-center">
                            <span class="h5 fw-bold mb-0">$ 12,347</span>
                            <span class="badge bg-success ms-2">9% OFF</span>
                        </div>
                        <p class="text-success small mb-0">12 meses sin intereses de $ 1,028</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="p-3">
                        <img class="card-img-top img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="Laptop HP" />
                    </div>
                    <div class="card-body p-3">
                       
                        <h6 class="card-title mb-2" style="font-size: 0.9rem;">Laptop HP 15-fc0077la AMD Ryzen 7 16GB RAM 512GB SSD</h6>
                        <div class="d-flex align-items-center">
                            <span class="h5 fw-bold mb-0">$ 12,347</span>
                            <span class="badge bg-success ms-2">9% OFF</span>
                        </div>
                        <p class="text-success small mb-0">12 meses sin intereses de $ 1,028</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="p-3">
                        <img class="card-img-top img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="Laptop HP" />
                    </div>
                    <div class="card-body p-3">
                       
                        <h6 class="card-title mb-2" style="font-size: 0.9rem;">Laptop HP 15-fc0077la AMD Ryzen 7 16GB RAM 512GB SSD</h6>
                        <div class="d-flex align-items-center">
                            <span class="h5 fw-bold mb-0">$ 12,347</span>
                            <span class="badge bg-success ms-2">9% OFF</span>
                        </div>
                        <p class="text-success small mb-0">12 meses sin intereses de $ 1,028</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="p-3">
                        <img class="card-img-top img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="Laptop HP" />
                    </div>
                    <div class="card-body p-3">
                       
                        <h6 class="card-title mb-2" style="font-size: 0.9rem;">Laptop HP 15-fc0077la AMD Ryzen 7 16GB RAM 512GB SSD</h6>
                        <div class="d-flex align-items-center">
                            <span class="h5 fw-bold mb-0">$ 12,347</span>
                            <span class="badge bg-success ms-2">9% OFF</span>
                        </div>
                        <p class="text-success small mb-0">12 meses sin intereses de $ 1,028</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="p-3">
                        <img class="card-img-top img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="Laptop HP" />
                    </div>
                    <div class="card-body p-3">
                       
                        <h6 class="card-title mb-2" style="font-size: 0.9rem;">Laptop HP 15-fc0077la AMD Ryzen 7 16GB RAM 512GB SSD</h6>
                        <div class="d-flex align-items-center">
                            <span class="h5 fw-bold mb-0">$ 12,347</span>
                            <span class="badge bg-success ms-2">9% OFF</span>
                        </div>
                        <p class="text-success small mb-0">12 meses sin intereses de $ 1,028</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="p-3">
                        <img class="card-img-top img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="Laptop HP" />
                    </div>
                    <div class="card-body p-3">
                       
                        <h6 class="card-title mb-2" style="font-size: 0.9rem;">Laptop HP 15-fc0077la AMD Ryzen 7 16GB RAM 512GB SSD</h6>
                        <div class="d-flex align-items-center">
                            <span class="h5 fw-bold mb-0">$ 12,347</span>
                            <span class="badge bg-success ms-2">9% OFF</span>
                        </div>
                        <p class="text-success small mb-0">12 meses sin intereses de $ 1,028</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="p-3">
                        <img class="card-img-top img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="Laptop HP" />
                    </div>
                    <div class="card-body p-3">
                       
                        <h6 class="card-title mb-2" style="font-size: 0.9rem;">Laptop HP 15-fc0077la AMD Ryzen 7 16GB RAM 512GB SSD</h6>
                        <div class="d-flex align-items-center">
                            <span class="h5 fw-bold mb-0">$ 12,347</span>
                            <span class="badge bg-success ms-2">9% OFF</span>
                        </div>
                        <p class="text-success small mb-0">12 meses sin intereses de $ 1,028</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="p-3">
                        <img class="card-img-top img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="Laptop HP" />
                    </div>
                    <div class="card-body p-3">
                       
                        <h6 class="card-title mb-2" style="font-size: 0.9rem;">Laptop HP 15-fc0077la AMD Ryzen 7 16GB RAM 512GB SSD</h6>
                        <div class="d-flex align-items-center">
                            <span class="h5 fw-bold mb-0">$ 12,347</span>
                            <span class="badge bg-success ms-2">9% OFF</span>
                        </div>
                        <p class="text-success small mb-0">12 meses sin intereses de $ 1,028</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="p-3">
                        <img class="card-img-top img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="Laptop HP" />
                    </div>
                    <div class="card-body p-3">
                       
                        <h6 class="card-title mb-2" style="font-size: 0.9rem;">Laptop HP 15-fc0077la AMD Ryzen 7 16GB RAM 512GB SSD</h6>
                        <div class="d-flex align-items-center">
                            <span class="h5 fw-bold mb-0">$ 12,347</span>
                            <span class="badge bg-success ms-2">9% OFF</span>
                        </div>
                        <p class="text-success small mb-0">12 meses sin intereses de $ 1,028</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="p-3">
                        <img class="card-img-top img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="Laptop HP" />
                    </div>
                    <div class="card-body p-3">
                       
                        <h6 class="card-title mb-2" style="font-size: 0.9rem;">Laptop HP 15-fc0077la AMD Ryzen 7 16GB RAM 512GB SSD</h6>
                        <div class="d-flex align-items-center">
                            <span class="h5 fw-bold mb-0">$ 12,347</span>
                            <span class="badge bg-success ms-2">9% OFF</span>
                        </div>
                        <p class="text-success small mb-0">12 meses sin intereses de $ 1,028</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="p-3">
                        <img class="card-img-top img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="Laptop HP" />
                    </div>
                    <div class="card-body p-3">
                       
                        <h6 class="card-title mb-2" style="font-size: 0.9rem;">Laptop HP 15-fc0077la AMD Ryzen 7 16GB RAM 512GB SSD</h6>
                        <div class="d-flex align-items-center">
                            <span class="h5 fw-bold mb-0">$ 12,347</span>
                            <span class="badge bg-success ms-2">9% OFF</span>
                        </div>
                        <p class="text-success small mb-0">12 meses sin intereses de $ 1,028</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="p-3">
                        <img class="card-img-top img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="Laptop HP" />
                    </div>
                    <div class="card-body p-3">
                       
                        <h6 class="card-title mb-2" style="font-size: 0.9rem;">Laptop HP 15-fc0077la AMD Ryzen 7 16GB RAM 512GB SSD</h6>
                        <div class="d-flex align-items-center">
                            <span class="h5 fw-bold mb-0">$ 12,347</span>
                            <span class="badge bg-success ms-2">9% OFF</span>
                        </div>
                        <p class="text-success small mb-0">12 meses sin intereses de $ 1,028</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="p-3">
                        <img class="card-img-top img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="Laptop HP" />
                    </div>
                    <div class="card-body p-3">
                       
                        <h6 class="card-title mb-2" style="font-size: 0.9rem;">Laptop HP 15-fc0077la AMD Ryzen 7 16GB RAM 512GB SSD</h6>
                        <div class="d-flex align-items-center">
                            <span class="h5 fw-bold mb-0">$ 12,347</span>
                            <span class="badge bg-success ms-2">9% OFF</span>
                        </div>
                        <p class="text-success small mb-0">12 meses sin intereses de $ 1,028</p>
                        
                    </div>
                </div>
            </div>
            

            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <span class="badge bg-primary position-absolute m-2" style="z-index: 1;">OFERTA IMPERDIBLE</span>
                    <div class="p-3">
                        <img class="card-img-top img-fluid" src="assets/img/portfolio/thumbnails/2.jpg" alt="Laptop Acer" />
                    </div>
                    <div class="card-body p-3">
                        
                        <h6 class="card-title mb-2" style="font-size: 0.9rem;">Laptop Acer Nitro V15 Core i5- 210h 16 Ram 512 Ssd Nvidia RTX 4050</h6>
                        <div class="d-flex align-items-center">
                            <span class="h5 fw-bold mb-0">$ 15,079</span>
                            <span class="badge bg-success ms-2">24% OFF</span>
                        </div>
                        <p class="text-muted small mb-0">24 meses de $ 911.21</p>
                        <p class="text-success small mt-1">Envío gratis</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="p-3">
                        <img class="card-img-top img-fluid" src="assets/img/portfolio/thumbnails/3.jpg" alt="Asus TUF" />
                    </div>
                    <div class="card-body p-3">
                        
                        <h6 class="card-title mb-2" style="font-size: 0.9rem;">Asus Tuf Gaming Ryzen 7/geforce Rtxtm 4050/16gb/ 512ssd</h6>
                        <div class="d-flex align-items-center">
                            <span class="h5 fw-bold mb-0">$ 27,999</span>
                        </div>
                        <p class="text-muted small mb-0">24 meses de $ 1,691</p>
                        <p class="text-success small mt-1">Envío gratis</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="p-3">
                        <img class="card-img-top img-fluid" src="assets/img/portfolio/thumbnails/4.jpg" alt="Asus Pro" />
                    </div>
                    <div class="card-body p-3">
                        <h6 class="card-title mb-2" style="font-size: 0.9rem;">Laptop Asus Tuf A16 Rtx 5070 Ryzen 9 270 32 Gb Ram 1tb</h6>
                        <div class="d-flex align-items-center">
                            <span class="h5 fw-bold mb-0">$ 46,500</span>
                        </div>
                        <p class="text-muted small mb-0">24 meses de $ 2,809</p>
                        <p class="text-success small mt-1">Envío gratis</p>
                        <p class="text-secondary x-small mt-1" style="font-size: 0.75rem;">Reacondicionado</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2023 - Company Name</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
