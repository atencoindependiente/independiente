$(document).ready(function() {
    mostrarTablaDirectivos();
    mostrarTablaLideres();
    mostrarTablaCoordinadores();
    mostrarTablaSimpatizantes();
    mostrarTablaSimpatizantesIne();
    //mostrarTablaSimpatizantesIneEnListaNominal();

    $('#btn_guardar_datos_directivo').click(function() {
        validaCamposDirectivo();
    });

    $('#btn_guardar_datos_lider').click(function() {
        validaCamposLider();
    });

    $('#btn_guardar_datos_coordinador').click(function() {
        validaCamposCoordinador();
    });

    $('#btn_guardar_datos_simpatizante').click(function() {
        validaCamposSimpatizante();
    });

    $('#btn_guardar_datos_editar_simpatizante').click(function() {
        validaCamposEditarSimpatizante();
    });
});

//function mostrarModalAgregarAfiliado() {
//    vaciaCampos();
//    $(".bd-nuevo-afiliado-modal-lg").modal('show');
//}

function mostrarModalAgregarDirectivo() {
    //console.log("mostrarModalAgregarDirectivo");
    $('#alert_valida_campos_directivo').hide();
    vaciaCampos('Directivo');
    $(".bd-nuevo-director-modal-lg").modal('show');
    $(".bd-nuevo-lider-modal-lg").modal('hide');
    $(".bd-nuevo-coordinador-modal-lg").modal('hide');
    $(".bd-nuevo-simpatizante-modal-lg").modal('hide');
}

function mostrarModalAgregarLider() {
    //console.log("mostrarModalAgregarLider");
    $('#alert_valida_campos_lider').hide();
    vaciaCampos('Lider');
    $(".bd-nuevo-director-modal-lg").modal('hide');
    $(".bd-nuevo-lider-modal-lg").modal('show');
    $(".bd-nuevo-coordinador-modal-lg").modal('hide');
    $(".bd-nuevo-simpatizante-modal-lg").modal('hide');
    mostrarDatosDirectivos('Lider');
}

function mostrarModalAgregarCoordinador() {
    //console.log("mostrarModalAgregarCoordinador");
    vaciaCampos('Coordinador');
    $("#alert_valida_campos_coordinador").hide();
    $(".bd-nuevo-director-modal-lg").modal('hide');
    $(".bd-nuevo-lider-modal-lg").modal('hide');
    $(".bd-nuevo-coordinador-modal-lg").modal('show');
    $(".bd-nuevo-simpatizante-modal-lg").modal('hide');
    mostrarDatosDirectivos('Coordinador');
    mostrarDatosLideres('Coordinador');
}

function mostrarModalAgregarSimpatizante() {
    //console.log("mostrarModalAgregarSimpatizante");
    vaciaCampos('Simpatizante');
    $("#alert_valida_campos_simpatizante").hide();
    $(".bd-nuevo-director-modal-lg").modal('hide');
    $(".bd-nuevo-lider-modal-lg").modal('hide');
    $(".bd-nuevo-coordinador-modal-lg").modal('hide');
    $(".bd-nuevo-simpatizante-modal-lg").modal('show');
    mostrarDatosDirectivos('Simpatizante');
    mostrarDatosLideres('Simpatizante');
    mostrarDatosCoordinador('Simpatizante');
}

function mostrarModalEditarSimpatizanteIne(simpine_id) {
    vaciaCampos('EditarSimpatizante');
    $("#alert_valida_campos_editar_simpatizante").hide();
    $(".bd-nuevo-director-modal-lg").modal('hide');
    $(".bd-nuevo-lider-modal-lg").modal('hide');
    $(".bd-nuevo-coordinador-modal-lg").modal('hide');
    $(".bd-nuevo-simpatizante-modal-lg").modal('hide');
    $(".bd-editar-simpatizante-modal-lg").modal('show');
    mostrarDatosDirectivos('EditarSimpatizante');
    mostrarDatosLideres('EditarSimpatizante');
    mostrarDatosCoordinador('EditarSimpatizante');
    //console.log(simpine_id);
    $.ajax({
        url: "./ra.view/MostrarDatosEditarSimpatizanteIneView.php",
        method: "POST",
        dataType: 'json',
        data: {
            simpine_id: simpine_id
        }
    }).done(function(result) {
        //console.log(result);
        if (result.success === true) {
            var array = result.result;
            array.forEach(function(simp, index) {
                //$("#mdl_editar_simp_localidad").val('0000');
                $("#span_simpine_id").text(simpine_id);
                $("#mdl_editar_simp_seccion").val(simp.simpine_seccion);
                //$("#mdl_editar_simp_directivo").val('0');
                $("#mdl_editar_simp_nombre").val(simp.simpine_nombre);
                $("#mdl_editar_simp_apaterno").val(simp.simpine_apaterno);
                $("#mdl_editar_simp_amaterno").val(simp.simpine_amaterno);
                $("#mdl_editar_simp_direccion").val(simp.simpine_direccion);
                $("#mdl_editar_simp_tel_celular").val(simp.simpine_tel_celular);
                $("#mdl_editar_simp_comentarios").val(simp.simpine_comentario);
            });
            //console.log("MostrarDatosEditarSimpatizanteIneView");
        }
        //console.log(result.result);
        /*switch (result.catalogo_success) {
            case true:
                var array_catalogo = result.catalogo_result;
                array_catalogo.forEach(function(catalogo, index) {
                    $('#' + id_elemento).append("<option value = '" + catalogo.catalogo_id + "'>" + catalogo.catalogo_descripcion + "</option>");
                });
                break;
            case false:
                alert(result.catalogo_success);
                break;
        }*/
    }).fail(function(error) {
        swal('¡ADVERTENCIA ERROR1!', 'PROBLEMAS DE CONEXIÓN.', 'warning');
    });
}

function validaCamposDirectivo() {
    /*console.log(1);
    $('.modal-body > div > div > div > input').each(function() {
        id = this.id;
        valor = $('#' + id).val();

        if (valor.length == 0) {
            $(this).css('border', '1.5px solid #f00');
            $('#alert_valida_campos').show();
            swal("¡IMPORTANTE!", "Es necesario llenar todos los campos del formulario.", "warning");
            console.log(2);

        } else {
            $(this).css('border', '1px solid #ccc');
            $('#alert_valida_campos').hide();
            console.log(3);

        }
    });
    console.log(4);

    $('.modal-body > div > div > select').each(function() {
        id = this.id;
        valor = $('#' + id).val();
        //alert(id+ " "+ valor);
        if (valor === '0000') {
            $(this).css('border', '1.5px solid #f00');
            $('#alert_valida_campos').show();
            console.log(5);

        } else {
            $(this).css('border', '1px solid #ccc');
            $('#alert_valida_campos').hide();
            console.log(6);

        }
    });
    console.log(7);

    var text_area_direccion = $('#mdl_direccion').val();
    if (text_area_direccion.length == 0) {
        $('#mdl_direccion').css('border', '1.5px solid #f00');
        $('#alert_valida_campos').show();
        console.log(8);

    } else {
        $('#mdl_direccion').css('border', '1px solid #ccc');
        $('#alert_valida_campos').hide();
        obtenetDatos();
        console.log(9);

    }
    console.log(10);*/
    //console.log("btn_guardar_datos_directivo");
    let mdl_localidad = $("#mdl_directivo_localidad").val();
    let mdl_seccion = $("#mdl_directivo_seccion").val();
    let mdl_cp = $("#mdl_directivo_cp").val();
    let mdl_nombre = $("#mdl_directivo_nombre").val();
    let mdl_apaterno = $("#mdl_directivo_apaterno").val();
    let mdl_amaterno = $("#mdl_directivo_amaterno").val();
    let mdl_direccion = $("#mdl_directivo_direccion").val();
    let mdl_tel_celular = $("#mdl_directivo_tel_celular").val();

    let mdl_email_old = $("#mdl_directivo_correo").val();
    let mdl_email = mdl_email_old.length == 0 ? 'Sin Email' : mdl_email_old;
    let mdl_comentarios_old = $("#mdl_directivo_comentarios").val();
    let mdl_comentarios = mdl_comentarios_old.length == 0 ? 'Sin Comentarios' : mdl_comentarios_old;
    if (mdl_localidad === '0000' || mdl_seccion === '0000' || mdl_nombre.length == 0 || mdl_apaterno.length == 0 ||
        mdl_amaterno.length == 0 || mdl_direccion.length == 0 || mdl_cp.length == 0 || mdl_tel_celular.length == 0) {
        swal("¡IMPORTANTE!", "Es necesario llenar todos los campos del formulario.", "warning");
    } else {
        //console.log(mdl_localidad);
        //console.log(mdl_seccion);
        //console.log(mdl_nombre);
        //console.log(mdl_apaterno);
        //console.log(mdl_amaterno);
        //console.log(mdl_direccion);
        //console.log(mdl_cp);
        //console.log(mdl_tel_celular);
        //console.log(mdl_email);
        //console.log(mdl_comentarios);
        guardarDatosDirectivo(mdl_localidad, mdl_seccion, mdl_cp, mdl_nombre, mdl_apaterno, mdl_amaterno, mdl_direccion, mdl_tel_celular, mdl_email, mdl_comentarios);
    }
}

function validaCamposLider() {
    //console.log("btn_guardar_datos_lider");
    let mdl_localidad = $("#mdl_lider_localidad").val();
    let mdl_seccion = $("#mdl_lider_seccion").val();
    let mdl_cp = $("#mdl_lider_cp").val();
    let mdl_directivo = $("#mdl_datos_directivo").val();
    let mdl_nombre = $("#mdl_lider_nombre").val();
    let mdl_apaterno = $("#mdl_lider_apaterno").val();
    let mdl_amaterno = $("#mdl_lider_amaterno").val();
    let mdl_direccion = $("#mdl_lider_direccion").val();
    let mdl_tel_celular = $("#mdl_lider_tel_celular").val();
    let mdl_comentarios_old = $("#mdl_lider_comentarios").val();
    let mdl_comentarios = mdl_comentarios_old.length == 0 ? 'Sin Comentarios' : mdl_comentarios_old;

    if (mdl_localidad === '0000' || mdl_seccion === '0000' || mdl_nombre.length == 0 || mdl_apaterno.length == 0 ||
        mdl_amaterno.length == 0 || mdl_direccion.length == 0 || mdl_cp.length == 0 || mdl_tel_celular.length == 0) {
        swal("¡IMPORTANTE!", "Es necesario llenar todos los campos del formulario.", "warning");
    } else {
        //console.log(mdl_localidad);
        //console.log(mdl_seccion);
        //console.log(mdl_nombre);
        //console.log(mdl_apaterno);
        //console.log(mdl_amaterno);
        //console.log(mdl_direccion);
        //console.log(mdl_cp);
        //console.log(mdl_tel_celular);
        //console.log(mdl_comentarios);
        //console.log(mdl_directivo);
        guardarDatosLider(mdl_localidad, mdl_seccion, mdl_cp, mdl_directivo, mdl_nombre, mdl_apaterno, mdl_amaterno, mdl_direccion, mdl_tel_celular, mdl_comentarios);
    }
}

function validaCamposCoordinador() {
    //console.log("btn_guardar_datos_coordinador");
    let mdl_localidad = $("#mdl_coor_localidad").val();
    let mdl_seccion = $("#mdl_coor_seccion").val();
    let mdl_cp = $("#mdl_coor_cp").val();
    let mdl_directivo = $("#mdl_coor_datos_directivo").val();
    let mdl_lider = $("#mdl_coor_datos_lider").val();
    let mdl_nombre = $("#mdl_coor_nombre").val();
    let mdl_apaterno = $("#mdl_coor_apaterno").val();
    let mdl_amaterno = $("#mdl_coor_amaterno").val();
    let mdl_direccion = $("#mdl_coor_direccion").val();
    let mdl_tel_celular = $("#mdl_coor_tel_celular").val();
    let mdl_comentarios_old = $("#mdl_coor_comentarios").val();
    let mdl_comentarios = mdl_comentarios_old.length == 0 ? 'Sin Comentarios' : mdl_comentarios_old;

    if (mdl_localidad === '0000' || mdl_seccion === '0000' || mdl_nombre.length == 0 || mdl_apaterno.length == 0 ||
        mdl_amaterno.length == 0 || mdl_direccion.length == 0 || mdl_cp.length == 0 || mdl_tel_celular.length == 0) {
        swal("¡IMPORTANTE!", "Es necesario llenar todos los campos del formulario.", "warning");
    } else {
        //console.log(mdl_localidad);
        //console.log(mdl_seccion);
        //console.log(mdl_nombre);
        //console.log(mdl_apaterno);
        //console.log(mdl_amaterno);
        //console.log(mdl_direccion);
        //console.log(mdl_cp);
        //console.log(mdl_tel_celular);
        //console.log(mdl_comentarios);
        //console.log(mdl_directivo);
        //console.log(mdl_lider);
        guardarDatosCoordinador(mdl_localidad, mdl_seccion, mdl_cp, mdl_directivo, mdl_lider, mdl_nombre, mdl_apaterno, mdl_amaterno, mdl_direccion, mdl_tel_celular, mdl_comentarios);
    }
}

function validaCamposSimpatizante() {
    //console.log("btn_guardar_datos_simpatizante");
    let mdl_localidad = $("#mdl_simp_localidad").val();
    let mdl_seccion = $("#mdl_simp_seccion").val();
    let mdl_cp = $("#mdl_simp_cp").val();
    let mdl_directivo = $("#mdl_simp_datos_directivo").val();
    let mdl_lider = $("#mdl_simp_datos_lider").val();
    let mdl_coordinador = $("#mdl_simp_datos_coordinador").val();
    let mdl_nombre = $("#mdl_simp_nombre").val();
    let mdl_apaterno = $("#mdl_simp_apaterno").val();
    let mdl_amaterno = $("#mdl_simp_amaterno").val();
    let mdl_direccion = $("#mdl_simp_direccion").val();
    let mdl_tel_celular = $("#mdl_simp_tel_celular").val();
    let mdl_comentarios_old = $("#mdl_simp_comentarios").val();
    let mdl_comentarios = mdl_comentarios_old.length == 0 ? 'Sin Comentarios' : mdl_comentarios_old;

    if (mdl_localidad === '0000' || mdl_seccion === '0000' || mdl_nombre.length == 0 || mdl_apaterno.length == 0 ||
        mdl_amaterno.length == 0 || mdl_direccion.length == 0 || mdl_cp.length == 0 || mdl_tel_celular.length == 0) {
        swal("¡IMPORTANTE!", "Es necesario llenar todos los campos del formulario.", "warning");
    } else {
        //console.log(mdl_localidad);
        //console.log(mdl_seccion);
        //console.log(mdl_nombre);
        //console.log(mdl_apaterno);
        //console.log(mdl_amaterno);
        //console.log(mdl_direccion);
        //console.log(mdl_cp);
        //console.log(mdl_tel_celular);
        //console.log(mdl_comentarios);
        //console.log(mdl_directivo);
        //console.log(mdl_lider);
        //console.log(mdl_coordinador);
        guardarDatosSimpatizante(mdl_localidad, mdl_seccion, mdl_cp, mdl_directivo, mdl_lider, mdl_coordinador, mdl_nombre, mdl_apaterno, mdl_amaterno, mdl_direccion, mdl_tel_celular, mdl_comentarios);
    }
}

function validaCamposEditarSimpatizante() {
    //console.log("btn_guardar_datos_simpatizante");
    let mdl_localidad = $("#mdl_editar_simp_localidad").val();
    let mdl_seccion = $("#mdl_editar_simp_seccion").val();
    let mdl_cp = $("#mdl_editar_simp_cp").val();
    let mdl_directivo = $("#mdl_editar_simp_datos_directivo").val();
    let mdl_lider = $("#mdl_editar_simp_datos_lider").val();
    let mdl_coordinador = $("#mdl_editar_simp_datos_coordinador").val();
    let mdl_nombre = $("#mdl_editar_simp_nombre").val();
    let mdl_apaterno = $("#mdl_editar_simp_apaterno").val();
    let mdl_amaterno = $("#mdl_editar_simp_amaterno").val();
    let mdl_direccion = $("#mdl_editar_simp_direccion").val();
    let mdl_tel_celular = $("#mdl_editar_simp_tel_celular").val();
    let mdl_comentarios_old = $("#mdl_editar_simp_comentarios").val();
    let mdl_comentarios = mdl_comentarios_old.length == 0 ? 'Sin Comentarios' : mdl_comentarios_old;

    if (mdl_localidad === '0000' || mdl_seccion === '0000' || mdl_nombre.length == 0 || mdl_apaterno.length == 0 ||
        mdl_amaterno.length == 0 || mdl_direccion.length == 0 || mdl_cp.length == 0 || mdl_tel_celular.length == 0) {
        swal("¡IMPORTANTE!", "Es necesario llenar todos los campos del formulario.", "warning");
    } else {
        let mdl_simpine_id = $("#span_simpine_id").text();
        console.log(mdl_localidad);
        console.log(mdl_seccion);
        console.log(mdl_nombre);
        console.log(mdl_apaterno);
        console.log(mdl_amaterno);
        console.log(mdl_direccion);
        console.log(mdl_cp);
        console.log(mdl_tel_celular);
        console.log(mdl_comentarios);
        console.log(mdl_directivo);
        console.log(mdl_lider);
        console.log(mdl_coordinador);
        console.log(mdl_simpine_id);
        guardarDatosSimpatizanteIne(mdl_simpine_id, mdl_localidad, mdl_seccion, mdl_cp, mdl_directivo, mdl_lider, mdl_coordinador, mdl_nombre, mdl_apaterno, mdl_amaterno, mdl_direccion, mdl_tel_celular, mdl_comentarios);
    }
}

function colocaCP(localidad, tipo_modal) {
    //console.log(tipo_modal);
    switch (tipo_modal) {
        case 'Directivo':
            switch (localidad) {
                case "Ejidos de Cambray":
                    //console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56300');
                    break;
                case "San Francisco Acuexcomac":
                    //console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56300');
                    break;
                case "San Salvador Atenco":
                    //console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56300');
                    break;
                case "Santa Gertrudis":
                    //console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56300');
                    break;
                case "La Noria":
                    //console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56303');
                    break;
                case "San Lazarito":
                    //console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56303');
                    break;
                case "Ejidal San Salvador":
                    //console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56303');
                    break;
                case "Hacienda la Grande Fracción Uno":
                    //console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56303');
                    break;
                case "Zapotlán":
                    //console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56304');
                    break;
                case "La Pastoría":
                    //console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56304');
                    break;
                case "Francisco I Madero":
                    //console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56305');
                    break;
                case "Ejido San Salvador Acuexcomac (Ejido la PurIsima)":
                    //console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56305');
                    break;
                case "El Amanal":
                    //console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56305');
                    break;
                case "Ejido la Magdalena Panoaya":
                    //console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56305');
                    break;
                case "Ejido de San Cristóbal Nexquipayac":
                    //console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56306');
                    break;
                case "Los Hornos (El Presidio)":
                    //console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56306');
                    break;
                case "Nueva Santa Rosa":
                    //console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56310');
                    break;
                case "Nueva Santa Rosa-Granjas el Arenal":
                    //console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56310');
                    break;
                case "El Salado":
                    //console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56310');
                    break;
                case "Santa Isabel Ixtapan":
                    //console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56314');
                    break;
                case "Nezahualcoyotl - Ixtapan":
                    //console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56314');
                    break;
                case "San Cristóbal Nexquipayac":
                    //console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56315');
                    break;
                case "Granjas la Purísima":
                    //console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56315');
                    break;
                case "Las Salinas":
                    //console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56315');
                    break;
                case "Benito Quezada":
                    //console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56315');
                    break;
                case "Chilileco":
                    //console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56315');
                    break;
                case "La Purisima-La Purisima Norte":
                    //console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56315');
                    break;
                default:
                    //console.log("Sin de localidad");
                    $("#mdl_directivo_cp").val("");
                    break;
            }
            break;
        case 'Lider':
            switch (localidad) {
                case "Ejidos de Cambray":
                    //console.log(localidad);
                    $("#mdl_lider_cp").val("");
                    $("#mdl_lider_cp").val('56300');
                    break;
                case "San Francisco Acuexcomac":
                    //console.log(localidad);
                    $("#mdl_lider_cp").val("");
                    $("#mdl_lider_cp").val('56300');
                    break;
                case "San Salvador Atenco":
                    //console.log(localidad);
                    $("#mdl_lider_cp").val("");
                    $("#mdl_lider_cp").val('56300');
                    break;
                case "Santa Gertrudis":
                    //console.log(localidad);
                    $("#mdl_lider_cp").val("");
                    $("#mdl_lider_cp").val('56300');
                    break;
                case "La Noria":
                    //console.log(localidad);
                    $("#mdl_lider_cp").val("");
                    $("#mdl_lider_cp").val('56303');
                    break;
                case "San Lazarito":
                    //console.log(localidad);
                    $("#mdl_lider_cp").val("");
                    $("#mdl_lider_cp").val('56303');
                    break;
                case "Ejidal San Salvador":
                    //console.log(localidad);
                    $("#mdl_lider_cp").val("");
                    $("#mdl_lider_cp").val('56303');
                    break;
                case "Hacienda la Grande Fracción Uno":
                    //console.log(localidad);
                    $("#mdl_lider_cp").val("");
                    $("#mdl_lider_cp").val('56303');
                    break;
                case "Zapotlán":
                    //console.log(localidad);
                    $("#mdl_lider_cp").val("");
                    $("#mdl_lider_cp").val('56304');
                    break;
                case "La Pastoría":
                    //console.log(localidad);
                    $("#mdl_lider_cp").val("");
                    $("#mdl_lider_cp").val('56304');
                    break;
                case "Francisco I Madero":
                    //console.log(localidad);
                    $("#mdl_lider_cp").val("");
                    $("#mdl_lider_cp").val('56305');
                    break;
                case "Ejido San Salvador Acuexcomac (Ejido la PurIsima)":
                    //console.log(localidad);
                    $("#mdl_lider_cp").val("");
                    $("#mdl_lider_cp").val('56305');
                    break;
                case "El Amanal":
                    //console.log(localidad);
                    $("#mdl_lider_cp").val("");
                    $("#mdl_lider_cp").val('56305');
                    break;
                case "Ejido la Magdalena Panoaya":
                    //console.log(localidad);
                    $("#mdl_lider_cp").val("");
                    $("#mdl_lider_cp").val('56305');
                    break;
                case "Ejido de San Cristóbal Nexquipayac":
                    //console.log(localidad);
                    $("#mdl_lider_cp").val("");
                    $("#mdl_lider_cp").val('56306');
                    break;
                case "Los Hornos (El Presidio)":
                    //console.log(localidad);
                    $("#mdl_lider_cp").val("");
                    $("#mdl_lider_cp").val('56306');
                    break;
                case "Nueva Santa Rosa":
                    //console.log(localidad);
                    $("#mdl_lider_cp").val("");
                    $("#mdl_lider_cp").val('56310');
                    break;
                case "Nueva Santa Rosa-Granjas el Arenal":
                    //console.log(localidad);
                    $("#mdl_lider_cp").val("");
                    $("#mdl_lider_cp").val('56310');
                    break;
                case "El Salado":
                    //console.log(localidad);
                    $("#mdl_lider_cp").val("");
                    $("#mdl_lider_cp").val('56310');
                    break;
                case "Santa Isabel Ixtapan":
                    //console.log(localidad);
                    $("#mdl_lider_cp").val("");
                    $("#mdl_lider_cp").val('56314');
                    break;
                case "Nezahualcoyotl - Ixtapan":
                    //console.log(localidad);
                    $("#mdl_lider_cp").val("");
                    $("#mdl_lider_cp").val('56314');
                    break;
                case "San Cristóbal Nexquipayac":
                    //console.log(localidad);
                    $("#mdl_lider_cp").val("");
                    $("#mdl_lider_cp").val('56315');
                    break;
                case "Granjas la Purísima":
                    //console.log(localidad);
                    $("#mdl_lider_cp").val("");
                    $("#mdl_lider_cp").val('56315');
                    break;
                case "Las Salinas":
                    //console.log(localidad);
                    $("#mdl_lider_cp").val("");
                    $("#mdl_lider_cp").val('56315');
                    break;
                case "Benito Quezada":
                    //console.log(localidad);
                    $("#mdl_lider_cp").val("");
                    $("#mdl_lider_cp").val('56315');
                    break;
                case "Chilileco":
                    //console.log(localidad);
                    $("#mdl_lider_cp").val("");
                    $("#mdl_lider_cp").val('56315');
                    break;
                case "La Purisima-La Purisima Norte":
                    //console.log(localidad);
                    $("#mdl_lider_cp").val("");
                    $("#mdl_lider_cp").val('56315');
                    break;
                default:
                    //console.log("Sin de localidad");
                    $("#mdl_lider_cp").val("");
                    break;
            }
            break;
        case 'Coordinador':
            switch (localidad) {
                case "Ejidos de Cambray":
                    //console.log(localidad);
                    $("#mdl_coor_cp").val("");
                    $("#mdl_coor_cp").val('56300');
                    break;
                case "San Francisco Acuexcomac":
                    //console.log(localidad);
                    $("#mdl_coor_cp").val("");
                    $("#mdl_coor_cp").val('56300');
                    break;
                case "San Salvador Atenco":
                    //console.log(localidad);
                    $("#mdl_coor_cp").val("");
                    $("#mdl_coor_cp").val('56300');
                    break;
                case "Santa Gertrudis":
                    //console.log(localidad);
                    $("#mdl_coor_cp").val("");
                    $("#mdl_coor_cp").val('56300');
                    break;
                case "La Noria":
                    //console.log(localidad);
                    $("#mdl_coor_cp").val("");
                    $("#mdl_coor_cp").val('56303');
                    break;
                case "San Lazarito":
                    //console.log(localidad);
                    $("#mdl_coor_cp").val("");
                    $("#mdl_coor_cp").val('56303');
                    break;
                case "Ejidal San Salvador":
                    //console.log(localidad);
                    $("#mdl_coor_cp").val("");
                    $("#mdl_coor_cp").val('56303');
                    break;
                case "Hacienda la Grande Fracción Uno":
                    //console.log(localidad);
                    $("#mdl_coor_cp").val("");
                    $("#mdl_coor_cp").val('56303');
                    break;
                case "Zapotlán":
                    //console.log(localidad);
                    $("#mdl_coor_cp").val("");
                    $("#mdl_coor_cp").val('56304');
                    break;
                case "La Pastoría":
                    //console.log(localidad);
                    $("#mdl_coor_cp").val("");
                    $("#mdl_coor_cp").val('56304');
                    break;
                case "Francisco I Madero":
                    //console.log(localidad);
                    $("#mdl_coor_cp").val("");
                    $("#mdl_coor_cp").val('56305');
                    break;
                case "Ejido San Salvador Acuexcomac (Ejido la PurIsima)":
                    //console.log(localidad);
                    $("#mdl_coor_cp").val("");
                    $("#mdl_coor_cp").val('56305');
                    break;
                case "El Amanal":
                    //console.log(localidad);
                    $("#mdl_coor_cp").val("");
                    $("#mdl_coor_cp").val('56305');
                    break;
                case "Ejido la Magdalena Panoaya":
                    //console.log(localidad);
                    $("#mdl_coor_cp").val("");
                    $("#mdl_coor_cp").val('56305');
                    break;
                case "Ejido de San Cristóbal Nexquipayac":
                    //console.log(localidad);
                    $("#mdl_coor_cp").val("");
                    $("#mdl_coor_cp").val('56306');
                    break;
                case "Los Hornos (El Presidio)":
                    //console.log(localidad);
                    $("#mdl_coor_cp").val("");
                    $("#mdl_coor_cp").val('56306');
                    break;
                case "Nueva Santa Rosa":
                    //console.log(localidad);
                    $("#mdl_coor_cp").val("");
                    $("#mdl_coor_cp").val('56310');
                    break;
                case "Nueva Santa Rosa-Granjas el Arenal":
                    //console.log(localidad);
                    $("#mdl_coor_cp").val("");
                    $("#mdl_coor_cp").val('56310');
                    break;
                case "El Salado":
                    //console.log(localidad);
                    $("#mdl_coor_cp").val("");
                    $("#mdl_coor_cp").val('56310');
                    break;
                case "Santa Isabel Ixtapan":
                    //console.log(localidad);
                    $("#mdl_coor_cp").val("");
                    $("#mdl_coor_cp").val('56314');
                    break;
                case "Nezahualcoyotl - Ixtapan":
                    //console.log(localidad);
                    $("#mdl_coor_cp").val("");
                    $("#mdl_coor_cp").val('56314');
                    break;
                case "San Cristóbal Nexquipayac":
                    //console.log(localidad);
                    $("#mdl_coor_cp").val("");
                    $("#mdl_coor_cp").val('56315');
                    break;
                case "Granjas la Purísima":
                    //console.log(localidad);
                    $("#mdl_coor_cp").val("");
                    $("#mdl_coor_cp").val('56315');
                    break;
                case "Las Salinas":
                    //console.log(localidad);
                    $("#mdl_coor_cp").val("");
                    $("#mdl_coor_cp").val('56315');
                    break;
                case "Benito Quezada":
                    //console.log(localidad);
                    $("#mdl_coor_cp").val("");
                    $("#mdl_coor_cp").val('56315');
                    break;
                case "Chilileco":
                    //console.log(localidad);
                    $("#mdl_coor_cp").val("");
                    $("#mdl_coor_cp").val('56315');
                    break;
                case "La Purisima-La Purisima Norte":
                    //console.log(localidad);
                    $("#mdl_coor_cp").val("");
                    $("#mdl_coor_cp").val('56315');
                    break;
                default:
                    //console.log("Sin de localidad");
                    $("#mdl_coor_cp").val("");
                    break;
            }
            break;
        case 'Simpatizante':
            switch (localidad) {
                case "Ejidos de Cambray":
                    //console.log(localidad);
                    $("#mdl_simp_cp").val("");
                    $("#mdl_simp_cp").val('56300');
                    break;
                case "San Francisco Acuexcomac":
                    //console.log(localidad);
                    $("#mdl_simp_cp").val("");
                    $("#mdl_simp_cp").val('56300');
                    break;
                case "San Salvador Atenco":
                    //console.log(localidad);
                    $("#mdl_simp_cp").val("");
                    $("#mdl_simp_cp").val('56300');
                    break;
                case "Santa Gertrudis":
                    //console.log(localidad);
                    $("#mdl_simp_cp").val("");
                    $("#mdl_simp_cp").val('56300');
                    break;
                case "La Noria":
                    //console.log(localidad);
                    $("#mdl_simp_cp").val("");
                    $("#mdl_simp_cp").val('56303');
                    break;
                case "San Lazarito":
                    //console.log(localidad);
                    $("#mdl_simp_cp").val("");
                    $("#mdl_simp_cp").val('56303');
                    break;
                case "Ejidal San Salvador":
                    //console.log(localidad);
                    $("#mdl_simp_cp").val("");
                    $("#mdl_simp_cp").val('56303');
                    break;
                case "Hacienda la Grande Fracción Uno":
                    //console.log(localidad);
                    $("#mdl_simp_cp").val("");
                    $("#mdl_simp_cp").val('56303');
                    break;
                case "Zapotlán":
                    //console.log(localidad);
                    $("#mdl_simp_cp").val("");
                    $("#mdl_simp_cp").val('56304');
                    break;
                case "La Pastoría":
                    //console.log(localidad);
                    $("#mdl_simp_cp").val("");
                    $("#mdl_simp_cp").val('56304');
                    break;
                case "Francisco I Madero":
                    //console.log(localidad);
                    $("#mdl_simp_cp").val("");
                    $("#mdl_simp_cp").val('56305');
                    break;
                case "Ejido San Salvador Acuexcomac (Ejido la PurIsima)":
                    //console.log(localidad);
                    $("#mdl_simp_cp").val("");
                    $("#mdl_simp_cp").val('56305');
                    break;
                case "El Amanal":
                    //console.log(localidad);
                    $("#mdl_simp_cp").val("");
                    $("#mdl_simp_cp").val('56305');
                    break;
                case "Ejido la Magdalena Panoaya":
                    //console.log(localidad);
                    $("#mdl_simp_cp").val("");
                    $("#mdl_simp_cp").val('56305');
                    break;
                case "Ejido de San Cristóbal Nexquipayac":
                    //console.log(localidad);
                    $("#mdl_simp_cp").val("");
                    $("#mdl_simp_cp").val('56306');
                    break;
                case "Los Hornos (El Presidio)":
                    //console.log(localidad);
                    $("#mdl_simp_cp").val("");
                    $("#mdl_simp_cp").val('56306');
                    break;
                case "Nueva Santa Rosa":
                    //console.log(localidad);
                    $("#mdl_simp_cp").val("");
                    $("#mdl_simp_cp").val('56310');
                    break;
                case "Nueva Santa Rosa-Granjas el Arenal":
                    //console.log(localidad);
                    $("#mdl_simp_cp").val("");
                    $("#mdl_simp_cp").val('56310');
                    break;
                case "El Salado":
                    //console.log(localidad);
                    $("#mdl_simp_cp").val("");
                    $("#mdl_simp_cp").val('56310');
                    break;
                case "Santa Isabel Ixtapan":
                    //console.log(localidad);
                    $("#mdl_simp_cp").val("");
                    $("#mdl_simp_cp").val('56314');
                    break;
                case "Nezahualcoyotl - Ixtapan":
                    //console.log(localidad);
                    $("#mdl_simp_cp").val("");
                    $("#mdl_simp_cp").val('56314');
                    break;
                case "San Cristóbal Nexquipayac":
                    //console.log(localidad);
                    $("#mdl_simp_cp").val("");
                    $("#mdl_simp_cp").val('56315');
                    break;
                case "Granjas la Purísima":
                    //console.log(localidad);
                    $("#mdl_simp_cp").val("");
                    $("#mdl_simp_cp").val('56315');
                    break;
                case "Las Salinas":
                    //console.log(localidad);
                    $("#mdl_simp_cp").val("");
                    $("#mdl_simp_cp").val('56315');
                    break;
                case "Benito Quezada":
                    //console.log(localidad);
                    $("#mdl_simp_cp").val("");
                    $("#mdl_simp_cp").val('56315');
                    break;
                case "Chilileco":
                    //console.log(localidad);
                    $("#mdl_simp_cp").val("");
                    $("#mdl_simp_cp").val('56315');
                    break;
                case "La Purisima-La Purisima Norte":
                    //console.log(localidad);
                    $("#mdl_simp_cp").val("");
                    $("#mdl_simp_cp").val('56315');
                    break;
                default:
                    //console.log("Sin de localidad");
                    $("#mdl_simp_cp").val("");
                    break;
            }
            break;
        case 'EditarSimpatizante':
            switch (localidad) {
                case "Ejidos de Cambray":
                    //console.log(localidad);
                    $("#mdl_editar_simp_cp").val("");
                    $("#mdl_editar_simp_cp").val('56300');
                    break;
                case "San Francisco Acuexcomac":
                    //console.log(localidad);
                    $("#mdl_editar_simp_cp").val("");
                    $("#mdl_editar_simp_cp").val('56300');
                    break;
                case "San Salvador Atenco":
                    //console.log(localidad);
                    $("#mdl_editar_simp_cp").val("");
                    $("#mdl_editar_simp_cp").val('56300');
                    break;
                case "Santa Gertrudis":
                    //console.log(localidad);
                    $("#mdl_editar_simp_cp").val("");
                    $("#mdl_editar_simp_cp").val('56300');
                    break;
                case "La Noria":
                    //console.log(localidad);
                    $("#mdl_editar_simp_cp").val("");
                    $("#mdl_editar_simp_cp").val('56303');
                    break;
                case "San Lazarito":
                    //console.log(localidad);
                    $("#mdl_editar_simp_cp").val("");
                    $("#mdl_editar_simp_cp").val('56303');
                    break;
                case "Ejidal San Salvador":
                    //console.log(localidad);
                    $("#mdl_editar_simp_cp").val("");
                    $("#mdl_editar_simp_cp").val('56303');
                    break;
                case "Hacienda la Grande Fracción Uno":
                    //console.log(localidad);
                    $("#mdl_editar_simp_cp").val("");
                    $("#mdl_editar_simp_cp").val('56303');
                    break;
                case "Zapotlán":
                    //console.log(localidad);
                    $("#mdl_editar_simp_cp").val("");
                    $("#mdl_editar_simp_cp").val('56304');
                    break;
                case "La Pastoría":
                    //console.log(localidad);
                    $("#mdl_editar_simp_cp").val("");
                    $("#mdl_editar_simp_cp").val('56304');
                    break;
                case "Francisco I Madero":
                    //console.log(localidad);
                    $("#mdl_editar_simp_cp").val("");
                    $("#mdl_editar_simp_cp").val('56305');
                    break;
                case "Ejido San Salvador Acuexcomac (Ejido la PurIsima)":
                    //console.log(localidad);
                    $("#mdl_editar_simp_cp").val("");
                    $("#mdl_editar_simp_cp").val('56305');
                    break;
                case "El Amanal":
                    //console.log(localidad);
                    $("#mdl_editar_simp_cp").val("");
                    $("#mdl_editar_simp_cp").val('56305');
                    break;
                case "Ejido la Magdalena Panoaya":
                    //console.log(localidad);
                    $("#mdl_editar_simp_cp").val("");
                    $("#mdl_editar_simp_cp").val('56305');
                    break;
                case "Ejido de San Cristóbal Nexquipayac":
                    //console.log(localidad);
                    $("#mdl_editar_simp_cp").val("");
                    $("#mdl_editar_simp_cp").val('56306');
                    break;
                case "Los Hornos (El Presidio)":
                    //console.log(localidad);
                    $("#mdl_editar_simp_cp").val("");
                    $("#mdl_editar_simp_cp").val('56306');
                    break;
                case "Nueva Santa Rosa":
                    //console.log(localidad);
                    $("#mdl_editar_simp_cp").val("");
                    $("#mdl_editar_simp_cp").val('56310');
                    break;
                case "Nueva Santa Rosa-Granjas el Arenal":
                    //console.log(localidad);
                    $("#mdl_editar_simp_cp").val("");
                    $("#mdl_editar_simp_cp").val('56310');
                    break;
                case "El Salado":
                    //console.log(localidad);
                    $("#mdl_editar_simp_cp").val("");
                    $("#mdl_editar_simp_cp").val('56310');
                    break;
                case "Santa Isabel Ixtapan":
                    //console.log(localidad);
                    $("#mdl_editar_simp_cp").val("");
                    $("#mdl_editar_simp_cp").val('56314');
                    break;
                case "Nezahualcoyotl - Ixtapan":
                    //console.log(localidad);
                    $("#mdl_editar_simp_cp").val("");
                    $("#mdl_editar_simp_cp").val('56314');
                    break;
                case "San Cristóbal Nexquipayac":
                    //console.log(localidad);
                    $("#mdl_editar_simp_cp").val("");
                    $("#mdl_editar_simp_cp").val('56315');
                    break;
                case "Granjas la Purísima":
                    //console.log(localidad);
                    $("#mdl_editar_simp_cp").val("");
                    $("#mdl_editar_simp_cp").val('56315');
                    break;
                case "Las Salinas":
                    //console.log(localidad);
                    $("#mdl_editar_simp_cp").val("");
                    $("#mdl_editar_simp_cp").val('56315');
                    break;
                case "Benito Quezada":
                    //console.log(localidad);
                    $("#mdl_editar_simp_cp").val("");
                    $("#mdl_editar_simp_cp").val('56315');
                    break;
                case "Chilileco":
                    //console.log(localidad);
                    $("#mdl_editar_simp_cp").val("");
                    $("#mdl_editar_simp_cp").val('56315');
                    break;
                case "La Purisima-La Purisima Norte":
                    //console.log(localidad);
                    $("#mdl_editar_simp_cp").val("");
                    $("#mdl_editar_simp_cp").val('56315');
                    break;
                default:
                    //console.log("Sin de localidad");
                    $("#mdl_editar_simp_cp").val("");
                    break;
            }
            break;
        default:
            break;
    }


}

function guardarDatosDirectivo(mdl_localidad, mdl_seccion, mdl_cp, mdl_nombre, mdl_apaterno, mdl_amaterno, mdl_direccion, mdl_tel_celular, mdl_email, mdl_comentarios) {
    $.ajax({
        url: './ra.view/RegistrarNuevoAfiliadoView.php',
        dataType: 'json',
        type: 'post',
        data: {
            mdl_localidad: mdl_localidad,
            mdl_seccion: mdl_seccion,
            mdl_cp: mdl_cp,
            mdl_nombre: mdl_nombre,
            mdl_apaterno: mdl_apaterno,
            mdl_amaterno: mdl_amaterno,
            mdl_direccion: mdl_direccion,
            mdl_tel_celular: mdl_tel_celular,
            mdl_email: mdl_email,
            mdl_comentarios: mdl_comentarios
        },
        success: function(data) {
            //console.log(data);
            if (data.sucess == true) {
                //console.log("Fue correcto");
                swal("Éxito", "Gracias por afiliarse con nosotros.\nSus datos están seguros.", "success")
                    .then((confirm) => {
                        if (confirm) {
                            $(".bd-nuevo-director-modal-lg").modal('hide');
                            window.location.reload();
                            //mostrarTablaAfiliados();
                        }
                    });
            } else {
                //console.log("Fue incorrecto");
                swal("Advertencia", "Existen problemas de conexión. \nFavor de intentarlo mas tarde", "warning");
            }
        }
    });
}

function guardarDatosLider(mdl_localidad, mdl_seccion, mdl_cp, mdl_directivo, mdl_nombre, mdl_apaterno, mdl_amaterno, mdl_direccion, mdl_tel_celular, mdl_comentarios) {
    $.ajax({
        url: './ra.view/RegistrarNuevoLiderView.php',
        dataType: 'json',
        type: 'post',
        data: {
            mdl_localidad: mdl_localidad,
            mdl_seccion: mdl_seccion,
            mdl_cp: mdl_cp,
            mdl_directivo: mdl_directivo,
            mdl_nombre: mdl_nombre,
            mdl_apaterno: mdl_apaterno,
            mdl_amaterno: mdl_amaterno,
            mdl_direccion: mdl_direccion,
            mdl_tel_celular: mdl_tel_celular,
            mdl_comentarios: mdl_comentarios
        },
        success: function(data) {
            //console.log(data);
            if (data.sucess == true) {
                //console.log("Fue correcto");
                swal("Éxito", "Gracias por afiliarse con nosotros.\nSus datos están seguros.", "success")
                    .then((confirm) => {
                        if (confirm) {
                            $(".bd-nuevo-lider-modal-lg").modal('hide');
                            window.location.reload();
                            //mostrarTablaAfiliados();
                        }
                    });
            } else {
                //console.log("Fue incorrecto");
                swal("Advertencia", "Existen problemas de conexión. \nFavor de intentarlo mas tarde", "warning");
            }
        }
    });
}

function guardarDatosCoordinador(mdl_localidad, mdl_seccion, mdl_cp, mdl_directivo, mdl_lider, mdl_nombre, mdl_apaterno, mdl_amaterno, mdl_direccion, mdl_tel_celular, mdl_comentarios) {
    $.ajax({
        url: './ra.view/RegistrarNuevoCoordinadorView.php',
        dataType: 'json',
        type: 'post',
        data: {
            mdl_localidad: mdl_localidad,
            mdl_seccion: mdl_seccion,
            mdl_cp: mdl_cp,
            mdl_directivo: mdl_directivo,
            mdl_lider: mdl_lider,
            mdl_nombre: mdl_nombre,
            mdl_apaterno: mdl_apaterno,
            mdl_amaterno: mdl_amaterno,
            mdl_direccion: mdl_direccion,
            mdl_tel_celular: mdl_tel_celular,
            mdl_comentarios: mdl_comentarios
        },
        success: function(data) {
            //console.log(data);
            if (data.sucess == true) {
                //console.log("Fue correcto");
                swal("Éxito", "Gracias por afiliarse con nosotros.\nSus datos están seguros.", "success")
                    .then((confirm) => {
                        if (confirm) {
                            $(".bd-nuevo-coordinador-modal-lg").modal('hide');
                            window.location.reload();
                            //mostrarTablaAfiliados();
                        }
                    });
            } else {
                //console.log("Fue incorrecto");
                swal("Advertencia", "Existen problemas de conexión. \nFavor de intentarlo mas tarde", "warning");
            }
        }
    });
}

function guardarDatosSimpatizante(mdl_localidad, mdl_seccion, mdl_cp, mdl_directivo, mdl_lider, mdl_coordinador, mdl_nombre, mdl_apaterno, mdl_amaterno, mdl_direccion, mdl_tel_celular, mdl_comentarios) {
    $.ajax({
        url: './ra.view/RegistrarNuevoSimpatizanteView.php',
        dataType: 'json',
        type: 'post',
        data: {
            mdl_localidad: mdl_localidad,
            mdl_seccion: mdl_seccion,
            mdl_cp: mdl_cp,
            mdl_directivo: mdl_directivo,
            mdl_lider: mdl_lider,
            mdl_coordinador: mdl_coordinador,
            mdl_nombre: mdl_nombre,
            mdl_apaterno: mdl_apaterno,
            mdl_amaterno: mdl_amaterno,
            mdl_direccion: mdl_direccion,
            mdl_tel_celular: mdl_tel_celular,
            mdl_comentarios: mdl_comentarios
        },
        success: function(data) {
            //console.log(data);
            if (data.sucess == true) {
                //console.log("Fue correcto");
                swal("Éxito", "Gracias por afiliarse con nosotros.\nSus datos están seguros.", "success")
                    .then((confirm) => {
                        if (confirm) {
                            $(".bd-nuevo-coordinador-modal-lg").modal('hide');
                            window.location.reload();
                            //mostrarTablaAfiliados();
                        }
                    });
            } else {
                //console.log("Fue incorrecto");
                swal("Advertencia", "Existen problemas de conexión. \nFavor de intentarlo mas tarde", "warning");
            }
        }
    });
}

function guardarDatosSimpatizanteIne(mdl_simpine_id, mdl_localidad, mdl_seccion, mdl_cp, mdl_directivo, mdl_lider, mdl_coordinador, mdl_nombre, mdl_apaterno, mdl_amaterno, mdl_direccion, mdl_tel_celular, mdl_comentarios) {
    $.ajax({
        url: './ra.view/EditarSimpatizanteIneView.php',
        dataType: 'json',
        type: 'post',
        data: {
            mdl_simpine_id: mdl_simpine_id,
            mdl_localidad: mdl_localidad,
            mdl_seccion: mdl_seccion,
            mdl_cp: mdl_cp,
            mdl_directivo: mdl_directivo,
            mdl_lider: mdl_lider,
            mdl_coordinador: mdl_coordinador,
            mdl_nombre: mdl_nombre,
            mdl_apaterno: mdl_apaterno,
            mdl_amaterno: mdl_amaterno,
            mdl_direccion: mdl_direccion,
            mdl_tel_celular: mdl_tel_celular,
            mdl_comentarios: mdl_comentarios
        },
        success: function(data) {
            //console.log(data);
            if (data.sucess == true) {
                console.log("Fue correcto");
                guardarDatosSimpatizante(mdl_localidad, mdl_seccion, mdl_cp, mdl_directivo, mdl_lider, mdl_coordinador, mdl_nombre, mdl_apaterno, mdl_amaterno, mdl_direccion, mdl_tel_celular, mdl_comentarios);
                //swal("Éxito", "Gracias por afiliarse con nosotros.\nSus datos están seguros.", "success")
                //    .then((confirm) => {
                //        if (confirm) {
                //            $(".bd-nuevo-coordinador-modal-lg").modal('hide');
                //            window.location.reload();
                //            //mostrarTablaAfiliados();
                //        }
                //    });
            } else {
                //console.log("Fue incorrecto");
                swal("Advertencia", "Existen problemas de conexión. \nFavor de intentarlo mas tarde", "warning");
            }
        }
    });
}

function mostrarTablaDirectivos() {
    let table = $('#table_nuestros_directores').DataTable();
    table.destroy();
    $('#table_nuestros_directores').DataTable({
        "responsive": true,
        "paging": true,
        "info": true,
        "searching": true,
        "language": {
            'sProcessing': 'Procesando...',
            'sLengthMenu': 'Mostrar _MENU_ registros',
            'sZeroRecords': 'No se encontraron resultados',
            'sEmptyTable': 'Ningún dato disponible en esta tabla',
            'sInfo': 'Del _START_ al _END_ de un total de _TOTAL_ registros',
            'sInfoEmpty': 'Del 0 al 0 de un total de 0 registros',
            'sInfoFiltered': '(filtrado de un total de _MAX_ registros)',
            'sInfoPostFix': '',
            'sSearch': 'Buscar:',
            'sUrl': '',
            'sInfoThousands': ',',
            'sLoadingRecords': 'Cargando...',
            'oPaginate': {
                'sFirst': 'Primero',
                'sLast': 'Último',
                'sNext': 'Siguiente',
                'sPrevious': 'Anterior'
            },
            'oAria': {
                'sSortAscending': ': Activar para ordenar la columna de manera ascendente',
                'sSortDescending': ': Activar para ordenar la columna de manera descendente'
            }
        },
        "ajax": "./ra.view/MostrarDirectores.php",
        "columns": [
            { "data": "dire_id" },
            { "data": "dire_nombre_completo" },
            { "data": "dire_seccion" },
            { "data": "dire_direccion" },
            { "data": "dire_tel_celular" },
            { "data": "dire_accion" }
        ],
        "order": [
            [0, 'asc']
        ]
    });
}

function mostrarTablaLideres() {
    let table = $('#table_nuestros_lideres').DataTable();
    table.destroy();
    $('#table_nuestros_lideres').DataTable({
        "responsive": true,
        "paging": true,
        "info": true,
        "searching": true,
        "language": {
            'sProcessing': 'Procesando...',
            'sLengthMenu': 'Mostrar _MENU_ registros',
            'sZeroRecords': 'No se encontraron resultados',
            'sEmptyTable': 'Ningún dato disponible en esta tabla',
            'sInfo': 'Del _START_ al _END_ de un total de _TOTAL_ registros',
            'sInfoEmpty': 'Del 0 al 0 de un total de 0 registros',
            'sInfoFiltered': '(filtrado de un total de _MAX_ registros)',
            'sInfoPostFix': '',
            'sSearch': 'Buscar:',
            'sUrl': '',
            'sInfoThousands': ',',
            'sLoadingRecords': 'Cargando...',
            'oPaginate': {
                'sFirst': 'Primero',
                'sLast': 'Último',
                'sNext': 'Siguiente',
                'sPrevious': 'Anterior'
            },
            'oAria': {
                'sSortAscending': ': Activar para ordenar la columna de manera ascendente',
                'sSortDescending': ': Activar para ordenar la columna de manera descendente'
            }
        },
        "ajax": "./ra.view/MostrarLideres.php",
        "columns": [
            { "data": "lide_id" },
            { "data": "lide_nombre_completo" },
            { "data": "lide_seccion" },
            { "data": "lide_direccion" },
            { "data": "lide_tel_celular" },
            { "data": "lide_accion" }
        ],
        "order": [
            [0, 'asc']
        ]
    });
}

function mostrarTablaCoordinadores() {
    let table = $('#table_nuestros_coordinador').DataTable();
    table.destroy();
    $('#table_nuestros_coordinador').DataTable({
        "responsive": true,
        "paging": true,
        "info": true,
        "searching": true,
        "language": {
            'sProcessing': 'Procesando...',
            'sLengthMenu': 'Mostrar _MENU_ registros',
            'sZeroRecords': 'No se encontraron resultados',
            'sEmptyTable': 'Ningún dato disponible en esta tabla',
            'sInfo': 'Del _START_ al _END_ de un total de _TOTAL_ registros',
            'sInfoEmpty': 'Del 0 al 0 de un total de 0 registros',
            'sInfoFiltered': '(filtrado de un total de _MAX_ registros)',
            'sInfoPostFix': '',
            'sSearch': 'Buscar:',
            'sUrl': '',
            'sInfoThousands': ',',
            'sLoadingRecords': 'Cargando...',
            'oPaginate': {
                'sFirst': 'Primero',
                'sLast': 'Último',
                'sNext': 'Siguiente',
                'sPrevious': 'Anterior'
            },
            'oAria': {
                'sSortAscending': ': Activar para ordenar la columna de manera ascendente',
                'sSortDescending': ': Activar para ordenar la columna de manera descendente'
            }
        },
        "ajax": "./ra.view/MostrarCoordinador.php",
        "columns": [
            { "data": "coor_id" },
            { "data": "coor_nombre_completo" },
            { "data": "coor_seccion" },
            { "data": "coor_direccion" },
            { "data": "coor_tel_celular" },
            { "data": "lide_nombre_completo" }
        ],
        "order": [
            [0, 'asc']
        ]
    });
}

function mostrarTablaSimpatizantes() {
    let table = $('#table_nuestros_simpatizante').DataTable();
    table.destroy();
    $('#table_nuestros_simpatizante').DataTable({
        "responsive": true,
        "paging": true,
        "info": true,
        "searching": true,
        "language": {
            'sProcessing': 'Procesando...',
            'sLengthMenu': 'Mostrar _MENU_ registros',
            'sZeroRecords': 'No se encontraron resultados',
            'sEmptyTable': 'Ningún dato disponible en esta tabla',
            'sInfo': 'Del _START_ al _END_ de un total de _TOTAL_ registros',
            'sInfoEmpty': 'Del 0 al 0 de un total de 0 registros',
            'sInfoFiltered': '(filtrado de un total de _MAX_ registros)',
            'sInfoPostFix': '',
            'sSearch': 'Buscar:',
            'sUrl': '',
            'sInfoThousands': ',',
            'sLoadingRecords': 'Cargando...',
            'oPaginate': {
                'sFirst': 'Primero',
                'sLast': 'Último',
                'sNext': 'Siguiente',
                'sPrevious': 'Anterior'
            },
            'oAria': {
                'sSortAscending': ': Activar para ordenar la columna de manera ascendente',
                'sSortDescending': ': Activar para ordenar la columna de manera descendente'
            }
        },
        "ajax": "./ra.view/MostrarSimpatizante.php",
        "columns": [
            { "data": "simp_id" },
            { "data": "simp_nombre_completo" },
            { "data": "simp_seccion" },
            { "data": "simp_direccion" },
            { "data": "simp_tel_celular" },
            { "data": "coor_nombre_completo" },
            { "data": "lide_nombre_completo" },
            { "data": "simp_accion" }
        ],
        "order": [
            [0, 'asc']
        ]
    });
}

function mostrarTablaSimpatizantesIne() {
    let table = $('#table_nuestros_simpatizante_ine').DataTable();
    table.destroy();
    $('#table_nuestros_simpatizante_ine').DataTable({
        "responsive": true,
        "paging": true,
        "info": true,
        "searching": true,
        "language": {
            'sProcessing': 'Procesando...',
            'sLengthMenu': 'Mostrar _MENU_ registros',
            'sZeroRecords': 'No se encontraron resultados',
            'sEmptyTable': 'Ningún dato disponible en esta tabla',
            'sInfo': 'Del _START_ al _END_ de un total de _TOTAL_ registros',
            'sInfoEmpty': 'Del 0 al 0 de un total de 0 registros',
            'sInfoFiltered': '(filtrado de un total de _MAX_ registros)',
            'sInfoPostFix': '',
            'sSearch': 'Buscar:',
            'sUrl': '',
            'sInfoThousands': ',',
            'sLoadingRecords': 'Cargando...',
            'oPaginate': {
                'sFirst': 'Primero',
                'sLast': 'Último',
                'sNext': 'Siguiente',
                'sPrevious': 'Anterior'
            },
            'oAria': {
                'sSortAscending': ': Activar para ordenar la columna de manera ascendente',
                'sSortDescending': ': Activar para ordenar la columna de manera descendente'
            }
        },
        "ajax": "./ra.view/MostrarSimpatizanteIne.php",
        "columns": [
            { "data": "simpine_id" },
            { "data": "simpine_nombre_completo" },
            { "data": "simpine_seccion" },
            { "data": "simpine_comentario" },
            { "data": "simpine_fecha_movimiento" },
            { "data": "simp_accion" }
        ],
        "order": [
            [0, 'asc']
        ]
    });
}

function mostrarTablaSimpatizantesIneEnListaNominal() {
    let table = $('#table_nuestros_simpatizante_en_lista_nominal').DataTable();
    table.destroy();
    $('#table_nuestros_simpatizante_en_lista_nominal').DataTable({
        "responsive": true,
        "paging": true,
        "info": true,
        "searching": true,
        "language": {
            'sProcessing': 'Procesando...',
            'sLengthMenu': 'Mostrar _MENU_ registros',
            'sZeroRecords': 'No se encontraron resultados',
            'sEmptyTable': 'Ningún dato disponible en esta tabla',
            'sInfo': 'Del _START_ al _END_ de un total de _TOTAL_ registros',
            'sInfoEmpty': 'Del 0 al 0 de un total de 0 registros',
            'sInfoFiltered': '(filtrado de un total de _MAX_ registros)',
            'sInfoPostFix': '',
            'sSearch': 'Buscar:',
            'sUrl': '',
            'sInfoThousands': ',',
            'sLoadingRecords': 'Cargando...',
            'oPaginate': {
                'sFirst': 'Primero',
                'sLast': 'Último',
                'sNext': 'Siguiente',
                'sPrevious': 'Anterior'
            },
            'oAria': {
                'sSortAscending': ': Activar para ordenar la columna de manera ascendente',
                'sSortDescending': ': Activar para ordenar la columna de manera descendente'
            }
        },
        "ajax": "./ra.view/MostrarSimpatizanteEnListaNominal.php",
        "columns": [
            { "data": "simpinelisnom_nombre_completo" },
            { "data": "simpinelisnom_seccion" }
        ],
        "order": [
            [0, 'asc']
        ]
    });
    //let table = $('#table_nuestros_simpatizante').DataTable();
    //table.destroy();
    //$('#table_nuestros_simpatizante').DataTable({
    //    "responsive": true,
    //    "paging": true,
    //    "info": true,
    //    "searching": true,
    //    "language": {
    //        'sProcessing': 'Procesando...',
    //        'sLengthMenu': 'Mostrar _MENU_ registros',
    //        'sZeroRecords': 'No se encontraron resultados',
    //        'sEmptyTable': 'Ningún dato disponible en esta tabla',
    //        'sInfo': 'Del _START_ al _END_ de un total de _TOTAL_ registros',
    //        'sInfoEmpty': 'Del 0 al 0 de un total de 0 registros',
    //        'sInfoFiltered': '(filtrado de un total de _MAX_ registros)',
    //        'sInfoPostFix': '',
    //        'sSearch': 'Buscar:',
    //        'sUrl': '',
    //        'sInfoThousands': ',',
    //        'sLoadingRecords': 'Cargando...',
    //        'oPaginate': {
    //            'sFirst': 'Primero',
    //            'sLast': 'Último',
    //            'sNext': 'Siguiente',
    //            'sPrevious': 'Anterior'
    //        },
    //        'oAria': {
    //            'sSortAscending': ': Activar para ordenar la columna de manera ascendente',
    //            'sSortDescending': ': Activar para ordenar la columna de manera descendente'
    //        }
    //    },
    //    "ajax": "./ra.view/MostrarSimpatizante.php",
    //    "columns": [
    //        { "data": "simp_id" },
    //        { "data": "simp_nombre_completo" },
    //        { "data": "simp_seccion" },
    //        { "data": "simp_direccion" },
    //        { "data": "simp_tel_celular" },
    //        { "data": "coor_nombre_completo" },
    //        { "data": "lide_nombre_completo" }
    //    ],
    //    "order": [
    //        [0, 'asc']
    //    ]
    //});
}

function vaciaCampos(tipo) {
    switch (tipo) {
        case 'Directivo':
            $("#mdl_directivo_localidad").val('0000');
            $("#mdl_directivo_cp").val('');
            $("#mdl_directivo_seccion").val('0000');
            $("#mdl_directivo_nombre").val('');
            $("#mdl_directivo_apaterno").val('');
            $("#mdl_directivo_amaterno").val('');
            $("#mdl_directivo_direccion").val('');
            $("#mdl_directivo_tel_celular").val('');
            $("#mdl_directivo_email").val('');
            $("#mdl_directivo_comentarios").val('');
            break;
        case 'Lider':
            $("#mdl_lider_localidad").val('0000');
            $("#mdl_lider_cp").val('');
            $("#mdl_lider_seccion").val('0000');
            $("#mdl_datos_directivo").val('0');
            $("#mdl_lider_nombre").val('');
            $("#mdl_lider_apaterno").val('');
            $("#mdl_lider_amaterno").val('');
            $("#mdl_lider_direccion").val('');
            $("#mdl_lider_tel_celular").val('');
            $("#mdl_lider_comentarios").val('');
            break;
        case 'Coordinador':
            $("#mdl_coor_localidad").val('0000');
            $("#mdl_coor_cp").val('');
            $("#mdl_coor_seccion").val('0000');
            $("#mdl_coor_directivo").val('0');
            $("#mdl_coor_nombre").val('');
            $("#mdl_coor_apaterno").val('');
            $("#mdl_coor_amaterno").val('');
            $("#mdl_coor_direccion").val('');
            $("#mdl_coor_tel_celular").val('');
            $("#mdl_coor_comentarios").val('');
            break;
        case 'Simpatizante':
            $("#mdl_simp_localidad").val('0000');
            $("#mdl_simp_cp").val('');
            $("#mdl_simp_seccion").val('0000');
            $("#mdl_simp_directivo").val('0');
            $("#mdl_simp_nombre").val('');
            $("#mdl_simp_apaterno").val('');
            $("#mdl_simp_amaterno").val('');
            $("#mdl_simp_direccion").val('');
            $("#mdl_simp_tel_celular").val('');
            $("#mdl_simp_comentarios").val('');
            break;
        case 'EditarSimpatizante':
            $("#mdl_editar_simp_localidad").val('0000');
            $("#mdl_editar_simp_cp").val('');
            $("#mdl_editar_simp_seccion").val('');
            $("#mdl_editar_simp_nombre").val('');
            $("#mdl_editar_simp_apaterno").val('');
            $("#mdl_editar_simp_amaterno").val('');
            $("#mdl_editar_simp_direccion").val('');
            $("#mdl_editar_simp_tel_celular").val('');
            $("#mdl_editar_simp_comentarios").val('');
            $("#span_simpine_id").text('');
            break;
        default:
            break;
    }
}

function mostrarDatosDirectivos(modal) {
    switch (modal) {
        case 'Lider':
            $.ajax({
                method: "POST",
                dataType: 'json',
                url: "./ra.view/MostrarDatosDirectivosView.php"
            }).done(function(result) {
                console.log(result.success);
                if (result.success === true) {
                    $("#mdl_datos_directivo").empty();
                    $('#mdl_datos_directivo').append("<option value ='1'>Sin directivo</option>");
                    var array = result.result;
                    array.forEach(function(directivo, index) {
                        $('#mdl_datos_directivo').append("<option value = '" + directivo.dire_id + "'>" + directivo.dire_nombre_completo + "</option>");
                    });
                }
                console.log(result.result);
                /*switch (result.catalogo_success) {
                    case true:
                        var array_catalogo = result.catalogo_result;
                        array_catalogo.forEach(function(catalogo, index) {
                            $('#' + id_elemento).append("<option value = '" + catalogo.catalogo_id + "'>" + catalogo.catalogo_descripcion + "</option>");
                        });
                        break;
                    case false:
                        alert(result.catalogo_success);
                        break;
                }*/
            }).fail(function(error) {
                swal('¡ADVERTENCIA ERROR1!', 'PROBLEMAS DE CONEXIÓN.', 'warning');
            });
            break;
        case 'Coordinador':
            $.ajax({
                method: "POST",
                dataType: 'json',
                url: "./ra.view/MostrarDatosDirectivosView.php"
            }).done(function(result) {
                console.log(result.success);
                if (result.success === true) {
                    $("#mdl_coor_datos_directivo").empty();
                    $('#mdl_coor_datos_directivo').append("<option value ='1'>Sin directivo</option>");
                    var array = result.result;
                    array.forEach(function(directivo, index) {
                        $('#mdl_coor_datos_directivo').append("<option value = '" + directivo.dire_id + "'>" + directivo.dire_nombre_completo + "</option>");
                    });
                }
                console.log(result.result);
                /*switch (result.catalogo_success) {
                    case true:
                        var array_catalogo = result.catalogo_result;
                        array_catalogo.forEach(function(catalogo, index) {
                            $('#' + id_elemento).append("<option value = '" + catalogo.catalogo_id + "'>" + catalogo.catalogo_descripcion + "</option>");
                        });
                        break;
                    case false:
                        alert(result.catalogo_success);
                        break;
                }*/
            }).fail(function(error) {
                swal('¡ADVERTENCIA ERROR1!', 'PROBLEMAS DE CONEXIÓN.', 'warning');
            });
            break;
        case 'Simpatizante':
            $.ajax({
                method: "POST",
                dataType: 'json',
                url: "./ra.view/MostrarDatosDirectivosView.php"
            }).done(function(result) {
                console.log(result.success);
                if (result.success === true) {
                    $("#mdl_simp_datos_directivo").empty();
                    $('#mdl_simp_datos_directivo').append("<option value ='1'>Sin directivo</option>");
                    var array = result.result;
                    array.forEach(function(directivo, index) {
                        $('#mdl_simp_datos_directivo').append("<option value = '" + directivo.dire_id + "'>" + directivo.dire_nombre_completo + "</option>");
                    });
                }
                console.log(result.result);
                /*switch (result.catalogo_success) {
                    case true:
                        var array_catalogo = result.catalogo_result;
                        array_catalogo.forEach(function(catalogo, index) {
                            $('#' + id_elemento).append("<option value = '" + catalogo.catalogo_id + "'>" + catalogo.catalogo_descripcion + "</option>");
                        });
                        break;
                    case false:
                        alert(result.catalogo_success);
                        break;
                }*/
            }).fail(function(error) {
                swal('¡ADVERTENCIA ERROR1!', 'PROBLEMAS DE CONEXIÓN.', 'warning');
            });
            break;
        case 'EditarSimpatizante':
            $.ajax({
                method: "POST",
                dataType: 'json',
                url: "./ra.view/MostrarDatosDirectivosView.php"
            }).done(function(result) {
                console.log(result.success);
                if (result.success === true) {
                    $("#mdl_editar_simp_datos_directivo").empty();
                    $('#mdl_editar_simp_datos_directivo').append("<option value ='1'>Sin directivo</option>");
                    var array = result.result;
                    array.forEach(function(directivo, index) {
                        $('#mdl_editar_simp_datos_directivo').append("<option value = '" + directivo.dire_id + "'>" + directivo.dire_nombre_completo + "</option>");
                    });
                }
                console.log(result.result);
                /*switch (result.catalogo_success) {
                    case true:
                        var array_catalogo = result.catalogo_result;
                        array_catalogo.forEach(function(catalogo, index) {
                            $('#' + id_elemento).append("<option value = '" + catalogo.catalogo_id + "'>" + catalogo.catalogo_descripcion + "</option>");
                        });
                        break;
                    case false:
                        alert(result.catalogo_success);
                        break;
                }*/
            }).fail(function(error) {
                swal('¡ADVERTENCIA ERROR1!', 'PROBLEMAS DE CONEXIÓN.', 'warning');
            });
            break;
        default:
            break;
    }
}

function mostrarDatosLideres(modal) {
    switch (modal) {
        case 'Coordinador':
            $.ajax({
                method: "POST",
                dataType: 'json',
                url: "./ra.view/MostrarDatosLideresView.php"
            }).done(function(result) {
                console.log(result.success);
                if (result.success === true) {
                    $("#mdl_coor_datos_lider").empty();
                    $('#mdl_coor_datos_lider').append("<option value ='1'>Sin lider</option>");
                    var array = result.result;
                    array.forEach(function(lider, index) {
                        $('#mdl_coor_datos_lider').append("<option value = '" + lider.lide_id + "'>" + lider.lide_nombre_completo + "</option>");
                    });
                }
                console.log(result.result);
                /*switch (result.catalogo_success) {
                    case true:
                        var array_catalogo = result.catalogo_result;
                        array_catalogo.forEach(function(catalogo, index) {
                            $('#' + id_elemento).append("<option value = '" + catalogo.catalogo_id + "'>" + catalogo.catalogo_descripcion + "</option>");
                        });
                        break;
                    case false:
                        alert(result.catalogo_success);
                        break;
                }*/
            }).fail(function(error) {
                swal('¡ADVERTENCIA ERROR1!', 'PROBLEMAS DE CONEXIÓN.', 'warning');
            });
            break;
        case 'Simpatizante':
            $.ajax({
                method: "POST",
                dataType: 'json',
                url: "./ra.view/MostrarDatosLideresView.php"
            }).done(function(result) {
                console.log(result.success);
                if (result.success === true) {
                    $("#mdl_simp_datos_lider").empty();
                    $('#mdl_simp_datos_lider').append("<option value ='1'>Sin lider</option>");
                    var array = result.result;
                    array.forEach(function(lider, index) {
                        $('#mdl_simp_datos_lider').append("<option value = '" + lider.lide_id + "'>" + lider.lide_nombre_completo + "</option>");
                    });
                }
                console.log(result.result);
                /*switch (result.catalogo_success) {
                    case true:
                        var array_catalogo = result.catalogo_result;
                        array_catalogo.forEach(function(catalogo, index) {
                            $('#' + id_elemento).append("<option value = '" + catalogo.catalogo_id + "'>" + catalogo.catalogo_descripcion + "</option>");
                        });
                        break;
                    case false:
                        alert(result.catalogo_success);
                        break;
                }*/
            }).fail(function(error) {
                swal('¡ADVERTENCIA ERROR1!', 'PROBLEMAS DE CONEXIÓN.', 'warning');
            });
            break;
        case 'EditarSimpatizante':
            $.ajax({
                method: "POST",
                dataType: 'json',
                url: "./ra.view/MostrarDatosLideresView.php"
            }).done(function(result) {
                console.log(result.success);
                if (result.success === true) {
                    $("#mdl_editar_simp_datos_lider").empty();
                    $('#mdl_editar_simp_datos_lider').append("<option value ='1'>Sin lider</option>");
                    var array = result.result;
                    array.forEach(function(lider, index) {
                        $('#mdl_editar_simp_datos_lider').append("<option value = '" + lider.lide_id + "'>" + lider.lide_nombre_completo + "</option>");
                    });
                }
                console.log(result.result);
                /*switch (result.catalogo_success) {
                    case true:
                        var array_catalogo = result.catalogo_result;
                        array_catalogo.forEach(function(catalogo, index) {
                            $('#' + id_elemento).append("<option value = '" + catalogo.catalogo_id + "'>" + catalogo.catalogo_descripcion + "</option>");
                        });
                        break;
                    case false:
                        alert(result.catalogo_success);
                        break;
                }*/
            }).fail(function(error) {
                swal('¡ADVERTENCIA ERROR1!', 'PROBLEMAS DE CONEXIÓN.', 'warning');
            });
            break;
        default:
            break;
    }
}

function mostrarDatosCoordinador(modal) {
    switch (modal) {
        case 'Simpatizante':
            $.ajax({
                method: "POST",
                dataType: 'json',
                url: "./ra.view/MostrarDatosCoordinadorView.php"
            }).done(function(result) {
                console.log(result.success);
                if (result.success === true) {
                    $("#mdl_simp_datos_coordinador").empty();
                    $('#mdl_simp_datos_coordinador').append("<option value ='1'>Sin Coordinador</option>");
                    var array = result.result;
                    array.forEach(function(coordinador, index) {
                        $('#mdl_simp_datos_coordinador').append("<option value = '" + coordinador.coor_id + "'>" + coordinador.coor_nombre_completo + "</option>");
                    });
                }
                console.log(result.result);
                /*switch (result.catalogo_success) {
                    case true:
                        var array_catalogo = result.catalogo_result;
                        array_catalogo.forEach(function(catalogo, index) {
                            $('#' + id_elemento).append("<option value = '" + catalogo.catalogo_id + "'>" + catalogo.catalogo_descripcion + "</option>");
                        });
                        break;
                    case false:
                        alert(result.catalogo_success);
                        break;
                }*/
            }).fail(function(error) {
                swal('¡ADVERTENCIA ERROR1!', 'PROBLEMAS DE CONEXIÓN.', 'warning');
            });
            break;
        case 'EditarSimpatizante':
            $.ajax({
                method: "POST",
                dataType: 'json',
                url: "./ra.view/MostrarDatosCoordinadorView.php"
            }).done(function(result) {
                console.log(result.success);
                if (result.success === true) {
                    $("#mdl_editar_simp_datos_coordinador").empty();
                    $('#mdl_editar_simp_datos_coordinador').append("<option value ='1'>Sin Coordinador</option>");
                    var array = result.result;
                    array.forEach(function(coordinador, index) {
                        $('#mdl_editar_simp_datos_coordinador').append("<option value = '" + coordinador.coor_id + "'>" + coordinador.coor_nombre_completo + "</option>");
                    });
                }
                console.log(result.result);
                /*switch (result.catalogo_success) {
                    case true:
                        var array_catalogo = result.catalogo_result;
                        array_catalogo.forEach(function(catalogo, index) {
                            $('#' + id_elemento).append("<option value = '" + catalogo.catalogo_id + "'>" + catalogo.catalogo_descripcion + "</option>");
                        });
                        break;
                    case false:
                        alert(result.catalogo_success);
                        break;
                }*/
            }).fail(function(error) {
                swal('¡ADVERTENCIA ERROR1!', 'PROBLEMAS DE CONEXIÓN.', 'warning');
            });
            break;
        default:
            break;
    }
}

function eliminarSimpatizanteIne(simpine_id) {
    console.log("eliminarSimpatizanteIne: " + simpine_id);
    $.ajax({
        url: './ra.view/EliminarSimpatizanteIneView.php',
        dataType: 'json',
        type: 'post',
        data: {
            simpine_id: simpine_id
        },
        success: function(data) {
            console.log(data);
            if (data.sucess == true) {
                //console.log("Fue correcto");
                //guardarDatosSimpatizante(mdl_localidad, mdl_seccion, mdl_cp, mdl_directivo, mdl_lider, mdl_coordinador, mdl_nombre, mdl_apaterno, mdl_amaterno, mdl_direccion, mdl_tel_celular, mdl_comentarios);
                swal("Éxito", "El zimpatizante fue eliminado correctamente.", "success")
                    .then((confirm) => {
                        if (confirm) {
                            //$(".bd-nuevo-director-modal-lg").modal('hide');
                            window.location.reload();
                            //mostrarTablaAfiliados();
                        }
                    });
            } else {
                swal("Advertencia", "Existen problemas de conexión. \nFavor de intentarlo mas tarde", "warning");
            }
        }
    });
}