$(document).ready(function() {
    $(document).on('keypress', function(e) {
        if (e.which == 13) {
            login();
        }
    });

    $('#btn_login').click(function() {
        login();
    });
});

function login() {
    //console.log("login.js");
    let usuario = $('#input_login').val();
    let contrasena = $('#input_password').val();
    if (usuario.length == 0 || contrasena.length == 0) {
        validar_campos();
    } else {
        validarLogin(usuario, contrasena);
    }
}

function validar_campos() {
    $('#formContent > form > input').each(function() {
        valor = $(this).val();
        if (valor.length == 0) {
            $(this).css('border', '1.5px solid #f00');
        } else {
            $(this).css('border', '1px solid #ccc');
        }
    });
}

function validarLogin(usuario, contrasena) {
    //console.log("usuario: " + usuario + ", contraseña: " + contrasena);
    $.ajax({
        method: "POST",
        dataType: 'json',
        url: "./ra.view/ValidarLogin.php",
        data: { usuario: usuario, contrasena: contrasena, }
    }).done(function(result) {
        //var obj=$.parseJSON(result);
        //var login = obj['usu_result']; 
        var login = result.usu_result
            //var modulo = result.usu_modulo;
        switch (login) {
            case true:
                console.log("Entraste Correctamente");
                $("#ModalCenterInicioSesion").modal('hide');
                $.redirect('./index_principal.php', {});
                break;
            case false:
                swal("Atención!", "Usuario o contraseña incorrecto. \n Por Favor, Intente de nuevo.", "warning");
                /*
                    $('#div_alert').show('slow');
                    $('#div_alert').html('<span class="badge badge-danger"><i class="fas fa-exclamation-triangle"></i></span><p>Usuario o Contraseña Incorrecto</p>');                            
                */
                $('#inp_usuario').val("");
                $('#inp_contrasena').val("");
                $('#inp_usuario').focus();
                break;
        }

    }).fail(function(error) {
        swal("Error", "No es posible procesar su petición. Intente más tarde", "error")
            .then((confirm) => {
                if (confirm) {
                    //logout();
                } else {}
            });

    });
}