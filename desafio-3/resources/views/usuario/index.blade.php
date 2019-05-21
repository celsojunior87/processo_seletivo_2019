@extends('adminlte::page')
@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="title-pg">Listagem dos Usuários</h1>
                    <a href="{{url('/usuario/create')}}" class="btn btn-primary btn-add">
                        <span class="glyphicon glyphicon-plus"></span> Cadastrar Usuários</a>
                    <div class="form-group">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th width="50px">id</th>
                            <th width="80px">Nome</th>
                            <th width="80px">Email</th>
                            <th width="100px">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->id }}</td>
                                <td>{{ $usuario->nome}}</td>
                                <td>{{ $usuario->email}}</td>
                                <td>
                                    <div class="row">
                               <a href="usuario/{{$usuario->id}}/edit" class="btn btn-primary">EDITAR</a>
                                    <form action="{{ route('usuario.destroy', $usuario->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">DELETAR</button>
                                    </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

