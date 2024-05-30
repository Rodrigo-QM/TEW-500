$(document).ready(function(){
    $('#btnSumar').click(function(){
        var numA = $('#num1').val();
        var numB = $('#num2').val();

        var parametros = {
            'num1' : numA,
            'num2' : numB
        };
        //Llamado a funcion AJAX
        $.ajax({
            type: 'POST',
            data: parametros,
            url: "backend.php",
            dataType: 'html'
        }).done(function(data){
            $('#resultado').html(data);
        });
    });
});