$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
    
    //Esto es para cuando cargue la pagina se carguq la vista de gestionar contactos
    var funcion = 'contactosVista';
       $.post('controladores/principalControlador.php',{funcion:funcion},function(tablaContactos){
           $('div#tablaContactos').html(tablaContactos);
       });
       
    //Esto es para guardar un contacto
    $(document).on('click','button.guardarContacto',function(){
        var nombre = $("input[name='nombre']").val();
        var apellido = $("input[name='apellido']").val();
        var telefono = $("input[name='telefono']").val();
        var celular = $("input[name='celular']").val();
        var direccion = $("input[name='direccion']").val();
        var correo = $("input[name='correo']").val();
        var action = "add";
        //Mandando la informacion del cliente al servidor
        $.ajax({
            type: "POST",
            url: "controladores/add.php",
            data: "action="+action+"&nombre="+nombre+"&apellido="+apellido+"&telefono="+telefono+"&celular="+celular+"&direccion="+direccion+"&correo="+correo,
            success: function(msg){
                alert('Guardado!');
            }
        });
        //Para recargar la página
        location.reload();
    });
    /*
    $(document).on('click','button#editbutton',function(){
        var id = $(this).attr('idcontacto');
        $.post('vistas/editVista.php',{id:id},function(htmlExterno){
            $('#editarContactoModal').html(htmlExterno);
        });
    });
    
    $(document).on('click','button#agregar',function(){
        $.post('vistas/agregarVista.php',function(htmlExterno){
            $('#agregarContactoModal').html(htmlExterno);
        });
    });
    */
   
   
       
   
});

