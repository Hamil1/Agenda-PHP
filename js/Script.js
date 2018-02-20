$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
    //Esto es para cuando cargue la pagina se cargue la vista de gestionar contactos
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
        var funcion = 'guardarContacto';
        $.post('controladores/principalControlador.php',{nombre:nombre,apellido:apellido,telefono:telefono,
            celular:celular,direccion:direccion,correo:correo,funcion:funcion})
                .done(function(){
                    swal("Guardado!", "", "success").then(valor => {if(valor){recargar(0);}});
                });
    });
        
    //Funcion para recargar la pagina
    function recargar(tiempo){
       setTimeout(function(){location.reload();},tiempo); 
    }
    
    $(document).on('click','button#editbutton',function(){
        var id = $(this).attr('idcontacto');
        var funcion = 'editarContacto';
        $.post('controladores/principalControlador.php',{id:id, funcion:funcion},function(htmlExterno){
            $('#editarContactoModal').html(htmlExterno);
        });
    });
    
    $(document).on('click','button#agregar',function(){
        $.post('vistas/agregarVista.php',function(htmlExterno){
            $('#agregarContactoModal').html(htmlExterno);
        });
    });   
   
   $(document).on('click','button#eliminarboton',function(){
        swal({
          title: "Desea eliminar?",
          text: "",
          icon: "warning",
          buttons: {cancel: "No",confirm:"Si"},
          dangerMode: true,
        }).then(valor => {
            if(valor) {
                var id = $(this).attr('idcontacto');
                var funcion = 'eliminarContacto';
                $.post('controladores/principalControlador.php',{id:id, funcion:funcion});
                swal({
                    title: "Eliminado!",
                    text: "",
                    icon: "success",
                }).then(valor2 => {if(valor2){return recargar(0);}
                });
            }
        });
    });
    
   }); //Cierre del ready()


