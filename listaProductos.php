<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Bodega</title>
  </head>
  <body>
    <center>
    <h1>Productos en inventario</h1>
    </center>
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
                    <img src="http://placeimg.com/640/480/nature" class="card-img-top" alt="imagen">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo($producto["nombre"])?></h3>
                        <p class="card-text"><?php echo($producto["descripcion"]) ?></p>
                    </div>
                    </div>
                </div>
            
            <?php endforeach ?>

        </div>
    </div>
    <center>
    <a href="formularioRegistro.php" class="btn btn-outline-dark">Regresar</a>
    </center>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>