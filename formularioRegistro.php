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
        <!-- Navigation-->
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
        <!-- Masthead-->
        <header class="masthead">
        <main>
            <div class="container" >
                <form action="registrarProductos.php" method="POST">
                    <br>
                    <center>
                    <h1>REGISTRAR NUEVOS LIBROS</h1>
                    </center>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Nombre del Producto" name="nombre">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="editorial " name="editorial">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Autor" name="autor">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Formato" name="formato">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="N° de paginas" name="paginas">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Precio" name="precio" value="$">
                        </div>
                    </div>
                    <br>
                    <center>
                    <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="URL fotografia" name="foto">
                        </div>
                    </center>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <label class="font-weight-bold">Descripción:</label>
                            <textarea class="form-control" rows="4" name="descripcion"></textarea>
                        </div>
                        <div>
                            <br>
                            <br>
                            <br>
                            <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit" class="btn btn-success" name="botonEnvio">Registrar Producto</button>
                        </div>
                    </div>
                    <div class="row">
                    </div>
                    <br>
                    <br>
            
                    
                </form>
            </div>
        
        
        </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>