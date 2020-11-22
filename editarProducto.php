<?php

    include ("BaseDatos.php");



    if (isset($_POST["botonEditar"]))
    {
        $nombre = $_POST["nombreEditar"];
        $editorial = $_POST["editorialEditar"];
        $precio = $_POST["precioEditar"];
        $descripcion = $_POST["descripcionEditar"];

        $id = $_GET["id"];

        $transaccion = new BaseDatos();

        $consultaSQL = "UPDATE productos SET nombre='$nombre',editorial='$editorial',precio='$precio',descripcion='$descripcion' WHERE idProducto='$id'";


        $transaccion->editarDatos($consultaSQL);

        header("location:listaproductos.php");





        
    }







?>