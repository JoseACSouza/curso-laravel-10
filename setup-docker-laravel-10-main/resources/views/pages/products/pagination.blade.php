@extends('index')

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2    mb-3 border-bottom">
    <h1 class="h2">Produtos</h1>
  </div>
  <div>
    <form action="{{route('home')}}" method="GET" class="row g-3">
      <div class="col-auto">
        <input type="text" name="search" class="form-control" placeholder="Pesquise por nome">
      </div>
      <div class="col-auto">
        <button class="btn btn-primary mb-2">Pesquisar</button>
        <a href="{{route('incluirProduto')}}" class="btn btn-success mb-2">Adicionar Produto</a>
      </div>
    </form>
    <div class="table-responsive small">
      @if ($findProducts->isEmpty())
        <p class="mb-2">Nenhum produto correspondente</p>
      @else
      <table class="table table-striped table-sm">
        <thead>
            <tr>
              <th>Nome</th>
              <th>Valor</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($findProducts as $product)
              <tr>
                <td>{{$product->name}}</td>
                <td>{{'R$' .' '. number_format($product->value, 2, ',', '.')}}</td>
                <td>
                  <a href="{{ route("editarProduto",$product->id) }}" class="btn btn-info btn-sm">Editar</a>
                  <meta name="csrf-token" content="{{ csrf_token() }}"/>
                  <a onclick="deleteItem('{{route('deleteProduto')}}', {{$product->id}})" 
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