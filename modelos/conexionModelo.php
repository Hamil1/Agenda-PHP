<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexion
 *
 * @author hamil
 */
class conexionModelo {
    public static function conectar() {
        try {
            $conexion = new PDO('mysql:host=localhost; dbname=agenda', 'root', '');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET UTF8");
        } catch (Exception $ex) {
            die("Problemas con la conexión. Causas: ".$ex->getMessage());
            echo "Linea del error". $ex->getLine();
        }
        return $conexion;
    }
}
