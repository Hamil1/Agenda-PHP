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
        //Mandando la informacion del cliente al servidor
        var funcion = "guardarContacto";
        $.post('controladores/principalControlador.php',{nombre:nombre,apellido:apellido,telefono:telefono,
            celular:celular,direccion:direccion,correo:correo,funcion:funcion})
                .done(function(data){
                    sweet(data);
                });   
    });
    
    //Esto es para guardar un contacto
    $(document).on('click','button#editarContacto',function(){
        var id = $("input[name='id']").val();
        var nombre = $("input[name='nombre']").val();
        var apellido = $("input[name='apellido']").val();
        var telefono = $("input[name='telefono']").val();
        var celular = $("input[name='celular']").val();
        var direccion = $("input[name='direccion']").val();
        var correo = $("input[name='correo']").val();
        //Mandando la informacion del cliente al servidor
        var funcion = "editarContacto";
        $.post('controladores/principalControlador.php',{id:id,nombre:nombre,apellido:apellido,telefono:telefono,
            celular:celular,direccion:direccion,correo:correo,funcion:funcion})
                .done(function(data){
                    sweet(data);
                });   
    });
        
    //Funcion para recargar la pagina
    function recargar(tiempo){
       setTimeout(function(){location.reload();},tiempo); 
    }
    
    //Evento cuando presionene el boton editar
    $(document).on('click','button#editbutton',function(){
        var id = $(this).attr('idcontacto');
        var funcion = 'editarVistaContacto';
        $.post('controladores/principalControlador.php',{id:id, funcion:funcion},function(htmlExterno){
            $('#editarContactoModal').html(htmlExterno);
        });
    });
    
    //Evento cuando presionene el boton agregar
    $(document).on('click','button#agregar',function(){
        $.post('vistas/agregarVista.php',function(htmlExterno){
            $('#agregarContactoModal').html(htmlExterno);
        });
    });   
   
   //Evento cuando presionene el boton eliminar
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
                $.post('controladores/principalControlador.php',{id:id, funcion:funcion})
                    .done(function(data){
                        sweet(data);
                    });
            }
        });
    });
    
    function sweet(data){
        var data = $.parseJSON(data); 
        swal({
            title: data.mensaje,
            text: data.submensaje,
            icon: data.icono,
            dangerMode: data.danger,
        }).then(function(valor){
            if(valor){recargar(0);}
        });
        if(data.danger){
            $('div.swal-overlay').css('background-color','#e6494257');
        }
    }
    
   }); //Cierre del ready()


