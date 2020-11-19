<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand logo" href="#"><img src="img/libros.png" alt="" /></a>

            <a class="navbar-brand" href="">Libreria E&J</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <!-- <li class="nav-item active">
                        <a class="nav-link" href="formularioRegistro.php">Home <span class="sr-only">(current)</span></a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="listaProductos.php">Productos</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container" >
            <form action="registrarProductos.php" method="POST">
                <br>
                <center>
                <h1>REGISTRAR NUEVOS LIBROS</h1>
                </center>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="Nombre del Producto" name="nombre">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="editorial " name="editorial">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="Autor" name="autor">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="Formato" name="formato">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="URL fotografia" name="foto">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="Precio" name="precio">
                    </div>
                </div>
                
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
                    <button type="submit" class="btn btn-outline-dark" name="botonEnvio">Registrar Producto</button>
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