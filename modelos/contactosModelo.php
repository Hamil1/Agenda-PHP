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
class contactosModelo {
    private $db;
    private $contactos;
    public function __construct() {
        require_once 'conexionModelo.php';
        $this->db = conexionModelo::conectar();
        $this->contactos = array();
    }
    
    //Método para obtener todos los contactos
    public function getContactos(){
        $consulta = $this->db->query("SELECT * FROM contactos");
        //Bucle para obtener los registros
        while($filas = $consulta->fetch(PDO::FETCH_ASSOC)){
            $this->contactos[] = $filas;
        }
        //Retornando los registros dentro de un array
        return $this->contactos;
    }
    //Método para insertar un contacto
    public function insertContacto($nombre, $apellido, $telefono, $celular, $direccion, $correo){
        $stmt = $this->db->prepare("INSERT INTO contactos VALUES('',?,?,?,?,?,?,'')");
        $stmt->bindParam(1, $nombre);
        $stmt->bindParam(2, $apellido);
        $stmt->bindParam(3, $telefono);
        $stmt->bindParam(4, $celular);
        $stmt->bindParam(5, $direccion);
        $stmt->bindParam(6, $correo);
        $stmt->execute();
    }
    //Método para obtener un contacto en especifico
    public function getContacto($id){
        $consulta = $this->db->query("SELECT * FROM contactos WHERE id = ".$id);
        //Bucle para obtener los registros
        while($filas = $consulta->fetch(PDO::FETCH_ASSOC)){
            $this->contactos[] = $filas;
        }
        return $this->contactos;
    }
    
    public function borrarContacto($id){
        $consulta = $this->db->query("DELETE FROM contactos WHERE id = ".$id);
    }
    
    public function updateContacto($id, $nombre, $apellido, $telefono, $celular, $direccion, $correo){
        $stmt = $this->db->prepare("UPDATE contactos SET nombre = ?, apellido = ?, telefono = ?, celular = ?, direccion = ?, correo = ?, status_color = '' WHERE id = ".$id);
        $stmt->bindParam(1, $nombre);
        $stmt->bindParam(2, $apellido);
        $stmt->bindParam(3, $telefono);
        $stmt->bindParam(4, $celular);
        $stmt->bindParam(5, $direccion);
        $stmt->bindParam(6, $correo);
        $stmt->execute();
    }
}
