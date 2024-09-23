<?php

class InicioController
{   
    //SELECT ALL RUTAS
    public static function selectall()
    {
        $respuesta = InicioModel::selectall();
        return $respuesta;
    }

    //INSERT RUTA
    public static function insertRuta($creado,$nombre,$descripcion,$distacia,$dificultad,$duracion,$altitud,$epoca,$como_llegar,$recomendaciones,$observaciones,$imagen)
    {
        $respuesta = InicioModel::insertRuta($creado,$nombre,$descripcion,$distacia,$dificultad,$duracion,$altitud,$epoca,$como_llegar,$recomendaciones,$observaciones,$imagen);
        if ($respuesta == true) {
            echo "<script>
                    Swal.fire({
                    title: 'BUEN TRABAJO!',
                    text: 'Se agrego correctamente!',
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
                    text: 'Ne se agrego!',
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