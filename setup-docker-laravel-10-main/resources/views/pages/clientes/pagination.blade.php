@extends('index')

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2    mb-3 border-bottom">
    <h1 class="h2">Clientes</h1>
  </div>
  <div>
    <form action="{{route('homeClientes')}}" method="GET" class="row g-3">
      <div class="col-auto">
        <input type="text" name="search" class="form-control" placeholder="Pesquise por nome">
      </div>
      <div class="col-auto">
        <button class="btn btn-primary mb-2">Pesquisar</button>
        <a href="{{route('incluirCliente')}}" class="btn btn-success mb-2">Adicionar Cliente</a>
      </div>
    </form>
    <div class="table-responsive small">
      @if ($findClientes->isEmpty())
        <p class="mb-2">Nenhum cliente correspondente</p>
      @else
      <table class="table table-striped table-sm">
        <thead>
            <tr>
              <th>Nome</th>
              <th>Email</th>
              <th>Endereço</th>
              <th>Logradouro</th>
              <th>CEP</th>
              <th>Bairro</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($findClientes as $cliente)
              <tr>
                <td>{{$cliente->name}}</td>
                <td>{{$cliente->email}}</td>
                <td>{{$cliente->Endereço}}</td>
                <td>{{$cliente->Logradouro}}</td>
                <td>{{$cliente->cep}}</td>
                <td>{{$cliente->bairro}}</td>
                <td>
                  <a href="{{ route("editarCliente",$cliente->id) }}" class="btn btn-info btn-sm">Editar</a>
                  <meta name="csrf-token" content="{{ csrf_token() }}"/>
                  <a onclick="deleteItem('{{route('deleteCliente')}}', {{$cliente->id}})" 
                    class="btn btn-danger btn-sm"
                    >
                    Excluir
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        @endif
      </div>
  </div>
@endsection