<?php
// Esta clase conexion configuramos todos losparametros deconexion a la base de datos.
class conexion
{
    public static function StartUp()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=trabajo2;port=3306;charset=utf8','root', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}
