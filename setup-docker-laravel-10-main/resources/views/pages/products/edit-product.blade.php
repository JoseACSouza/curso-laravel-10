@extends('index')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2    mb-3 border-bottom">
  <h1 class="h2">Incluir produtos</h1>
</div>
<form class="row g-3" method="POST" action="{{route('incluirProduto')}}">
  @csrf
  <div class="col-auto">
    <label class="visually-hidden">Nome</label>
    <input type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Nome" name="name">
    @if ($errors->has('name'))
      <div class="invalid-feedback"> {{$errors->first('name')}} </div>
    @endif
  </div>
  <div class="col-auto">
    <input id="mascara" value="{{ old('value') }}" class="form-control @error('value') is-invalid @enderror" placeholder="Valor" name="value">
    @if ($errors->has('value'))
    <div class="invalid-feedback"> {{$errors->first('value')}} </div>
    @endif
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-success mb-3">Adicionar</button>
  </div>
</form>
@endsection