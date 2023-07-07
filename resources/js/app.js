import './bootstrap';



    $("#cep").mask("##.###-###");
    //$("#rg").mask("9.999.999");
    //$('#data_nascimento').mask("00/00/0000", {placeholder: "__/__/____"});
    //$('#telefone').mask('(00) 00000-0000');
    $('#celular').mask('(00) 0000-00000');
    $('#preco_doacao').maskMoney();
    $("#rg").mask("99.999.999-9");
    //Validação dos 2 telefones

    var behavior = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00000';
        },
        options = {
            onKeyPress: function (val, e, field, options) {
                field.mask(behavior.apply({}, arguments), options);
            }
        };

    $('#telefone').mask(behavior, options);

    $("#cep").blur(function() {
        var cep = $(this).val().replace(/\D/g, '');
        if (cep != "") {
            var validacep = /^[0-9]{8}$/;
            $("#endereco").val("...");
            $("#bairro").val("...");
            $("#cidade").val("...");
            $("#uf").val("...");
            $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(data) {
                if (!("erro" in data)) {
                    $("#endereco").val(data.logradouro);
                    $("#bairro").val(data.bairro);
                    $("#uf").val(data.uf);
                    $("#cidade").val(data.localidade);
                    $("#numero").focus();
                } else {
                    alert("CEP não encontrado.");
                }
            });
        }
    });


    $("#cpf").keydown(function() {
        try {
            $("#cpf").unmask();
        } catch (e) {}
        var tamanho = $("#cpf").val().length;
        if (tamanho < 11) {
            $("#cpf").mask("999.999.999-99");
        } else if (tamanho > 11) {
            $("#cpf").mask("");
        }
        // ajustando foco
        var elem = this;
        setTimeout(function() {
            // mudo a posição do seletor
            elem.selectionStart = elem.selectionEnd = 10000;
        }, 0);
        // reaplico o valor para mudar o foco
        var currentValue = $(this).val();
        $(this).val('');
        $(this).val(currentValue);
    });



    function toggleInput(nomeId) {

        const nomeDadoEl = document.getElementById(`nome-dado-${nomeId}`);

        const inputDadoEl = document.getElementById(`input-nome-dado-${nomeId}`);

        if (nomeDadoEl.hasAttribute('hidden')) {
            nomeDadoEl.removeAttribute('hidden');
            inputDadoEl.hidden = true;
        } else {
            inputDadoEl.removeAttribute('hidden');
            nomeDadoEl.hidden = true;
        }
    }

    function editarDado(nomeId) {

        let formData = new FormData();

        const nome = document
            .querySelector(`#input-nome-dado-${nomeId} > input`)
            .value;

        const token = document
            .querySelector(`input[name="_token"]`)
            .value;

        formData.append('nome', nome);

        formData.append('_token', token);

        const url = `/nome/${nomeId}/editaNome`;

        fetch(url, {
            body: formData,
            method: 'POST'
        }).then(() => {
            toggleInput(nomeId);
            document.getElementById(`nome-dado-${nomeId}`).textContent = nome;
        });
    }
