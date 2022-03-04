$(document).on('click', '#confirmar_login', function(e) {
    
    e.preventDefault();


    if ($('.input_email_login').val().indexOf("@") == -1 || $('.input_email_login').val().indexOf(".") == -1 || $('.input_email_login').val().indexOf(".") - $('.input_email_login').val().indexOf("@") == 1) { 
    
        $('#erros_login').html('Email inválido');
    
    } else if ($('.input_senha_login').val().length < 8) {

        $('#erros_login').html('Senha curta');
    
    } else {

        $.ajax({
            url: '/auth',
            method: 'POST',
            data: $('#formulario_de_login').serialize(),
            dataType: 'text',
            success: function(resposta) {
                if (resposta == 'true') {
                    //$('#exampleModalCenter2').addClass('d-none');
                    location.href = '/';
                } else {
                    $('#erros_login').html('Login ou senha incorretos');
                }
            }
        });

    }

});