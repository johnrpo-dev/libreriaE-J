<?php

    include ("BaseDatos.php");


    if (isset($_POST["botonEnvio"]))
    {
        $nombre = $_POST["nombre"];
        $editorial = $_POST["editorial"];
        $autor = $_POST["autor"];
        $formato = $_POST["formato"];
        $paginas = $_POST["paginas"];
        $precio = $_POST["precio"];
        $descripcion = $_POST["descripcion"];
        $foto = $_POST["foto"];


        $transaccion = new BaseDatos();

        $consultaSQL = "INSERT INTO productos(nombre, editorial,autor,formato,paginas,precio,descripcion,foto) VALUES ('$nombre','$editorial','$autor','$formato','$paginas','$precio','$descripcion','$foto')";

        $transaccion->agregarDatos($consultaSQL);

        header("location:listaProductos.php");


        
    }







?>