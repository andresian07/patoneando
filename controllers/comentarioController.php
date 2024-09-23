<?php

class ComentarioController
{   

    public static function selectAllComentarios($ruta_id)
    {
       $respuesta = ComentariosModel::selectAllComentarios($ruta_id);
       return $respuesta;
    }

    //INSERT COMENTARIOS
    public static function insertComentario($ruta_id,$nombre,$comentario,$hora)
    {
        $respuesta = ComentariosModel::insertComentario($ruta_id,$nombre,$comentario,$hora);
        if ($respuesta == true) {
            echo "<script>
                    Swal.fire({
                    title: 'BUEN TRABAJO!',
                    text: 'Se agrego el comentario correctamente!',
                    icon: 'success'
                    }).then((result)=>{
                              if(result.value)
                              {
                              window.location='index.php?modulo=inicio'
                              }
                    });
                  </script>";
        } else {
            echo "<script>
                    Swal.fire({
                    title: 'ERROR!',
                    text: 'Ne se agrego el cometario!',
                    icon: 'error'
                    }).then((result)=>{
                              if(result.value)
                              {
                              window.location='index.php?modulo=productos'
                              }
                    });
                  </script>";
        }
    
    }
}