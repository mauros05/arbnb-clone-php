$(document).ready(function(){
    let obj = {};
    $("#delete-apartment").click(function(event){
        event.preventDefault;
        $("#modalDeleteApartment").modal("show");
        $("#btn-borrar-modal").click(function(event){
            event.preventDefault;
            let idApartment = $("#id-apartment").val();
            obj.data = {id_apartment: idApartment, accion: "ba" };
            obj.url  = "apartment.php";
            obj.type = "POST";

            let res  = peticionAjax(obj);
            if(res.flag == 0){
                $("#modalDeleteApartment").modal("hide");
                $("#div-message").html(res.res_message);
                $("#modalAccion").modal("show");
            } else {
                $("#modalDeleteApartment").modal("hide");
                $("#div-message").html(res.res_message);
                $("#modalAccion").modal("show");

                setTimeout(function(){
                    window.location = "index.php?ac=h"
                }, 5000);
            }
        })
    })
})