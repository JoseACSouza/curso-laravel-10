@extends('index')

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2    mb-3 border-bottom">
    <h1 class="h2">Vendas</h1>
  </div>
  <div>
    <form action="{{route('homeVendas')}}" method="GET" class="row g-3">
      <div class="col-auto">
        <input type="text" name="search" class="form-control" placeholder="Pesquise pelo numero da venda">
      </div>
      <div class="col-auto">
        <button class="btn btn-primary mb-2">Pesquisar</button>
        <a href="{{route('incluirVenda')}}" class="btn btn-success mb-2">Adicionar Venda</a>
      </div>
    </form>
    <div class="table-responsive small">
      @if ($findVendas->isEmpty())
        <p class="mb-2">Nenhum cliente correspondente</p>
      @else
      <table class="table table-striped table-sm">
        <thead>
            <tr>
              <th>Número da venda</th>
              <th>Produto</th>
              <th>Cliente</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($findVendas as $venda)
              <tr>
                <td>{{$venda->numero_da_venda}}</td>
                <td>{{$venda->produto->name}}</td>
                <td>{{$venda->cliente->name}}</td>
                <td>
                  <a href="" class="btn btn-info btn-sm">Enviar E-mail</a>
                  <meta name="csrf-token" content="{{ csrf_token() }}"/>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        @endif
      </div>
  </div>
@endsection