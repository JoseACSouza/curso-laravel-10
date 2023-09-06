@extends('index')

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2    mb-3 border-bottom">
    <h1 class="h2">Produtos</h1>
  </div>
  <div>
    <form action="{{route('home')}}" method="get" class="form-inline">
      <div class="form-group mx-sm-3 mb-2">
        <input type="text" name="search" class="form-control" placeholder="Pesquise por nome">
      </div>
      <div class="form-group mx-sm-3 mb-2">
        <button class="btn btn-primary btn-sm mb-2">Pesquisar</button>
        <a href="" class="btn btn-success btn-sm mb-2">Adicionar Produto</a>
      </div>
    </form>
    <div class="table-responsive small">
      @if ($findProducts->isEmpty())
        <p class="mx-sm-3">Nenhum produto correspondente</p>
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
                  <a href="" class="btn btn-info btn-sm">Editar</a>
                  <a href="{{route('deleteProduto')}}" class="btn btn-danger btn-sm">Excluir</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        @endif
      </div>
  </div>
@endsection