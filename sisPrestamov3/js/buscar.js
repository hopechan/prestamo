function buscar() {
	var textoBusqueda = $("input#busqueda").val();

	if (textoBusqueda != "") {
		$.post("buscar.php", {valorBusqueda:textoBusqueda}, function(mensaje) {
			$("#resultadoBusqueda").html(mensaje);
		});
	} else {
		("#resultadoBusqueda").html('');
	};
};

function eliminar(){
	alert("Esta seguro de eliminar al cliente?");
}

function calcular(){
	var monto = document.formuPrestamo.monto.value;
	var num_cuotas = document.formuPrestamo.num_cuotas.value;
	var interes = document.formuPrestamo.interes.value;
	var interes_real = interes/100;
	var numerador =(interes_real(interes_real + 1)) ^ (num_cuotas);
	var denominador = (interes_real + 1)^(num_cuotas) - 1;
	var valor_cuota = monto*(numerador/denominador);
	document.formuPrestamo.valor_cuota;
}
