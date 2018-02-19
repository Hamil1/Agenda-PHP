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
    //constructor
    public function __construct() {
        echo "<script>alert('Esta entrando al controlador')</script>";
        require_once("../modelos/contactosModelo.php");
        
        //Dependiendo de la condicion que venga del cliente se ejecutará una funcion
        if(isset($_POST['funcion']) && !empty($_POST['funcion'])){
            
            switch ($_POST['funcion']){
                case 'contactosVista': $this->contactosVista(); break;
                case 'guardarContacto': $this->guardarContacto(); break;
                
            }
        }
    }
    //Funcion para traer la vista con los contactos
    public function contactosVista(){
        $contactos = new contactosModelo();
        $contactos = $contactos->getContactos();
        //Inicializando variables
        $colores = array("0"=>"","1"=>"success","2"=>"danger","3"=>"info","4"=>"warning","5"=>"active");
        $i = 0;
        include_once '../vistas/gestionarVista.php';
    }
    
    //Funcion para guardar los datos de contacto que vienen del cliente
    public function guardarContacto(){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $celular = $_POST['celular'];
        $direccion = $_POST['direccion'];
        $correo = $_POST['correo'];
        $contactos = new contactosModelo();
        $contactos->insertContacto($nombre, $apellido, $telefono, $celular, $direccion, $correo);
    }
}
