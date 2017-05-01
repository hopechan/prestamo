$(document).ready(function(){
    var url="ControladorPrestamo.php";
    $("#listarPrestamos tbody").html("");
    $.getJSON(url, function(prestamoJson){
        $.each(prestamoJson, function(i,prestamoJson){
            var fila = 
                "<tr>"
                +"<td>"+prestamoJson.idPrestamo+"</td>"
                +"<td>"+prestamoJson.dui+"</td>"
                +"<td>"+prestamoJson.monto+"</td>"
                +"<td>"+prestamoJson.valor_cuota+"</td>"
                +"<td>"+prestamoJson.tasa_interes+"</td>"
                +"<td>"+prestamoJson.cantidad_cuotas+"</td>"
                +"<td>"+prestamoJson.fecha_inicio+"</td>"
                +"<td>"+prestamoJson.fecha_fin+"</td>"
                +"</tr>"
                $(fila).appendTo("listarPrestamos tbody");
        });
    });
});
