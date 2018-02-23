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
        require_once("../modelos/contactosModelo.php");
        
        //Dependiendo de la condicion que venga del cliente se ejecutará una funcion
        if(isset($_POST['funcion']) && !empty($_POST['funcion'])){
            
            switch ($_POST['funcion']){
                case 'contactosVista': $this->gestionarContactos(); break;
                case 'guardarContacto': $this->guardarContacto(); break;
                case 'editarVistaContacto':$this->editarVistaContacto(); break;
                case 'editarContacto': $this->editarContacto(); break;
                case 'eliminarContacto': $this->eliminarContacto(); break;
            }
        }
    }
    //Funcion para traer la vista con los contactos
    public function gestionarContactos(){
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
        $this->mensajeSweetAlert("agregar");
    }
    
    //Funcion para cargar los datos en la vista de editar contacto
    public function editarVistaContacto(){
        $id = $_POST['id'];
        $contacto = new contactosModelo();
        $registro = $contacto->getContacto($id);
        //Obteniendo los datos del contacto filtrado
        foreach($registro as $contacto){
            $nombre = $contacto["nombre"];
            $apellido = $contacto["apellido"];
            $telefono = $contacto["telefono"];
            $celular = $contacto["celular"];
            $direccion = $contacto["direccion"];
            $correo = $contacto["correo"];
        }
        include_once '../vistas/editVista.php';
    }
    
    //Funcion para eliminar un contacto
    public function eliminarContacto(){
        $id = $_POST['id'];
        $contacto = new contactosModelo();
        //Borrando un contacto
        $contacto->borrarContacto($id);
    }
    
    //Funcion para editar un contacto
    public function editarContacto(){
        //Seteando variables
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $celular = $_POST['celular'];
        $direccion = $_POST['direccion'];
        $correo = $_POST['correo'];
        $contacto = new contactosModelo();
        //Haciendo update al registro
        $contacto->updateContacto($id, $nombre, $apellido, $telefono, $celular, $direccion, $correo);
        $this->mensajeSweetAlert("editar");
    }
    
    //Función para imprimir el mensaje javascript
    private function mensajeSweetAlert($opcion){
        $mensaje = array("mensaje"=>"Editado!","submensaje"=>"","icono"=>"success");
        echo json_encode($mensaje);
        
    }
}
