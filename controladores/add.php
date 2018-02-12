<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$conexion = new PDO('mysql:host=localhost; dbname=agenda', 'root', '');
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$celular = $_POST['celular'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$stmt = $conexion->prepare("INSERT INTO contactos VALUES('',?,?,?,?,?,?,'')");
$stmt->bindParam(1, $nombre);
$stmt->bindParam(2, $apellido);
$stmt->bindParam(3, $telefono);
$stmt->bindParam(4, $celular);
$stmt->bindParam(5, $direccion);
$stmt->bindParam(6, $correo);
$stmt->execute();
echo 'Insert exitoso!';
?>

