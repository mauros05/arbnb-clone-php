$(document).ready(function(){
    let obj = {};
    $("#crearApartamento").click(function(event){
        event.preventDefault;

        if($("#nombre").val() =="" || 
           $("#direccion").val() =="" || 
           $("#precio").val() =="" || 
           $("#descripcion").val() =="" ){

            if($("#nombre").val() == ""){
                $("#nombre-error").html("El nombre no puede ser vacio");
                $("#nombre-error").removeAttr("hidden")
            } else {
                $("#nombre-error").html("");
                $("#nombre-error").attr("hidden", true)
            }

            if($("#direccion").val() == ""){
                $("#direccion-error").html("La direccion no puede ser vacia");
                $("#direccion-error").removeAttr("hidden")
            } else {
                $("#direccion-error").html("");
                $("#direccion-error").attr("hidden", true)
            }

            if($("#precio").val() == ""){
                $("#precio-error").html("El departamento debe de tener precio");
                $("#precio-error").removeAttr("hidden")
            } else {
                $("#precio-error").html("");
                $("#precio-error").attr("hidden", true)
            }

            if($("#descripcion").val() == ""){
                $("#descripcion-error").html("El departamento debe de tener una descripcion");
                $("#descripcion-error").removeAttr("hidden")
            } else {
                $("#descripcion-error").html("");
                $("#descripcion-error").attr("hidden", true)
            }
        } else {
            let data  = $("#crear-apartamento").serialize();
            obj.data  = data;
            obj.url   = "apartment.php";
            obj.type  = "POST";

            let res  = peticionAjax(obj);
        }



    })





})