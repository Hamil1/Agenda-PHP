$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
    $('#guardar').click(function(){
    swal({
        title: "Está seguro?",
        text: "Desea guardar los cambios?",
        type: "info",
        showCancelButton: true,
        cancelButtonText: "Cancelar",
        confirmButtonColor: "#8CD4F5",
        confirmButtonText: "Sí, guardelo!",
        closeOnConfirm: false
        },
            function(){
              swal("Guardado!", "Sus cambios fueron grabados correctamente.", "success");
            });
    }); 
    
    $('button.guardarContacto').on('click',function(){
        var nombre = $("input[name='nombre']").val();
        var apellido = $("input[name='apellido']").val();
        var telefono = $("input[name='telefono']").val();
        var celular = $("input[name='celular']").val();
        var direccion = $("input[name='direccion']").val();
        var correo = $("input[name='correo']").val();
        //Mandando la informacion del cliente al servidor
        $.ajax({
            type: "POST",
            url: "",
            data: "nombre="+nombre+"&apellido="+apellido+"&telefono="+telefono+"&celular="+celular+"&direccion="+direccion+"&correo="+correo,
            success: function(msg){
                alert('Guardado!');
            }
        });
    });
    
});

