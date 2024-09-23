<?php

class InicioModel extends Conexion
{
    public static function selectall()
    {
        $conexion = self::sql();
        $stm = $conexion->query("SELECT * FROM `detalles_ruta` WHERE 1");
        return $stm;
    }

    //INSERT RUTA
    public static function insertRuta($creado,$nombre,$descripcion,$distacia,$dificultad,$duracion,$altitud,$epoca,$como_llegar,$recomendaciones,$observaciones,$imagen)
    {
       $conexion = self::sql();
       $stm = $conexion->query("INSERT INTO `detalles_ruta`(`creado_por`,`nombre`, `descripcion`, `distancia`, `dificultad`, `duracion`, `altitud`, `epoca`, `como_llegar`, `recomendaciones`, `observaciones`, `imagen`) 
       VALUES ('$creado','$nombre','$descripcion','$distacia','$dificultad','$duracion','$altitud','$epoca','$como_llegar','$recomendaciones','$observaciones','$imagen')");
       return $stm;
    }
}