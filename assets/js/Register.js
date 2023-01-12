$(document).ready(function(){
    let obj = {}
    $("#registrar").click(function(){
        if($("#name").val() == "" || 
           $("#first_name").val() == "" ||
           $("#last_name").val() == "" || 
           $("#email").val()== "" ||
           $("#password").val() == "" || 
           $("#password").val() != $("#password-confirm").val()){
            
            if($("#name").val()==""){
                $("#name-error").html("Name can not be empty");
                $("#name-error").removeAttr("hidden");
            }else{
                $("#name-error").html("");
                $("#name-error").attr("hidden", true);
            }

            if($("#first_name").val()==""){
                $("#fn-error").html("First Name can not be empty");
                $("#fn-error").removeAttr("hidden");
            }else{
                $("#fn-error").html("");
                $("#fn-error").attr("hidden", true);
            }

            if($("#last_name").val()==""){
                $("#ln-error").html("Last Name can not be empty");
                $("#ln-error").removeAttr("hidden");
            }else{
                $("#ln-error").html("");
                $("#ln-error").attr("hidden", true);
            }

            if($("#email").val()==""){
                $("#email-error").html("Email can not be empty");
                $("#email-error").removeAttr("hidden");
            }else{
                $("#email-error").html("");
                $("#email-error").attr("hidden", true);
            }

            if($("#password").val()==""){
                $("#password-error").html("Password can not be empty");
                $("#password-error").removeAttr("hidden");
            }else{
                $("#password-error").html("");
                $("#password-error").attr("hidden", true);
            }

            if($("#password").val() == $("#password-confirm").val()){
                $("#passconfirm-error").html("");
                $("#passconfirm-error").attr("hidden", true);
            }else {
                $("#passconfirm-error").html("The passwords doesn't match");
                $("#passconfirm-error").removeAttr("hidden");
            }

        } else {

            let data = $("#registration-form").serialize();
            obj.data = data;
            obj.url  = "login.php";
            obj.type = "POST";

            let res  = peticionAjax(obj);

            if(res.error_correo_exist != null){
                $("#div-message").html(res.error_correo_exist);
                $("#modalRegister").modal("show");
            } else {
                $("#div-message").html(res.msg_true);
                $("#modalRegister").modal("show");

                setTimeout(function(){
                    window.location = "login.php?ac=lg"
                }, 5000);
            }
        }
    })    
})