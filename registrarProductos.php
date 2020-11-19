<?php

    include ("BaseDatos.php");


    if (isset($_POST["botonEnvio"]))
    {
        $nombre = $_POST["nombre"];
        $editorial = $_POST["editorial"];
        $autor = $_POST["autor"];
        $formato = $_POST["formato"];
        $foto = $_POST["foto"];
        $precio = $_POST["precio"];
        $descripcion = $_POST["descripcion"];


        $transaccion = new BaseDatos();

        $consultaSQL = "INSERT INTO productos(nombre, editorial,autor,formato,foto,precio,descripcion) VALUES ('$nombre','$editorial','$autor','$formato','$foto','$precio','$descripcion')";

        $transaccion->agregarDatos($consultaSQL);

        
    }







?>