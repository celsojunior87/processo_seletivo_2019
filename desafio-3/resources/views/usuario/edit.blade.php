@extends('adminlte::page')
@section('content')

    <div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                Editar Usuários
            </div>
            <div class="panel-body">
            <form method="post" action="{{ route('usuario.update', $usuarios->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" value="{{$usuarios->nome}}" />
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" value="{{$usuarios->email }}" />
                </div>
                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="password" class="form-control" name="senha" value="{{$usuarios->senha }}" />
                </div>
                <div class="form-group">
                    <label for="date">Data de Nascimento:</label>
                    <input type="date" class="form-control" name="dataNascimento" value="{{$usuarios->dataNascimento }}" />
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{ route('usuario.index') }}" class="btn btn-danger">Voltar </a>
            </form>
        </div>
    </div>
    </div>
    </div>
@endsection