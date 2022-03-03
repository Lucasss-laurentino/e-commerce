$(document).on('click', '#confirmar_login', function(e) {
    
    e.preventDefault();

    $.ajax({
        url: '/auth',
        method: 'POST',
        data: $('#formulario_de_login').serialize(),
        dataType: 'text',
        success: function(resposta) {
            if (resposta == 'true') {
                $('#exampleModalCenter2').addClass('d-none');
            } else {
                $('#erros_login').html('Login ou senha incorretos');
            }
        }
    });

});