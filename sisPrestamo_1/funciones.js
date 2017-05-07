$('#registroPrestamo').submit(function(e){
    e.preventDefault();
    $.ajax({
        url: 'ControladorPrestamo.php',
        type: 'POST',
        data: $(this).serialize(),
            datatype: 'html'
    })
            .done(function(data){
            $('#modelo').fadeOut('slow', function(){
                $('#modelo').fadeIn('slow').html(data);
            });
    })
            .fail(function(){
                alert('Ajax Fallo');
    });
});

$(document).ready(function(){
    $("#abrir").click(function(){
        $("#modelo").modal();
    });
});