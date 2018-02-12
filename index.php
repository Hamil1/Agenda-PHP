<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Agenda - Index</title>
    </head>
    <body>
        <?php require_once 'controladores/contactosControlador.php';
        $contactosControlador = new contactosControlador();
        $contactosControlador->contactosVista(); ?>
    </body>
</html>