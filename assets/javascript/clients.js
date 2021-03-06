
//Utiliza a mascara de CEP no campo de cep.
    $(document).ready(function(){
        $('#zipCode').mask('00.000-000');
        $('#cpf').mask('000.000.000-00');
        $('#cnpj').mask('00.000.000/0000-00');
    });

// Script Viacep



$(document).ready(function() {

    function limpa_formulario_cep() {
        // Limpa valores do formulário de cep.
        $("#adress").val("");
        $("#bairro").val("");
        $("#city").val("");
        $("#uf").val("");
    }

    
    //Quando o campo cep perde o foco.
    $("#zipCode").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#adress").val("...");
                $("#bairro").val("...");
                $("#city").val("...");
                $("#uf").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#adress").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#city").val(dados.localidade);
                        $("#uf").val(dados.uf);

                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulario_cep();
                        alert("CEP não encontrado, insira o endereço manualmente");
                        
                        
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                alert("Formato de CEP inválido.");
                limpa_formulario_cep();
               
                
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulario_cep();
        }
    });
});