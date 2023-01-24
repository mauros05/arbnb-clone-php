$(document).ready(function(){
    let obj = {};
    $("#createApartament").click(function(event){
        event.preventDefault;
        
        if($("#name").val() =="" || 
           $("#address").val() =="" || 
           $("#price").val() =="" || 
           $("#description").val() =="" ){

            if($("#name").val() == ""){
                $("#name-error").html("The name can not be blank");
                $("#name-error").removeAttr("hidden");
            } else {
                $("#name-error").html("");
                $("#name-error").attr("hidden", true)
            }

            if($("#address").val() == ""){
                $("#address-error").html("The address can not be blank");
                $("#address-error").removeAttr("hidden");
            } else {
                $("#address-error").html("");
                $("#address-error").attr("hidden", true);
            }

            if($("#price").val() == ""){
                $("#price-error").html("The price can not be blank");
                $("#price-error").removeAttr("hidden");
            } else {
                $("#price-error").html("");
                $("#price-error").attr("hidden", true);
            }

            if($("#description").val() == ""){
                $("#description-error").html("The description can not be blank");
                $("#description-error").removeAttr("hidden");
            } else {
                $("#description-error").html("");
                $("#description-error").attr("hidden", true);
            }
        } else {
            
            let data  = $("#crear-apartamento").serialize();
            obj.data  = data;
            obj.url   = "apartment.php";
            obj.type  = "POST";

            let res  = peticionAjax(obj);
            
            if(res.flag == 1){
                $("#div-message").html(res.res_message);
                $("#modalCreateApartment").modal("show")

                setTimeout(function(){
                    window.location = "index.php?ac=h"
                }, 5000);
            } else {
                $("#div-message").html(res.res_message);
                $("#modalCreateApartment").modal("show")
            }
        }
    })
})