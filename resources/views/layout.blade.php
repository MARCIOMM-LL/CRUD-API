<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/fonts/all.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/fonts/all.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}"> --}}
    <title>My First View FROM LINUX!</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    <div class="jumbotron">
        <h1 class="text-center">@yield('cabecalho')</h1>
    </div>

    @yield('conteudo')

</body>

<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/javascript.js') }}"></script>
<script src="{{ asset('assets/js/alpine.min.js') }}"></script>

<script src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery/mask.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery/jquery.maskMoney.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery/jquery.validate.min.js') }}"></script>




//<script>
//
//    //$(document).ready(function(){
//    //    $("#sign_up_form").validate({
//    //        rules:{
//    //            nome:{
//    //                required:true,
//    //                minlength:3
//    //                maxlength:30
//    //            },
//    //            sobrenome:{
//    //                required:true,
//    //                minlength:3
//    //                maxlength:30
//    //            }
//    //        },
//    //        messages:{
//    //            nome:{
//    //                required:"Você deve preencher o nome",
//    //                minlength:"O nome deve ter mais que 3 caracteres"
//    //            },
//    //            sobrenome:{
//    //                required:"Você deve preencher o sobrenome",
//    //                minlength:"O sobrenome deve ter mais que 3 caracteres"
//    //            }
//    //        }
//    //    });
//    //});
//
//
//    $("#cep").mask("##.###-###");
//    //$("#rg").mask("9.999.999");
//    //$('#data_nascimento').mask("00/00/0000", {placeholder: "__/__/____"});
//    //$('#telefone').mask('(00) 00000-0000');
//    $('#celular').mask('(00) 0000-00000');
//    $('#preco_doacao').maskMoney();
//    $("#rg").mask("99.999.999-9");
//
//    //Validação dos 2 telefones
//    var behavior = function (val) {
//            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00000';
//        },
//        options = {
//            onKeyPress: function (val, e, field, options) {
//                field.mask(behavior.apply({}, arguments), options);
//            }
//        };
//
//    $('#telefone').mask(behavior, options);
//
//
//    $("#cep").blur(function() {
//        var cep = $(this).val().replace(/\D/g, '');
//        if (cep != "") {
//            var validacep = /^[0-9]{8}$/;
//            $("#endereco").val("...");
//            $("#bairro").val("...");
//            $("#cidade").val("...");
//            $("#uf").val("...");
//            $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(data) {
//                if (!("erro" in data)) {
//                    $("#endereco").val(data.logradouro);
//                    $("#bairro").val(data.bairro);
//                    $("#uf").val(data.uf);
//                    $("#cidade").val(data.localidade);
//                    $("#numero").focus();
//                } else {
//                    alert("CEP não encontrado.");
//                }
//            });
//        }
//    });
//
//    $("#cpf").keydown(function() {
//        try {
//            $("#cpf").unmask();
//        } catch (e) {}
//
//        var tamanho = $("#cpf").val().length;
//
//        if (tamanho < 11) {
//            $("#cpf").mask("999.999.999-99");
//        } else if (tamanho > 11) {
//            $("#cpf").mask("");
//        }
//
//        // ajustando foco
//        var elem = this;
//        setTimeout(function() {
//            // mudo a posição do seletor
//            elem.selectionStart = elem.selectionEnd = 10000;
//        }, 0);
//        // reaplico o valor para mudar o foco
//        var currentValue = $(this).val();
//        $(this).val('');
//        $(this).val(currentValue);
//    });
//
//</script>
//
//
//<script>
//    function toggleInput(crudId)
//    {
//        const inputCrudEl = document.getElementById(`input-nome-dado-${crudId}`);
//        const nomeCrudEl = document.getElementById(`nome-dado-${crudId}`);
//
//        if (nomeCrudEl.hasAttribute('hidden')) {
//            nomeCrudEl.removeAttribute('hidden');
//            inputCrudEl.hidden = true;
//        } else {
//            inputCrudEl.removeAttribute('hidden');
//            nomeCrudEl.hidden = true;
//        }
//    }
//
//    function editarCrud(crudId)
//    {
//        let formData = new FormData();
//        const nome = document.querySelector(`#input-nome-dado-${crudId} > input`).value;
//        const token = document.querySelector(`input[name="_token"]`).value;
//
//        formData.append('nome', nome);
//        formData.append('_token', token);
//
//        const url = `/cruds/${crudId}/editaDado`;
//
//        fetch(url, {
//            method: 'POST',
//            body: formData
//        }).then(() => {
//            toggleInput(crudId);
//            document.getElementById(`nome-dado-${crudId}`).textContent = nome;
//        });
//    }
//</script>


</html>
