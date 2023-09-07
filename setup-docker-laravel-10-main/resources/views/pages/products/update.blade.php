@extends('index')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2    mb-3 border-bottom">
  <h1 class="h2">Editar Produto</h1>
</div>
<form class="row g-3" method="POST" action="{{route('editarProduto', $findProduct->id)}}">
  @csrf
  @method("PUT")
  <div class="col-auto">
    <label class="visually-hidden">Nome</label>
    <input type="text" value="{{ $findProduct->name }}" class="form-control @error('name') is-invalid @enderror" placeholder="Nome" name="name">
    @if ($errors->has('name'))
      <div class="invalid-feedback"> {{$errors->first('name')}} </div>
    @endif
  </div>
  <div class="col-auto">
    <input id="mascara" value="{{ $findProduct->value }}" class="form-control @error('value') is-invalid @enderror" placeholder="Valor" name="value">
    @if ($errors->has('value'))
    <div class="invalid-feedback"> {{$errors->first('value')}} </div>
    @endif
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-success mb-3">Salvar</button>
  </div>
</form>
@endsection