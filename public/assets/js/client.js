$(function () {
    $('#btnCreate').click(function () {
        console.log('Botón presionado');
        event.preventDefault();
        swal.fire({
            title: "¿Deseas facturar?",
            type: "question",
            showCancelButton: true,
            confirmButtonText: "Sí, facturar",
            cancelButtonText: "No, continuar",
        }).then((result) => {
            if (result.value) {
                // Si el usuario hace clic en "Sí, facturar", redirigirlo a la página de creación de factura.
                window.location.href = '/admin/client/factura/createClientFactura';
            } else {
                // Si el usuario hace clic en "No, continuar", enviar el formulario de cliente.
                $('#formClient').submit();
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
});