@extends('layout')

@section('conteudo')
<div class="container bg-dark text-light py-3">
    <header class="text-center">
        <h1 class="display-6">Preencher o Formulário</h1>
    </header>
</div>

<section class="container my-2 bg-dark w-90 text-light p-2">

    @if($errors->any())
        <div x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show">
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <form method="post" class="row g-3 p-3">
        @csrf
        <div class="col-md-4">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
        </div>
        <div class="col-md-4">
            <label for="sobrenome" class="form-label">Sobrenome</label>
            <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome">
        </div>
        <div class="col-md-4">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
        </div>
        <div class="col-md-4">
            <label for="data_nascimento" class="form-label">Data Nascimento</label>
            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="Data Nascimento">
        </div>
        <div class="col-md-4">
            <label for="celular" class="form-label">Celular</label>
            <input type="tel" class="form-control" id="celular" name="celular" placeholder="Celular">
        </div>
        <div class="col-md-4">
            <label for="cep" class="form-label">Cep</label>
            <input type="text" class="form-control" id="cep" name="cep" placeholder="Cep">
        </div>
        <div class="col-md-4">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço">
        </div>
        <div class="col-md-4">
            <label for="numero" class="form-label">Número</label>
            <input type="text" class="form-control" id="numero" name="numero" placeholder="Número">
        </div>
        <div class="col-md-4">
            <label for="bairro" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
        </div>
        <div class="col-md-6">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
        </div>
        <div class="col-md-6">
            <label for="uf" class="form-label">UF</label>
            <input type="text" class="form-control" id="uf" name="uf" placeholder="UF">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a class="btn btn-primary" href="{{ route('listar_dados') }}" role="button">Voltar</a>
        </div>
    </form>
</section>
@endsection
