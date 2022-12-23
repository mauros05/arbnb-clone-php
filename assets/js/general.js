function peticionAjax(data){
    let respuesta;
    $.ajax({
        async: false,
        type: data.type,
        url: data.url,
        data: data.data,
        dataType: "json",
        success: function (res) {
            respuesta = res
        },

        error: function(xhr, status){
            console.log("Algo salio mal")
        },

        complete: function (xhr, status) {  
            console.log("Peticion correcta");
        }
    });
    return respuesta
}
