//form
$(document).ready(function(){
    $("#submit").click(function(){

        //pegar os posts
        var nome = $("#nome").val();
        var cor = $("#cor").val();
        var placa = $("#placa").val();
        var ano = $("#ano").val();
        var cidade = $("#cidade").val();

        //form empty
        $("#alert-form").html('');
            if (nome == ''){
                $('#alert-form').show().addClass('red').html('Preencha o nome');
                return false;
            }

        $("#alert-form").html('');
            if (cor == ''){
                $('#alert-form').show().addClass('red').html('Preencha a cor');
                return false;
            }

        $("#alert-form").html('');
            if (placa == ''){
                $('#alert-form').show().addClass('red').html('Preencha a placa');
                return false;
            }

        $("#alert-form").html('');
            if (ano == ''){
                $('#alert-form').show().addClass('red').html('Preencha o ano');
                return false;
            }

        $("#alert-form").html('');
            if (cidade == ''){
                $('#alert-form').show().addClass('red').html('Preencha a cidade');
                return false;
            }

        //MSG envio com sucesso
        $('#alert-success').show().addClass('green').html('Cadastro realizado com sucesso');

        //ajax
        $.ajax({
            method: "POST",
            url: "./sendForm.php",
            data: {
                nome: nome,
                cor: cor,
                placa: placa,
                ano: ano,
                cidade: cidade
            },
            success: function (result) {
                $('form').trigger('reset');
                $('#alert-form').trigger('reset');
                $('#alert-success').trigger('reset');
                $('#alert-form').addClass('alert-success');
                $('#alert-form').fadeIn().html(result);
                //reset o form
                setTimeout(function(){
                $('#alert-form').fadeOut('Slow');
                $('#alert-success').fadeOut('Slow');
                },3000);
            }
        });
    });
});
