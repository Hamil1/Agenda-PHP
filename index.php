<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Agenda - Index</title>
        
    </head>
    <body>
        <?php 
        require_once 'controladores/contactosControlador.php';
        require_once 'modelos/contactosModelo.php';
        $contactosControlador = new contactosControlador();
        $contactosControlador->contactosVista(); ?>
    </body>
    <script src="sweetalert-master/dist/sweetalert.min.js"></script>
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/Script.js"></script>

        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome-4.7.0\css\font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/sweetalert-master/dist/sweetalert.css">
        <link rel="stylesheet" type="text/css" href="css/Style.css">
</html>