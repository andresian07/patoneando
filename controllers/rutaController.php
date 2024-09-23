<?php

class rutaCrontroller
{
    public static function selectAllRutasId($id)
    {
        $respuesta = rutaModel::selectAllRutasId($id);
        return $respuesta;
    }

    //ELIMINAR RUTA 
    public static function DelectRuta($id)
    {
        $respuesta = rutaModel::DelectRuta($id);
        if ($respuesta == true) {
            echo "<script>
                    Swal.fire({
                    title: 'BUEN TRABAJO!',
                    text: 'Se elimino correctamente!',
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
                    text: 'Ne se elimino!',
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

    //EDITAR RUTA
    public static function EditarRuta($id,$creado_por,$nombre,$descripcion,$distancia,$dificultad,$duracion,$altitud,$epoca,$como_llegar,$recomendaciones,$observaciones,$imagen)
    {
        $respuesta = rutaModel::EditarRuta($id,$creado_por,$nombre,$descripcion,$distancia,$dificultad,$duracion,$altitud,$epoca,$como_llegar,$recomendaciones,$observaciones,$imagen);
        if ($respuesta == true) {
            echo "<script>
                    Swal.fire({
                    title: 'BUEN TRABAJO!',
                    text: 'Se edito correctamente!',
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
                    text: 'Ne se elimino!',
                    icon: 'error'
                    }).then((result)=>{
                              if(result.value)
                              {
                              window.location='index.php?modulo=laguna'
                              }
                    });
                  </script>";
        }
        
    }
}