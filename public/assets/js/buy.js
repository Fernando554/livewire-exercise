var _products = [], articulos, importe, cantidad, status;
        $(document).ready(function(){
                $('#provider_id').change(function(){
            var id = $(this).val();
            $.get('/getAccount/'+id, function(data){
                $('#account_id').empty();
                $('#account_id').append("<option value=''>Seleccione una cuenta</option>");
                $.each(data, function(index, subcatObj){
                    $('#account_id').append("<option value='"+subcatObj.id+"'>"+subcatObj.numero_cuenta+"</option>");
                });
            });
        });
            //crear una instancia de bloodhound
            var products = new Bloodhound({
                //definir como se tokenizara el dato
                datumTokenizer: Bloodhound.tokenizers.obj.whitespace('barcode'),
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                    //definir la url a la que se hara la peticion
                    url: '/autoComplete/json?q=%QUERY',
                    wildcard: '%QUERY',
                     // Define cómo se filtran los resultados de la búsqueda
                    filter: function (products) {
                         // Mapear los resultados en objetos que pueden ser procesados ​​por Typeahead
                        return $.map(products, function (product) {
                            return {
                                barcode: product.barcode,
                                codigo_articulo: product.codigo_articulo,
                                name: product.nombre,
                            };
                        });
                    }
                }
            });
            limit: 10,
            // Inicializar la instancia de Bloodhound
            products.initialize();
            // Asignar la instancia de Bloodhound a Typeahead
            $('#search').typeahead({
                minLength: 2,
                highlight: true,
            }, {
                name: 'products',
                displayKey: 'barcode',
                source: products.ttAdapter(),
                limit: 10,
                templates: {
                    suggestion: function (data) {
                         // Definir cómo se mostrará cada resultado
                        return '<div class="typeahead-result">' + data.barcode + ' - ' + data.name +  '- ' + data.codigo_articulo + '</div>';
                    },
                    menu: '<ul class="tt-menu"></ul>'
                }
            });
            //agregar producto a la tabla
            $('#btn-agregar').click(function(e){
                e.preventDefault();
                var barcode = $('#search').val().split('-')[0];
                var cantidad = $('#cantidad').val();
                var importe = $('#importe').val();
                var id = $('#search').data('id');
                var product = {
                    barcode: barcode,
                    cantidad: cantidad,
                    importe: importe
                };
                _products.push(product);
                $('#table-productos').DataTable().clear().draw();
                $('#table-productos').DataTable().rows.add(_products).draw();
                $('#search').val('');
                $('#cantidad').val('');
                $('#importe').val('');
                $('#modal-agregar-producto').modal('hide');

                $('#table-productos tbody').on('click', 'button.btn-delete', function () {
                    var row = $(this).parents('tr');
                    var data = _table.row(row).data();
                    var index = getIndexOf(data.id);
                    _products.splice(index, 1);
                    _table.row(row).remove().draw();
                });
                $('#table-productos tbody').on('click', 'button.btn-edit', function () {
                    var row = $(this).parents('tr');
                    var data = _table.row(row).data();
                    var index = getIndexOf(data.id);
                    $('#modal-agregar-producto').modal('show');
                    $('#search').val(data.barcode);
                    $('#cantidad').val(data.cantidad);
                    $('#importe').val(data.importe);
                    _products.splice(index, 1);
                    _table.row(row).remove().draw();
                });
            });
            $('#modal-agregar-producto .close').click(function() {
                $('#modal-agregar-producto').modal('hide');
              });
            _table = $('#table-productos').DataTable({
                "searching": false,
                "info": false,
                "data": _products,
                "columns": [
                    { "data": "barcode" },
                    { "data": "cantidad" },
                    { "data": "importe",
                        "render": function ( data, type, row ) {
                            return '$' + data;
                        }
                    },
                    {}
                ],
                "columnDefs": [
                    {
                        "responsivePriority": 0,
                        "targets": -1,
                        "data": null,
                        "defaultContent": "<button class='btn btn-danger btn-sm btn-delete'><i class='fas fa-trash'></i></button> <button class='btn btn-warning btn-sm btn-edit'><i class='fas fa-edit'></i></button>"
                    }
                ],
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                },
            });

            $('#form-buy').on('submit', function(e){
                e.preventDefault();
                var data = $(this).serializeArray();
                data.push({name: 'products', value: JSON.stringify(_products)});
                $.ajax({
                    type: "POST",
                    url: buyStoreUrl,
                    data: data,
                    dataType: "json",
                    cache: false,
                    success: function(data) {
                        if(data.status == 'success'){
                            new swal({
                                title: 'Compra registrada',
                                text: 'La compra se ha registrado correctamente',
                                icon: 'success',
                                confirmButtonText: 'Aceptar',
                                confirmButtonColor: '#3085d6',
                                allowOutsideClick: false,
                                allowEscapeKey: false,
                                allowEnterKey: false
                            }).then(function(){
                                window.location.href = "/admin/buy";
                            });
                        }else{
                            new swal({
                                title: 'Compra registrada',
                                text: 'La compra se ha registrado correctamente',
                                icon: 'success',
                                confirmButtonText: 'Aceptar',
                                confirmButtonColor: '#3085d6',
                                allowOutsideClick: false,
                                allowEscapeKey: false,
                                allowEnterKey: false
                            }).then(function(){
                                window.location.href = "/admin/buy";
                            });;
                            return false;
                        }
                    },
                    error: function(data) {
                        alert(data.message);
                    }
                });
            });
        });
        function getIndexOf(code) {
            var l = _products.length;
            for (var i = 0; i < 1; i++) {
                if (_products[i].barcode == code) {
                    return i;
                }
            }
            return null;
        }
        function getAccount(id){
    $.ajax({
        type: "GET",
        url: "/getAccount/" + id,
        dataType: "json",
        cache: false,
        success: function(data) {
            $.ajax({
                type: "GET",
                url: "/admin/buy/getAccount/" + id,
                dataType: "json",
                cache: false,
                success: function(data) {
                    $('#account_id').empty();
                    $('#account_id').append("<option value=''>Seleccione una cuenta</option>");
                    $.each(data, function(index, subcatObj){
                        $('#account_id').append("<option value='"+subcatObj.id+"'>"+subcatObj.name+"</option>");
                    });
                }
            });
        }
    });
}