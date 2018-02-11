<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of contactos
 *
 * @author hamil
 */
class contactos {
    private $db;
    private $contactos;
    public function __construct() {
        require_once 'conexion.php';
        $this->db = conexion::conectar();
        $this->contactos = array();
    }
    
    //Método para obtener todos los contactos
    public function getContactos(){
        $consulta = $this->db->query("SELECT * FROM contactos");
        //Bucle para obtener los registros
        while($filas = $consulta->fetch(PDO::FETCH_ASSOC)){
            $this->contactos = $filas;
        }
        //Retornando los registros dentro de un array
        return $this->contactos;
    }
}
