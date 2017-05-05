$('#table').bootstrapTable({
                url: 'obtenerPorCliente.json',
                columns: [{
                    field: 'id_prestamo',
                    title: 'N° Prestamo'
                }, {
                    field: 'dui',
                    title: 'DUI'
                }, {
                    field: 'nombres',
                    title: 'Nombres'
                },{    
                    field: 'monto',
                    title: 'Monto'
                },{
                    field: 'saldo',
                    title: 'Saldo'
                },{
                    field: 'cantidad_cuotas',
                    title: 'Cuotas'
                },]
            });
