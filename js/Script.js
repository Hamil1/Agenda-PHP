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
    
    $('#agregar').click(function(){
        $('#myModal').modal('toggle');
    });
    
    
    
});

