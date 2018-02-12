<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of contactosControlador
 *
 * @author hamil
 */
class contactosControlador {
    public function __construct() {
        require_once("modelos/contactosModelo.php");
    }
    //Funcion para traer la vista con los contactos
    public function contactosVista(){
        $contactos = new contactosModelo();
        $contactos = $contactos->getContactos();
        require_once 'vistas/gestionarVista.php';
    }
}
