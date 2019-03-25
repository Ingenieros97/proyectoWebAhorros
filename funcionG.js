$(document).ready(function(){
  $("#btn_guardar").click(function() {
    $.ajax({
            url:"api/servicio/guardar/index.php",
            type:"POST",
            dataType: "json",
            data:$("#frm_factura").serialize(),
            beforeSend: function()
            {
            $("#div_producto").html("Guardando...");
              $("#btn_guardar").attr("disabled","true");
            },

            success:function(data){
                if(data.resultado){
                    $("#div_producto").html("servicio registrado");
                    $("#txt_nombre").val("");
                    $("#txt_Descripcion").val("");
                    $("#txt_fecha").val("");
                        $("#txt_costo").val("");
                }
                else{
                    $("#div_producto").html(data.mensaje);
                }

                $("#btn_guardar").removeAttr("disabled");
            }

          });
      });
});
function mostrar_descripcion(fecha){

    $.ajax({
        url: "api/servicio/guardar/index.php",
        type: "POST",
        data: {
            fecha:fecha
        },
        dateType: "json",
        success: function(data){

            $("#Mostrar").html("<div id='div_fecha'></div><br /><div id='div_nombre'></div><br /><div id='div_Descripcion'></div><br /><div id='div_precio'></div><br />");
            $("#div_fecha").html(data.fecha);
            $("#div_nombre").html(data.nombre);
            $("#div_descripcion").html(data.descripcion);
            $("#div_precio").html(data.costo);


        }
    });
}
