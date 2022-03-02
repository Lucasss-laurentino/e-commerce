$(document).ready(function() {

    /* Mascara cep */
    $('#inputCep').mask('00.000-000');
        

    $('#inputCep').blur(function(){

        //var cep = $('#inputCep').val()
        
        /*   "explode" com jquery    */
        var cep = $('#inputCep').val().toString().replace(/-/, '');
        var cep_ = cep.split('.');

        var url = 'https://viacep.com.br/ws/'+cep_.join('')+'/json/';

        $.ajax({
            url: url,
            method: 'get',
            dataType: 'json',
            success: function(dados) {
                
                $('#inputRua').val(dados.logradouro);
                $('#inputRua').attr('disabled', 'disabled');

                $('#inputBairro').val(dados.bairro);
                $('#inputBairro').attr('disabled', 'disabled');

                $('#inputCidade').val(dados.localidade);
                $('#inputCidade').attr('disabled', 'disabled');

                $('#inputEstado').val(dados.uf);
                $('#inputEstado').attr('disabled', 'disabled');

                $('#inputComplemento').val(dados.complemento);

            }
        });
    });

});

$(document).on('click', '#confirmar_cadastro', function(e) {

    e.preventDefault();

    let senha = $('.input_senha').val();
    
    /* Validando email e senha */
        if ($('.input_email').val().indexOf("@") == -1 || $('.input_email').val().indexOf(".") == -1 || $('.input_email').val().indexOf(".") - $('.input_email').val().indexOf("@") == 1) { 
            $('#erros').html('Email inválido');
        } else if ($('#inputNome').val().length < 3) {
            $('#erros').html('Nome curto');
        } else if (senha.length < 8) {
            $('#erros').html('Senha curta');
        } else if ($('#inputNumero').val().length > 4 || $('#inputNumero').val().length == 0) {
            $('#erros').html('Preencha o número da sua residência');
        } else {
            $.ajax({
                url: '/store',
                method: 'POST',
                data: $('#formulario_de_cadastro').serialize(),
                dataType: 'text',
                success: function(resposta) {
                    console.log(resposta);
                }
            });
        }
    /* fim validação email e senha */
    
});