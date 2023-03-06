$(document).ready(function(){
    let obj = {};
    $("#start-date").change(function(){
        $("#end-date").removeAttr("disabled")
        $("#end-date").change(function(){
            let startDate = new Date($("#start-date").val());
            let endDate   = new Date($("#end-date").val());
            
            // Convertir en milisegundos
            let mili_seconds = endDate.getTime() - startDate.getTime();

            // Convertir milisegundos en dias
            let days = mili_seconds / (1000 * 3600 * 24);
            
            // Imprimir el numero de Dias en la targeta
            $("#num-days").html(days);

            // Obtener el precio por noche
            let price_night = $("#price-night").text();

            // Obtener el precio total
            let total_price = price_night * days;

            // Imprimir el precio total
            $("#total-price").html(total_price);

            // Asignamos valor a los hidden inputs
            $("#num-days-total").val(days);
            $("#precio_total").val(total_price);
        })
    })

    $("#crearBooking").click(function(){
        if($("#start-date").val() == "" || $("#end-date").val() == ""){       
            if($("#start-date").val() == ""){
                $("#start-date-error").html("Debe de seleccionar una fecha de Inicio");
                $("#start-date-error").removeAttr("hidden");
            } else {
                $("#start-date-error").html("");
                $("#start-date-error").attr("hidden", true)
            }

            if($("#end-date").val() == ""){
                $("#end-date-error").html("Debe de seleccionar una fecha de Finalizacion");
                $("#end-date-error").removeAttr("hidden");
            } else {
                $("#end-date-error").html("");
                $("#end-date-error").attr("hidden", true)
            }
        } else {
            let data = $("#crear-booking").serialize();
            obj.data = data;
            obj.url  = "bookings.php";
            obj.type = "POST";

            let res  = peticionAjax(obj);

            if(res.flag == 1){
                $("#div-message").html(res.res_message);
                $("#modalCreateBooking").modal("show")

                setTimeout(function(){
                    window.location = "index.php?ac=h"
                }, 5000);
            } else {
                $("#div-message").html(res.res_message);
                $("#modalCreateBooking").modal("show")
            }
        }
    })
})