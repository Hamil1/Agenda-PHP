<div id="agregarContactoModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
             <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" >
                    <button type="button" class="sr-only" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color: rgb(95, 90, 90);"><strong><i>Agregar Contacto</i></strong></h4>
                </div>
                <div class="modal-body">
                <div style="height: 43px;">
                    <div><input type="text" name="nombre" placeholder="Nombre" class="inputtext" style="float:left; width: 50%;" ></div>
                    <div><input type="text" name="apellido" placeholder="Apellido" class="inputtext" style="width: 50%;float: right;"></div>
                </div>	
                <div style="height: 43px;">
                    <div><input type="text" name="telefono" placeholder="Telefono" class="inputtext" style="float:left; width: 50%;" ></div>
                    <div><input type="text" name="celular" placeholder="Celular" class="inputtext" style="width: 50%;float: right;"></div>
                </div>

                <div style="height: 80px;">
                    <div><input type="text" name="direccion" placeholder="Dirección" class="inputtext" style="float:left; width: 50%;" ></div>
                    <div><input type="text" name="correo" placeholder="Correo" class="inputtext" style="width: 50%;float: right;"></div>
                </div>

                </div>
                <div class="modal-footer" style="border: 0;    margin-bottom: -8px; margin-right: -2px;">
                    <button type="button" onclick="guardarDatos()" class="btn btn-default" data-dismiss="modal" style="background-color:rgb(113, 188, 222);color:white;">Guardar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:rgb(247, 81, 81);color:white;">Cerrar</button>
                </div>
            </div>
    </div>
    <script>
    </script>
</div>