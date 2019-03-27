@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Atualizar contato</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <br>
        @endif
        <form method="POST" action="{{ route('contatos.update', $contato->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="primeiro_nome">Primeiro Nome:</label>
                <input type="text" class="form-control" name="primeiro_nome" value="{{ $contato->primeiro_nome }}" />
            </div>
            <div class="form-group">
                <label for="ultimo_nome">Último Nome:</label>
                <input type="text" class="form-control" name="ultimo_nome" value="{{ $contato->ultimo_nome }}" />
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="text" class="form-control" name="email" value="{{ $contato->email }}" />
            </div>

            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" class="form-control" name="cidade" value="{{ $contato->cidade }}" />
            </div>

            <div class="form-group">
                <label for="pais">País:</label>
                <input type="text" class="form-control" name="pais" value="{{ $contato->pais }}" />
            </div>

            <div class="form-group">
                <label for="titulo_trabalho">Título do Trabalho:</label>
                <input type="text" class="form-control" name="titulo_trabalho" value="{{ $contato->titulo_trabalho }}" />
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
</div>
@endsection