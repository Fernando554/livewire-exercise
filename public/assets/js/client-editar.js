$(document).ready(function(){
    $('#curp, #razon_social, #calle, #no_exterior, #no_interior, #codigo_postal, #colonias, #municipio, #ciudad, #estado, #contacto, #correo_contacto, #regimen_fiscal, #uso_cfdi').hide();
    $('#rfc').on('keyup', function(){
        console.log('hola');
        if($(this).val().length == 13){
            $('#curp').show();
            $('#razon_social').show();
            $('#calle').show();
            $('#no_exterior').show();
            $('#no_interior').show();
            $('#codigo_postal').show();
            $('#colonias').show();
            $('#municipio').show();
            $('#ciudad').show();
            $('#estado').show();
            $('#contacto').show();
            $('#correo_contacto').show();
            $('#regimen_fiscal').show();
            $('#uso_cfdi').show();
            console.log('RFC correcto');
        }else{
            $('#curp').hide();
            $('#razon_social').hide();
            $('#calle').hide();
            $('#no_exterior').hide();
            $('#no_interior').hide();
            $('#codigo_postal').hide();
            $('#colonias').hide();
            $('#municipio').hide();
            $('#ciudad').hide();
            $('#estado').hide();
            $('#contacto').hide();
            $('#correo_contacto').hide();
            $('#regimen_fiscal').hide();
            $('#uso_cfdi').hide();
            console.log('RFC incorrecto');
        }
    });
});

$(document).ready(function() {
    $('#RegimenFiscalDropDownList').select2({
    });
});

$(document).ready(function() {
    $('#UsoCFDIDropDownList').select2({
    });
});