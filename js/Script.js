$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();     
    $('button.guardarContacto').on('click',function(){
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
    
    $('button.cerrarEditar').on('click',function(){
        $('#editarContactoModal').modal().hide();
    });
    
    $('button.editarContacto').on('click',function(){
        //Mandando la informacion del cliente al servidor
        $.ajax({
            type: "POST",
            url: "controladores/update.php",
            data: "id="+id
        });
    });
    
    $('button.limpiarAgregar').on('click',function(){
        $("input[name='nombre']").val("");
        $("input[name='apellido']").val("");
        $("input[name='telefono']").val("");
        $("input[name='celular']").val("");
        $("input[name='direccion']").val("");
        $("input[name='correo']").val("");
    });
    
    $('button#editbutton').on('click',function(){
        var id = $(this).attr('idcontacto');
        $('#editarContactoModal').load('vistas/editVista.php',{id:id});
    });
    
    $('button#agregar').on('click',function(){
        $('#agregarContactoModal').load('vistas/agregarVista.php');
    });
    
});

