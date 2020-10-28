@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="col-md-12 bg-dark">
            <h4>Desafio</h4>
        </div>
        <div class="container">
            <div class="row">
                {{-- <div class="col-md-1">icone</div> --}}
                <div class="col-md-5 pr-0">
                    @csrf
                    <div class="col-md-12">Filtros:</div>
                    <div class="col-md-12">
                        Peso:
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
                    {{--  --}}
                    {{-- <div class="form-group">
                        <label for="selectOne">Escolha o filtro:</label>
                        <select class="form-control" id="selectOne">
                          <option value="peso">Peso</option>
                          <option value="altura">Altura</option>
                          <option value="lactose">Lactose</option>
                          <option value="atleta">Atleta</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="selectOne">Escolha o filtro:</label>
                        <select class="form-control" id="selectOne">
                          <option value="1">Peso</option>
                          <option value="2">Altura</option>
                          <option value="3">Lactose</option>
                        </select>
                    </div> --}}
                        {{-- <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search.." aria-label="Search" aria-describedby="basic-addon1">
                        </div> --}}
                </div>
                <div class="col-md-4">
                    <form action="/desafio/public/" method="GET" role="search">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search.." aria-label="Search" aria-describedby="basic-addon1" name="busca">
                            <button type="submit">Buscar..</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 text-right">
                    <a href="{{ route('cliente') }}"><button type="button" class="btn btn-primary">Adicionar</button></a>
                </div>
                {{-- <div class="col-md-2 pr-0">
                    <div class="input-group">
                        <div class="input-group-addon search-icon"><i class="fas fa-search"></i></div>
                        <input type="text" class="form-control" id="search" placeholder="Search">
                    </div>
                    {{-- <input class="form-control" type="text" placeholder="Search"> 
                </div> 
                <div class="col-md-3 pl-1 icon-search">
                    <a href="#"><i class="fas fa-search"></i></a>
                </div> --}}
            </div>
            <!-- TABELA -->
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
              
            {{-- {{ $clientes->links() }} --}}
        </div>
    </div>
@endsection

