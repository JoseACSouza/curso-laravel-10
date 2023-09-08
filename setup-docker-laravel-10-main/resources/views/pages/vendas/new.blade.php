@extends('index')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2    mb-3 border-bottom">
  <h1 class="h2">Incluir cliente</h1>
</div>
<form method="POST" action="{{route('incluirCliente')}}">
  @csrf
  <div class="col-auto mb-2">
    <label class="visually-hidden">Nome</label>
    <input type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Nome" name="name">
    @if ($errors->has('name'))
      <div class="invalid-feedback"> {{$errors->first('name')}} </div>
    @endif
  </div>
  <div class="col-auto mb-2">
    <label class="visually-hidden">E-mail</label>
    <input type="text" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" name="email">
    @if ($errors->has('email'))
      <div class="invalid-feedback"> {{$errors->first('email')}} </div>
    @endif
  </div>
  <div class="col-auto mb-2">
    <label class="visually-hidden">Endereço</label>
    <input id="endereco" type="text" value="{{ old('endereco') }}" class="form-control @error('endereco') is-invalid @enderror" placeholder="Endereço" name="endereco">
    @if ($errors->has('endereco'))
      <div class="invalid-feedback"> {{$errors->first('endereço')}} </div>
    @endif
  </div>
  <div class="col-auto mb-2">
    <label class="visually-hidden">Logradouro</label>
    <input id="logradouro" type="text" value="{{ old('logradouro') }}" class="form-control @error('logradouro') is-invalid @enderror" placeholder="Logradouro" name="logradouro">
    @if ($errors->has('logradouro'))
      <div class="invalid-feedback"> {{$errors->first('logradouro')}} </div>
    @endif
  </div>
  <div class="col-auto mb-2">
    <label class="visually-hidden">CEP</label>
    <input id="cep" type="text" value="{{ old('cep') }}" class="form-control @error('cep') is-invalid @enderror" placeholder="CEP" name="cep">
    @if ($errors->has('cep'))
      <div class="invalid-feedback"> {{$errors->first('cep')}} </div>
    @endif
  </div>
  <div class="col-auto mb-2">
    <label class="visually-hidden">Bairro</label>
    <input id="bairro" type="text" value="{{ old('bairro') }}" class="form-control @error('bairro') is-invalid @enderror" placeholder="Bairro" name="bairro">
    @if ($errors->has('bairro'))
      <div class="invalid-feedback"> {{$errors->first('bairro')}} </div>
    @endif
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-success mb-3">Adicionar</button>
  </div>
</form>
@endsection