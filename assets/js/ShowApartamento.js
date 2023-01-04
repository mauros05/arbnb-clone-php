$(document).ready(function(){
    let obj = {};
    $("#delete-apartment").click(function(){
        $("#modalDeleteApartment").modal("show");
        $("#btn-borrar-modal").click(function(){
            let idApartment = $("#id-apartment").val();
            obj.data = {id_apartment: idApartment, accion: ba };
            obj.url  = "apartment.php";
            obj.type = "POST";

            let res  = peticionAjax(obj);
        })
    })
})