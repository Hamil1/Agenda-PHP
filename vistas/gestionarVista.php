<!DOCTYPE html>
<html>
    <head>
        
        <script type="text/javascript" src="js/Script.js"></script>
    </head>
    <body>
        <div id="agregarContacto">
            <span data-toggle="tooltip" data-placement="bottom" title="Agregar">
                <button id="agregar" class="btn btn-warning" data-toggle="modal" data-target="#agregarContactoModal">
                    <a class="fa fa-plus fa-1x hipervinculo" id="agregar" aria-hidden="true"></a>
                </button>
            </span>
        </div>
        <div id="agregarContactoModal" class="modal fade" role="dialog"></div>
        <div id="editarContactoModal" class="modal fade" role="dialog"></div>
        <table class="table table-hover table-bordered table-striped">
        
            <!--Titulo-->
            <thead>
                <tr>
                    <th class="registroslightgrey">#</th>
                    <th class="registroslightgrey">Nombre</th>
                    <th class="registroslightgrey">Apellido</th>
                    <th class="registroslightgrey">Telefono</th>
                    <th class="registroslightgrey">Celular</th>
                    <th class="registroslightgrey">Dirección</th>
                    <th class="registroslightgrey">Correo</th>
                    <th class="registroslightgrey">Acciones</th>
                </tr>
            </thead>
        
            <tbody>
                <!--Registros-->
               <?php foreach ($contactos as $contacto){$i = ($i == 5)?0:$i+1; ?>
                <tr class="<?= $colores[$i] ?>"> 
                    <td ><?= $contacto["id"] ?></td>
                    <td id=""><strong><?= $contacto["nombre"] ?></strong></td>
                    <td id=""><strong><?= $contacto["apellido"] ?></strong></td>
                    <td id=""><strong><?= $contacto["telefono"] ?></strong></td>
                    <td id=""><strong><?= $contacto["celular"] ?></strong></td>
                    <td id=""><strong><?= $contacto["direccion"] ?></strong></td>
                    <td id=""><strong><?= $contacto["correo"] ?></strong></td>
                    <td ><button data-toggle="tooltip" title="Editar" id="editbutton" idcontacto="<?= $contacto["id"] ?>"><a class="fa fa-pencil hipervinculo" idcontacto="<?= $contacto["id"] ?>" data-toggle="modal" data-target="#editarContactoModal"></a></button></td>
                </tr>
               <?php } ?>
            </tbody>
                
        
        </table>
	  
    </body>
</html>
