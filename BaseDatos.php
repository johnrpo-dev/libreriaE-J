<?php

class BaseDatos
{
    public $usuarioBD = "root";
    public $passwordBD = "";

    public function conectarBD()
    {
        
        try
        {
            $datosBD = "mysql:host=localhost;dbname=libreriae&j";
    
            $conexionBD = new PDO($datosBD,$this->usuarioBD,$this->passwordBD);
            return ($conexionBD);

        }
        catch(PDOException $error)
        {
            echo($error->getMessage());
        }

    }

    public function agregarDatos($consultaSQL)
    {
        $conexionBD = $this->conectarBD();

        $consultaAgregarDatos=$conexionBD->prepare($consultaSQL);
        $resultado=$consultaAgregarDatos->execute();

        if($resultado)
        {
            echo("Exito insertando los datos");
        }else
        {
            echo("error insertando los datos");
        }


    }

    public function consultarDatos($consultaSQL)
    {
        $conexionBD = $this->conectarBD();
        
        $consultaBuscarDatos=$conexionBD->prepare ($consultaSQL);

        $consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);

        $consultaBuscarDatos->execute();

        return($consultaBuscarDatos->fetchAll());
    }
}







?>