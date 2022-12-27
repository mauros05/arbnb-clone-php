$(document).ready(function(){
    let obj = {};
    $("#login").click(function(){

        let correo   = $("#email").val();
        let password = $("#password").val();

        if(correo == "" || password == ""){
            if(correo == ""){
                $("#correo-error").html("El correo no puede estar vacio");
                $("#correo-error").removeAttr("hidden")
            } else {
                $("#correo-error").html("");
                $("#correo-error").attr("hidden", true)
            }

            if(password == ""){
                $("#password-error").html("El password no puede ser vacio");
                $("#password-error").removeAttr("hidden")
            } else {
                $("#password-error").html("");
                $("#password-error").attr("hidden", true)
            }
        } else {

            obj.data = { correo: correo, password: password };
            obj.url  = "login.php";
            obj.type = "POST";

            let res  = peticionAjax(obj);
            if(res.flag == 1){
                window.location = "index.php?ac=h"
            } else if(res.flag == 0){
                $("#div-message").html(res.msg_error);
                $("#modalLogin").modal("show");
            }


        }

    })
})