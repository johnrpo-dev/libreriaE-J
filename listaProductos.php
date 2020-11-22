<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Libreria E&J</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    E&J
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="formularioRegistro.php">Registrar Productos</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="listaProductos.php">Lista de Productos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead">
            <center>
            <h1 >Productos en Inventario</h1>
            </center>
            <hr>
            <hr>
            <?php

            include ("BaseDatos.php");
            
            $transaccion = new BaseDatos();

            $consultaSQL = "SELECT * FROM productos WHERE 1";

            $productos = $transaccion->consultarDatos($consultaSQL);



            ?>

            <div class="container">
                
                <div class="row row-cols-1 row-cols-md-3">
                    <?php foreach($productos as $producto): ?>
                        <div class="col mb-4">
                            <div class="card">
                            <img src="<?php echo($producto["foto"])?> " class="card-img-top" alt="foto">
                            <div class="card-body">
                                <h3 class="card-title" style="color:#2f3136"><?php echo($producto["nombre"])?></h3>
                                <p class="card-text" style="color:#2f3136"><?php echo($producto["autor"]) ?></p>
                                <p class="card-text" style="color:#2f3136"><?php echo($producto["editorial"]) ?></p>
                                <p class="card-text" style="color:#FF0000"><?php echo($producto["precio"]) ?></p>
                                <p class="card-text" style="color:#2f3136"><?php echo($producto["descripcion"]) ?></p>
                                <a href="eliminarProductos.php?id=<?php echo($producto["idProducto"])?> " class="btn btn-outline-danger">Eliminar</a>
                                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#editar<?php echo($producto["idProducto"])?>">
                                Editar
                                </button>
                            </div>
                            </div>

                            <div class="modal fade" id="editar<?php echo($producto["idProducto"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel" style="color:#2f3136">Edición de Producto</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="editarProducto.php?id=<?php echo($producto["idProducto"]) ?>" method="POST">
                                    <div class="form-group">
                                        <label >Nombre:</label>
                                        <input type="text" class="form-control" name="nombreEditar" value="<?php echo($producto["nombre"])?>" >
                                    </div>
                                    <div class="form-group">
                                        <label >Editorial:</label>
                                        <input type="text" class="form-control" name="editorialEditar" value="<?php echo($producto["editorial"])?>" >
                                    </div>
                                    <div class="form-group">
                                        <label >Precio:</label>
                                        <input type="text" class="form-control" name="precioEditar" value="<?php echo($producto["precio"])?>" >
                                    </div>
                                    <div class="form-group">
                                        <label>Descripcion:</label>
                                        <textarea class="form-control"  rows="3" name="descripcionEditar"><?php echo($producto["descripcion"])?>"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-info" name="botonEditar">Editar</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    
                    <?php endforeach ?>

                </div>
            </div>
            <center>
            <a href="formularioRegistro.php" class="btn btn-success">Regresar</a>
            </center>
        </header>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    </body>
</html>