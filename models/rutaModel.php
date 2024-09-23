<?php

class rutaModel extends Conexion
{   
    //SELECT ALL RUTAS
    public static function selectAllRutasId($id)
    {
       $conexion = self::sql();
       $stm = $conexion->query("SELECT * FROM `detalles_ruta` WHERE `id` = $id")->fetch_assoc();
       return $stm;
    }

    //ELIMINAR RUTA 
    public static function DelectRuta($id)
    {
        $conexion = self::sql();
        $stm = $conexion->query("DELETE FROM `detalles_ruta` WHERE `id` = $id");
        return $stm;
    }

    //EDITAR RUTA
    public static function EditarRuta($id,$creado_por,$nombre,$descripcion,$distancia,$dificultad,$duracion,$altitud,$epoca,$como_llegar,$recomendaciones,$observaciones,$imagen)
    {
        $conexion = self::sql();
        $stm = $conexion->query("UPDATE `detalles_ruta` SET `creado_por`='$creado_por',`nombre`='$nombre',`descripcion`='$descripcion',`distancia`='$distancia',`dificultad`='$dificultad',`duracion`='$duracion',`altitud`='$altitud',`epoca`='$epoca',`como_llegar`='$como_llegar',`recomendaciones`='$recomendaciones',`observaciones`='$observaciones',`imagen`='$imagen' WHERE `id` = $id");
        return $stm;
    }
    
}