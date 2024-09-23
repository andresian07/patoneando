<?php

class Conexion
{
    public static function sql()
    {
        $cnx = new mysqli('localhost','root','','explorador_rutas');
        return $cnx;
    }
}