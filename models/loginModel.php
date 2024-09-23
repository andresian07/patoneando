<?php

class loginModel extends Conexion
{
    public static function insertLogin($nombre,$email,$password)
    {
        $conexion = self::sql();
        $stm = $conexion->query("INSERT INTO `login`(`nombre`, `email`, `password`) VALUES ('$nombre','$email','$password')");
        return $stm;
    }

    public static function selectAllLogin()
    {
        $conexion = self::sql();
        $stm = $conexion->query("SELECT * FROM `login` WHERE 1");
        return $stm;
    }
}