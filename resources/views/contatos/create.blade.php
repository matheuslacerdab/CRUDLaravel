@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Add Contato</h1>
    <div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br>
    @endif

    <form method="POST" action="{{ route('contatos.store') }}">
        @csrf
        <div class="form-group">
            <label for="primeiro_nome">Primeiro Nome:</label>
            <input type="text" class="form-control" name="primeiro_nome">
        </div>

        <div class="form-group">
            <label for="ultimo_nome">Último Nome:</label>
            <input type="text" class="form-control" name="ultimo_nome">
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="text" class="form-control" name="email">
        </div>

        <div class="form-group">
            <label for="cidade">Cidade:</label>
            <input type="text" class="form-control" name="cidade">
        </div>

        <div class="form-group">
            <label for="pais">País:</label>
            <input type="text" class="form-control" name="pais">
        </div>

        <div class="form-group">
            <label for="titulo_trabalho">Título Trabalho:</label>
            <input type="text" class="form-control" name="titulo_trabalho"/>
        </div>

        <button type="submit" class="btn btn-primary-outline">Cadastrar Contato</button>
    </form>
    </div>
    </div>
</div>
@endsection