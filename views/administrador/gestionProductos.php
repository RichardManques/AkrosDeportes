<?php
use models\ProductoModel as ProductoModel;

require_once("../../models/ProductoModel.php");

$model = new ProductoModel();
$lista = $model->obtenerProductos();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../../css/administrador/gestionProductos.css">
    <script src="https://kit.fontawesome.com/9470b4a918.js" crossorigin="anonymous"></script>
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Gestión Productos</title> 
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Akros Deportes</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>
    <h2>prueba github</h2>
        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="../administrador/gestionPedidos.php">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Gestor pedidos</span>
                        </a>
                        
                    </li>
                    <li class="nav-link">
                        <a href="../administrador/gestionProductos.php">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Gestor productos</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="../administrador/cerrarSesion.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Cerrar sesión</span>
                    </a>
                </li>        
            </div>
        </div>
    </nav>
<section class="home">
        <div class="text">Gestión productos</div>
            <button type="button" class="btn btn-primary boton-agregar" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa-solid fa-plus"></i>
            </button>
    <form action="../../controllers/administrador/ControlCrearProducto.php" method="POST">
        <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Talla</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Precio</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Stock</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Color</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Descripcion</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <input type="file" class="form-control" id="inputGroupFile02">
                <label class="input-group-text" for="inputGroupFile02">Foto</label>
            </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Crear producto</button>
            </div>
            </div>
        </div>
    </div>
    </form>
    <form action="../../controllers/administrador/ControlTablaProducto.php" method="POST">
        <table class="table tabla">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Talla</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
                <th scope="col">Descripción</th>
                <th scope="col">Foto</th>
                <th scope="col">Modificar</th>
            </tr>
            <?php foreach ($lista as $prod) { ?>
            <tr>
                <td><?=$prod["nombre"]?></td>
                <td><?=$prod["talla"]?></td>
                <td><?=$prod["precio"]?></td>
                <td><?=$prod["stock"]?></td>
                <td><?=$prod["descripcion"]?></td>
                <td><?=$prod["foto"]?></td>
                <td>
                    <button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                </td>
            </tr>
                    <?php }?>
        </table>
    </form>
</section>
<script>
        const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector(".toggle"),
        searchBtn = body.querySelector(".search-box");

toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})
    </script>
<script src="../../js/administrador/gestionProducto.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
