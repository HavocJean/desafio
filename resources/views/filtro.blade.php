@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="col-md-12 bg-dark">
            <h4>Desafio</h4>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5 pr-0">
                    @csrf
                    <div class="col-md-12">Filtros:</div>
                    <div class="col-md-12">
                        <span>Peso:</span>
                        <a href="/desafio/public/?peso=acima">A cima do peso</a> |
                        <a href="/desafio/public/?peso=media">Média</a> |
                        <a href="/desafio/public/?peso=abaixo">A baixo do peso</a>
                    </div>
                    <div class="col-md-12">
                        Altura:
                        <a href="/desafio/public/?altura=altos">Altos</a> |
                        <a href="/desafio/public/?altura=medianos">Medianos</a> |
                        <a href="/desafio/public/?altura=baixos">Baixos</a>
                    </div>
                    <div class="col-md-12">
                        Atleta:
                        <a href="/desafio/public/?atleta=sim">Sim</a> |
                        <a href="/desafio/public/?atleta=nao">Não</a>
                    </div>
                    <div class="col-md-12">
                        Intolerante a Lactose:
                        <a href="/desafio/public/?lactose=sim">Sim</a> |
                        <a href="/desafio/public/?lactose=nao">Não</a>
                    </div>
                </div>
                <div class="col-md-4 search">
                    <form action="/desafio/public/" method="GET" role="search">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search.." aria-label="Search" aria-describedby="basic-addon1" name="busca">
                            <button type="submit" class="btn btn-primary">Buscar..</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 text-right add-client">
                    <a href="{{ route('cliente') }}"><button type="button" class="btn btn-primary">Adicionar</button></a>
                </div>
            </div>
            <!-- INICIO TABELA -->
            <table class="table mt-2">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Índice</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Altura</th>
                    <th scope="col">Lactose</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Atleta</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                  <tr>
                    <th scope="row">{{ $cliente->id }}</th>
                    <td>{{ $cliente->nome_usuario }}</td>
                    <td>{{ $cliente->altura }}</td>
                    <td>
                        @if ($cliente->lactose === 1) 
                            Sim
                        @else
                            Não
                        @endif
                    </td>
                    <td>{{ $cliente->peso }}</td>
                    <td>
                        @if ($cliente->atleta === 1) 
                            Sim
                        @else
                            Não
                        @endif
                    </td>
                  </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-8">
                    Clientes: {{ $contador }}
                </div>
                <div class="col-md-4">
                    {{-- {{ $clientes->links() }} --}}
                </div>
            </div>
           
        </div>
    </div>
@endsection

