<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of libreria
 *
 * @author hamil
 */
class libreria {
    //Función para imprimir el mensaje javascript (Esta funcion devuelve los valores de un array en formato JSON para luego usarlos en el cliente)
    public function mensajeSweetAlert($opcion){
        if($opcion == 'editar'){
            $mensaje = array("mensaje"=>"Editado!","submensaje"=>"","icono"=>"success","danger"=>"");
        }else if($opcion == 'agregar'){
            $mensaje = array("mensaje"=>"Agregado!","submensaje"=>"","icono"=>"success","danger"=>"");
        }else if($opcion == 'error'){
            $mensaje = array("mensaje"=>"Error!","submensaje"=>"Contacte al administrador.","icono"=>"error","danger"=>"true");
        }else if($opcion == 'eliminar'){
            $mensaje = array("mensaje"=>"Eliminado!","submensaje"=>"","icono"=>"success","danger"=>"");
        }
        //Devolviendo valor al cliente en formato JSON
        echo json_encode($mensaje);
    }
}
