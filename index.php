<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Latest compiled and minified CSS -->


        <script src="sweetalert-master/dist/sweetalert.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/Script.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome-4.7.0\css\font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/sweetalert-master/dist/sweetalert.css">
        <link rel="stylesheet" type="text/css" href="css/Style.css">

        <script>
            $(".hipervinculo").click(function(){
                alert('esta funcionando!');
            });
        </script>
                
                
                
        <title>Agenda</title>
        <style>
            table, th, td {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <div id="agregarContacto">
            <button id="agregar" type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Agregar"><a class="fa fa-plus fa-1x hipervinculo" id="agregar" aria-hidden="true"></a></button>
        </div>
        <table class="table table-hover table-bordered">
        
            <!--Titulos-->
            <tr>
            
            
            <th class="registroslightgrey">Código</th>
            <th class="registroslightgrey">Nombre</th>
            <th class="registroslightgrey">Apellido</th>
            <th class="registroslightgrey">Telefono</th>
            <th class="registroslightgrey">Celular</th>
            <th class="registroslightgrey">Dirección</th>
            <th class="registroslightgrey">Correo</th>
            <th class="registroslightgrey">Acciones</th>
        </tr>
        
        <!--Registros-->
       <?php for($i = 0; $i<= 10; $i++){?>
                    <tr> 
                       <td >Id</td>
                       <td id="<%out.print(agenda.getId());%>">Nombre</strong></td>
                       <td id="<%out.print(agenda.getId());%>">Apellido</strong></td>
                       <td id="<%out.print(agenda.getId());%>">Telefono 1</strong></td>
                       <td id="<%out.print(agenda.getId());%>">Telefono 2</strong></td>
                       <td id="<%out.print(agenda.getId());%>">Dirección</strong></td>
                       <td id="<%out.print(agenda.getId());%>">Correo</strong></td>
                       <td ><button data-toggle="tooltip" title="Editar" id="editbutton"><a class="fa fa-pencil hipervinculo" id="" data-toggle="modal" href="Edit.php#myModal2"></a></button></td>
                       
                       
                   </tr>
       <?php } ?>
                
        
        </table>
	  
    </body>
</html>
