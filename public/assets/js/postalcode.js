
$(document).ready(function() {
    //get cp
    $('#cp').keyup(function() {
        var cp = $(this).val();
        if (cp.length > 4) {
            getPostalCode(cp);
        }
    });
});

function getPostalCode(cp) {
    $.ajax({
        type: "GET",
        url: "/codigo-postal/" + cp,
        dataType: "json",
        cache: false,
        success: function(data) {
            if (data != null) {
                $('#municipio').val(data.municipio);
                $('#estado').val(data.estado);
                var input = $('#colonia');
                input.removeAttr('disabled');
                var colonias = data.colonia.split(';');
                var select = '';
                colonias.forEach(function(colonia) {
                    select += '<option value="">Seleccione una opcion</option>';
                    select += '<option value="' + colonia + '">'+ colonia + '</option>';
                });
                input.html(select);
            }else{
                $('#cp').focus();
                swal("Error", "El código postal no existe", "error", {
                    buttons: {
                        cancel: "Volver a intentar",
                        catch: {
                            Text: "Ingresar manualmente",
                            value: "manual",
                        },
                        defeat: false,
                    },
                }).then((value) => {
                    switch (value) {
                        case "manual":
                            $('#municipio').val('');
                            $('#estado').val('');
                            $('#colonia').val('');
                            
                            //quite select y agregue input
                            $('#colonia').remove();
                            $('#colonia').append('<input type="text" name="colonia" id="colonia" class="form-control" placeholder="Colonia" required autocomplete="off">');
                            break;
                    }
                });
            }
        } 
    });
}
