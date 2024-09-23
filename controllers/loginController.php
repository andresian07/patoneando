<?php

class loginController
{
    public static function insertLogin($nombre,$email,$password)
    {
        $respuesta = loginModel::insertLogin($nombre,$email,$password);
        if ($respuesta == true) {
            echo "<script>
                    Swal.fire({
                    title: 'BUEN TRABAJO!',
                    text: 'Se agrego el usuario correctamente!',
                    icon: 'success'
                    }).then((result)=>{
                              if(result.value)
                              {
                              window.location='index.php?modulo=login'
                              }
                    });
                  </script>";
        } else {
            echo "<script>
                    Swal.fire({
                    title: 'ERROR!',
                    text: 'Ne se agrego el usuario!',
                    icon: 'error'
                    }).then((result)=>{
                              if(result.value)
                              {
                              window.location='index.php?modulo=login'
                              }
                    });
                  </script>";
        }
    }

    public static function selectAllLogin()
    {
        $respuesta = loginModel::selectAllLogin();
        return $respuesta;
    }
}