$(document).ready(function() {
    mostrarTablaAfiliados();

    $('#btn_guardar_datos_directivo').click(function() {
        validaCampos();
    });
});

//function mostrarModalAgregarAfiliado() {
//    vaciaCampos();
//    $(".bd-nuevo-afiliado-modal-lg").modal('show');
//}

function mostrarModalAgregarDirectivo() {
    console.log("mostrarModalAgregarDirectivo");
    $('#alert_valida_campos_directivo').hide();
    vaciaCampos('Directivo');
    $(".bd-nuevo-director-modal-lg").modal('show');
    $(".bd-nuevo-lider-modal-lg").modal('hide');
    $(".bd-nuevo-coordinador-modal-lg").modal('hide');
    $(".bd-nuevo-simpatizante-modal-lg").modal('hide');
}

function mostrarModalAgregarLider() {
    console.log("mostrarModalAgregarLider");
    vaciaCampos();
    $(".bd-nuevo-director-modal-lg").modal('hide');
    $(".bd-nuevo-lider-modal-lg").modal('show');
    $(".bd-nuevo-coordinador-modal-lg").modal('hide');
    $(".bd-nuevo-simpatizante-modal-lg").modal('hide');
}

function mostrarModalAgregarCoordinador() {
    console.log("mostrarModalAgregarCoordinador");
    vaciaCampos();
    $(".bd-nuevo-director-modal-lg").modal('hide');
    $(".bd-nuevo-lider-modal-lg").modal('hide');
    $(".bd-nuevo-coordinador-modal-lg").modal('show');
    $(".bd-nuevo-simpatizante-modal-lg").modal('hide');
}

function mostrarModalAgregarSimpatizante() {
    console.log("mostrarModalAgregarSimpatizante");
    vaciaCampos();
    $(".bd-nuevo-director-modal-lg").modal('hide');
    $(".bd-nuevo-lider-modal-lg").modal('hide');
    $(".bd-nuevo-coordinador-modal-lg").modal('hide');
    $(".bd-nuevo-simpatizante-modal-lg").modal('show');
}

function validaCampos() {
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

    console.log("btn_guardar_datos_afiliado");
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
        console.log(mdl_localidad);
        console.log(mdl_seccion);
        console.log(mdl_nombre);
        console.log(mdl_apaterno);
        console.log(mdl_amaterno);
        console.log(mdl_direccion);
        console.log(mdl_cp);
        console.log(mdl_tel_celular);
        console.log(mdl_email);
        console.log(mdl_comentarios);
        guardarDatos(mdl_localidad, mdl_seccion, mdl_cp, mdl_nombre, mdl_apaterno, mdl_amaterno, mdl_direccion, mdl_tel_celular, mdl_email, mdl_comentarios);
    }
}

function colocaCP(localidad, tipo_modal) {
    console.log(tipo_modal);
    switch (tipo_modal) {
        case 'Directivo':
            switch (localidad) {
                case "Ejidos de Cambray":
                    console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56300');
                    break;
                case "San Francisco Acuexcomac":
                    console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56300');
                    break;
                case "San Salvador Atenco":
                    console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56300');
                    break;
                case "Santa Gertrudis":
                    console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56300');
                    break;
                case "La Noria":
                    console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56303');
                    break;
                case "San Lazarito":
                    console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56303');
                    break;
                case "Ejidal San Salvador":
                    console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56303');
                    break;
                case "Hacienda la Grande Fracción Uno":
                    console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56303');
                    break;
                case "Zapotlán":
                    console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56304');
                    break;
                case "La Pastoría":
                    console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56304');
                    break;
                case "Francisco I Madero":
                    console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56305');
                    break;
                case "Ejido San Salvador Acuexcomac (Ejido la PurIsima)":
                    console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56305');
                    break;
                case "El Amanal":
                    console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56305');
                    break;
                case "Ejido la Magdalena Panoaya":
                    console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56305');
                    break;
                case "Ejido de San Cristóbal Nexquipayac":
                    console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56306');
                    break;
                case "Los Hornos (El Presidio)":
                    console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56306');
                    break;
                case "Nueva Santa Rosa":
                    console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56310');
                    break;
                case "Nueva Santa Rosa-Granjas el Arenal":
                    console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56310');
                    break;
                case "El Salado":
                    console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56310');
                    break;
                case "Santa Isabel Ixtapan":
                    console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56314');
                    break;
                case "Nezahualcoyotl - Ixtapan":
                    console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56314');
                    break;
                case "San Cristóbal Nexquipayac":
                    console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56315');
                    break;
                case "Granjas la Purísima":
                    console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56315');
                    break;
                case "Las Salinas":
                    console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56315');
                    break;
                case "Benito Quezada":
                    console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56315');
                    break;
                case "Chilileco":
                    console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56315');
                    break;
                case "La Purisima-La Purisima Norte":
                    console.log(localidad);
                    $("#mdl_directivo_cp").val("");
                    $("#mdl_directivo_cp").val('56315');
                    break;
                default:
                    console.log("Sin de localidad");
                    $("#mdl_directivo_cp").val("");
                    break;
            }
            break;
        case 'Lider':
            switch (localidad) {
                case "Ejidos de Cambray":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56300');
                    break;
                case "San Francisco Acuexcomac":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56300');
                    break;
                case "San Salvador Atenco":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56300');
                    break;
                case "Santa Gertrudis":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56300');
                    break;
                case "La Noria":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56303');
                    break;
                case "San Lazarito":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56303');
                    break;
                case "Ejidal San Salvador":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56303');
                    break;
                case "Hacienda la Grande Fracción Uno":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56303');
                    break;
                case "Zapotlán":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56304');
                    break;
                case "La Pastoría":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56304');
                    break;
                case "Francisco I Madero":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56305');
                    break;
                case "Ejido San Salvador Acuexcomac (Ejido la PurIsima)":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56305');
                    break;
                case "El Amanal":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56305');
                    break;
                case "Ejido la Magdalena Panoaya":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56305');
                    break;
                case "Ejido de San Cristóbal Nexquipayac":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56306');
                    break;
                case "Los Hornos (El Presidio)":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56306');
                    break;
                case "Nueva Santa Rosa":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56310');
                    break;
                case "Nueva Santa Rosa-Granjas el Arenal":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56310');
                    break;
                case "El Salado":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56310');
                    break;
                case "Santa Isabel Ixtapan":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56314');
                    break;
                case "Nezahualcoyotl - Ixtapan":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56314');
                    break;
                case "San Cristóbal Nexquipayac":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56315');
                    break;
                case "Granjas la Purísima":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56315');
                    break;
                case "Las Salinas":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56315');
                    break;
                case "Benito Quezada":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56315');
                    break;
                case "Chilileco":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56315');
                    break;
                case "La Purisima-La Purisima Norte":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56315');
                    break;
                default:
                    console.log("Sin de localidad");
                    $("#mdl_cp").val("");
                    break;
            }
            break;
        case 'Coordinador':
            switch (localidad) {
                case "Ejidos de Cambray":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56300');
                    break;
                case "San Francisco Acuexcomac":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56300');
                    break;
                case "San Salvador Atenco":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56300');
                    break;
                case "Santa Gertrudis":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56300');
                    break;
                case "La Noria":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56303');
                    break;
                case "San Lazarito":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56303');
                    break;
                case "Ejidal San Salvador":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56303');
                    break;
                case "Hacienda la Grande Fracción Uno":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56303');
                    break;
                case "Zapotlán":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56304');
                    break;
                case "La Pastoría":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56304');
                    break;
                case "Francisco I Madero":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56305');
                    break;
                case "Ejido San Salvador Acuexcomac (Ejido la PurIsima)":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56305');
                    break;
                case "El Amanal":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56305');
                    break;
                case "Ejido la Magdalena Panoaya":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56305');
                    break;
                case "Ejido de San Cristóbal Nexquipayac":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56306');
                    break;
                case "Los Hornos (El Presidio)":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56306');
                    break;
                case "Nueva Santa Rosa":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56310');
                    break;
                case "Nueva Santa Rosa-Granjas el Arenal":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56310');
                    break;
                case "El Salado":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56310');
                    break;
                case "Santa Isabel Ixtapan":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56314');
                    break;
                case "Nezahualcoyotl - Ixtapan":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56314');
                    break;
                case "San Cristóbal Nexquipayac":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56315');
                    break;
                case "Granjas la Purísima":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56315');
                    break;
                case "Las Salinas":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56315');
                    break;
                case "Benito Quezada":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56315');
                    break;
                case "Chilileco":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56315');
                    break;
                case "La Purisima-La Purisima Norte":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56315');
                    break;
                default:
                    console.log("Sin de localidad");
                    $("#mdl_cp").val("");
                    break;
            }
            break;
        case 'Simpatizante':
            switch (localidad) {
                case "Ejidos de Cambray":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56300');
                    break;
                case "San Francisco Acuexcomac":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56300');
                    break;
                case "San Salvador Atenco":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56300');
                    break;
                case "Santa Gertrudis":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56300');
                    break;
                case "La Noria":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56303');
                    break;
                case "San Lazarito":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56303');
                    break;
                case "Ejidal San Salvador":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56303');
                    break;
                case "Hacienda la Grande Fracción Uno":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56303');
                    break;
                case "Zapotlán":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56304');
                    break;
                case "La Pastoría":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56304');
                    break;
                case "Francisco I Madero":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56305');
                    break;
                case "Ejido San Salvador Acuexcomac (Ejido la PurIsima)":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56305');
                    break;
                case "El Amanal":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56305');
                    break;
                case "Ejido la Magdalena Panoaya":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56305');
                    break;
                case "Ejido de San Cristóbal Nexquipayac":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56306');
                    break;
                case "Los Hornos (El Presidio)":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56306');
                    break;
                case "Nueva Santa Rosa":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56310');
                    break;
                case "Nueva Santa Rosa-Granjas el Arenal":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56310');
                    break;
                case "El Salado":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56310');
                    break;
                case "Santa Isabel Ixtapan":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56314');
                    break;
                case "Nezahualcoyotl - Ixtapan":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56314');
                    break;
                case "San Cristóbal Nexquipayac":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56315');
                    break;
                case "Granjas la Purísima":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56315');
                    break;
                case "Las Salinas":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56315');
                    break;
                case "Benito Quezada":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56315');
                    break;
                case "Chilileco":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56315');
                    break;
                case "La Purisima-La Purisima Norte":
                    console.log(localidad);
                    $("#mdl_cp").val("");
                    $("#mdl_cp").val('56315');
                    break;
                default:
                    console.log("Sin de localidad");
                    $("#mdl_cp").val("");
                    break;
            }
            break;
        default:
            break;
    }


}

function guardarDatos(mdl_localidad, mdl_seccion, mdl_cp, mdl_nombre, mdl_apaterno, mdl_amaterno, mdl_direccion, mdl_tel_celular, mdl_email, mdl_comentarios) {
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
            console.log(data);
            if (data.sucess == true) {
                //console.log("Fue correcto");
                swal("Éxito", "Gracias por afiliarse con nosotros.\nSus datos están seguros.", "success")
                    .then((confirm) => {
                        if (confirm) {
                            $(".bd-nuevo-afiliado-modal-lg").modal('hide');
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

function mostrarTablaAfiliados() {
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

function vaciaCampos(tipo) {
    switch (tipo) {
        case 'Directivo':
            $("#mdl_directivo_localidad").val('0000');
            $("#mdl_directivo_seccion").val('0000');
            $("#mdl_directivo_nombre").val('');
            $("#mdl_directivo_apaterno").val('');
            $("#mdl_directivo_amaterno").val('');
            $("#mdl_directivo_direccion").val('');
            $("#mdl_directivo_cp").val('');
            $("#mdl_directivo_tel_celular").val('');
            $("#mdl_directivo_tel_alterno").val('');
            $("#mdl_directivo_email").val('');
            $("#mdl_directivo_comentarios").val('');
            break;
        default:
            break;
    }
}