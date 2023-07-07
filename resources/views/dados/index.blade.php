@extends('layout')

@section('cabecalho')
    CRUD API
@endsection

@section('conteudo')
<div class="container my-2 bg-dark w-90 text-light p-2">
    @if(!empty($mensagem))
        <div x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show">
            <div class="alert alert-success">
                {{ $mensagem }}
            </div>
        </div>
    @endif

    <a href="{{ route('form_criar_dado') }}" class="btn btn-primary mb-2">Adicionar</a>

    <ul class="list-group">
        <table class="table text-center" style="width:100%">
                <thead class="table-primary">
                    <tr>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>E-mail</th>
                        <th>Data Nascimento</th>
                        <th>Celular</th>
                        <th>Cep</th>
                        <th>Endereço</th>
                        <th>Número</th>
                        <th>Cidade</th>
                        <th>Bairro</th>
                        <th>Uf</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                      @foreach($dados as $dado)

                            {{--  <li class="list-group-item d-flex justify-content-between align-items-center">  --}}

                            {{--      <div>  --}}
                            {{--          <span id="nome-dado-{{ $dado->id }}">{{ $dado->nome }}</span>  --}}
                            {{--      </div>  --}}

                            {{--      <div class="input-group w-50" hidden id="input-nome-dado-{{ $dado->id }}">  --}}

                            {{--          <input type="text" class="form-control" value="{{ $dado->nome }}">  --}}

                            {{--          <div class="input-group-append">  --}}
                            {{--              <button class="btn btn-primary" onclick="editarDado({{ $dado->id }})">  --}}
                            {{--                  <i class="fas fa-check"></i>  --}}
                            {{--              </button>  --}}
                            {{--              @csrf  --}}
                            {{--          </div>  --}}

                            {{--      </div>  --}}

                            {{--      <span class="d-flex">  --}}
                            {{--          <button class="btn btn-info btn-sm mr-1" onclick="toggleInput({{ $dado->id }})">  --}}
                            {{--              <i class="fas fa-edit"></i>  --}}
                            {{--          </button>  --}}
                            {{--      </span>  --}}
                            {{--  </li>  --}}



                            <tr>
                                <td>{{ $dado->nome }}</td>
                                <td>{{ $dado->sobrenome }}</td>
                                <td>{{ $dado->email }}</td>
                                <td>{{ \App\Http\Helpers\FormatadorCampos::formataData($dado->data_nascimento) }}</td>
                                <td>{{ \App\Http\Helpers\FormatadorCampos::formataTelefone($dado->celular) }}</td>
                                <td>{{ \App\Http\Helpers\FormatadorCampos::formataCep($dado->cep) }}</td>
                                <td>{{ $dado->endereco }}</td>
                                <td>{{ $dado->numero }}</td>
                                <td>{{ $dado->cidade }}</td>
                                <td>{{ $dado->bairro }}</td>
                                <td>{{ $dado->uf }}</td>

                                <div>
                                    <span id="nome-dado-{{ $dado->id }}"></span>
                                </div>



                                <td>
                                    <form method="post" action="{{ route('remover_dado', $dado->id) }}" onsubmit="return confirm('Tem certeza que deseja excluir o {!! addslashes($dado->nome) !!} ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" >
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>

                                    <a href="{{ route('form_editar_dado', $dado->id) }}" title="Editar">
                                        <button class="btn btn-info btn-sm mt-1">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                    </a>
                                </td>

                                {{-- <td> --}}
                                {{--     <button class="btn btn-info btn-sm" onclick="toggleInput({{ $dado->id }})"> --}}
                                {{--         <i class="fa-solid fa-pen-to-square"></i> --}}
                                {{--     </button> --}}
                                {{-- </td> --}}

                                {{-- <div class="input-group w-50" hidden id="input-nome-dado-{{ $dado->id }}"> --}}
                                {{--     <input type="text" class="form-control" value="{{ $dado->nome }}"> --}}
                                {{--     <div class="input-group-append" style="margin-left: 5px"> --}}
                                {{--         <button class="btn btn-primary" onclick="editarCrud({{ $dado->id }})"> --}}
                                {{--             <i class="fas fa-check"></i> --}}
                                {{--         </button> --}}
                                {{--         @csrf --}}
                                {{--     </div> --}}
                                {{-- </div> --}}
                            </tr>
                      @endforeach
                </tbody>
        </table>
    </ul>
</div>
@endsection


//<script>
//    function toggleInput(nomeId) {
//
//        const nomeDadoEl = document.getElementById(`nome-dado-${nomeId}`);
//
//        const inputDadoEl = document.getElementById(`input-nome-dado-${nomeId}`);
//
//        if (nomeDadoEl.hasAttribute('hidden')) {
//            nomeDadoEl.removeAttribute('hidden');
//            inputDadoEl.hidden = true;
//        } else {
//            inputDadoEl.removeAttribute('hidden');
//            nomeDadoEl.hidden = true;
//        }
//    }
//
//    function editarDado(nomeId) {
//
//        let formData = new FormData();
//
//        const nome = document
//            .querySelector(`#input-nome-dado-${nomeId} > input`)
//            .value;
//
//        const token = document
//            .querySelector(`input[name="_token"]`)
//            .value;
//
//        formData.append('nome', nome);
//
//        formData.append('_token', token);
//
//        const url = `/nome/${nomeId}/editaNome`;
//
//        fetch(url, {
//            body: formData,
//            method: 'POST'
//        }).then(() => {
//            toggleInput(nomeId);
//            document.getElementById(`nome-dado-${nomeId}`).textContent = nome;
//        });
//    }
//</script>
