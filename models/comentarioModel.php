<?php 

class ComentariosModel extends Conexion
{    
    //SELECT COMENTARIOS POR ID DE LA RUTA
    #Cuando vamos a seleccionar solo un comentario lo toma como una fila tipo array asociativo
    # en este caso para que se pueda y no nos de un error lo ideal es usar fetch_all solo cuando es un comentario
    # en el caso de que tengamos muchos comentarios asociados a un mismo id debemos usar fetch_all(MYSQLI_ASSOC)
     public static function selectAllComentarios($ruta_id)
     {
      $conexion = self::sql();
      $stm = $conexion->query("SELECT * FROM `comentarios` WHERE `ruta_id` = $ruta_id")->fetch_all(MYSQLI_ASSOC);
      return $stm;
     }
     //INSERT COMENTARIO
     public static function insertComentario($ruta_id,$nombre,$comentario,$hora)
     {
        $conexion = self::sql();
        $stm = $conexion->query("INSERT INTO `comentarios`(`ruta_id`,`nombre`, `comentario`,`hora`) VALUES ('$ruta_id','$nombre','$comentario','$hora')");
        return $stm;
     }
}