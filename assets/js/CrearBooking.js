$(document).ready(function(){
    $("#start-date").change(function(){
        $("#end-date").removeAttr("disabled")
        $("#end-date").change(function(){
            let startDate =  new Date($("#start-date").val());
            let endDate  = new Date($("#end-date").val());
            
            // Convertir en milisegundos
            let mili_seconds = endDate.getTime() - startDate.getTime();

            // Convertir milisegundos en dias
            let days = mili_seconds / (1000 * 3600 * 24);
            
            // Imprimir el numero de Dias en la targeta
            $("#num-days").html(days)

            // Obtener el precio por noche
            let price_night = $("#price-night").text()

            // Imprimir el precio total
            $("#total-price").html(price_night * days)  
        })
    })


    $("#crearBooking").click(function(){
    

    })
})