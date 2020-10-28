@extends('app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="tips"><h2 class="ml-3 mt-3">{{ __('Cadastrar Clientes') }}<h2></div>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('cadastrarCliente') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6">
                            <label for="nome_usuario">{{ __('Nome Usuário') }}</label>
                                <input id="nome_usuario" type="text" class="form-control" name="nome_usuario" value="{{ old('nome_usuario') }}" required autocomplete="nome_usuario" autofocus>
                            </div>
                            <div class="col-md-6">
                                <label for="altura">{{ __('Altura') }}</label>
                                <input id="altura" type="text" class="form-control" name="altura" value="{{ old('altura') }}" required autocomplete="altura" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="peso">{{ __('Peso') }}</label>
                                <input id="peso" type="text" class="form-control" name="peso" value="{{ old('peso') }}" required autocomplete="peso" autofocus>
                            </div>
                            <div class="col-md-6">
                                <label for="lactose">Lactose</label>
                                <select class="form-control" id="lactose" name="lactose">
                                    <option value="">Selecione</option>
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="atleta">Atleta</label>
                                <select class="form-control" id="atleta" name="atleta">
                                    <option value="">Selecione</option>
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-info">
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>
                        </div>

                        @if(session('mensagem'))
                            <div class="alert alert-success mt-2 text-center">
                                <p>{{session('mensagem')}}</p>
                            </div>
                        @endif

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection