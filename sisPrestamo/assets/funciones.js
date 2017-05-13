$('document').ready(function(){
    $('#guardar').click(function(){
        var cliente = $('#cliente').val();
        var monto = $('#monto').val();
        var num_cuotas = $('#num_cuotas').val();
        var fecha_inicio = $('#fecha_inicio');
        var valor_cuota = $('#valor_cuota');
        var fecha_fin = $('#fecha_fin');
        $.ajax({
            type: 'POST'
            url:'ControladorPrestamo.php',
            data: {
                cliente: cliente,
                monto: monto,
                num_cuotas: num_cuotas,
                fecha_inicio: fecha_inicio,
                valor_cuota: valor_cuota,
                fecha_fin: fecha_fin
            },
            success: function(){
                alert('datos insertados');
            }              
        });
    });
});   

