@extends('adminlte::page')
@section('content')

    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Cadastrar Usuários
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{route('usuario.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome:') }}</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }}" name="nome" value="{{ old('nome') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email:') }}</label>

                            <div class="col-md-6">
                                <input id=email type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="senha" class="col-md-4 col-form-label text-md-right">{{ __('Senha:') }}</label>

                            <div class="col-md-6">
                                <input id=senha type="password" class="form-control{{ $errors->has('senha') ? ' is-invalid' : '' }}" name="senha" value="{{ old('senha') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dataNascimento" class="col-md-4 col-form-label text-md-right">{{ __('Data de Nascimento:') }}</label>

                            <div class="col-md-6">
                                <input id=dataNascimento type="date" class="form-control{{ $errors->has('dataNascimento') ? ' is-invalid' : '' }}" name="dataNascimento" value="{{ old('dataNascimento') }}" required>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Enviar') }}
                                </button>

                                <a href="{{ route('usuario.index') }}" class="btn btn-danger">Voltar</a>
                            </div>
                        </div>
                    </form>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection