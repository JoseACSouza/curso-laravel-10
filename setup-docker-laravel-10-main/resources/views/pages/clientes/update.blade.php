@extends('index')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2    mb-3 border-bottom">
  <h1 class="h2">Editar Cliente</h1>
</div>
<form method="POST" action="{{route('editarCliente', $findClientes->id)}}">
  @csrf
  @method("PUT")
  <div class="col-auto mb-2">
    <label class="visually-hidden">Nome</label>
    <input type="text" value="{{ isset($findClientes->name) ? $findClientes->name : old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Nome" name="name">
    @if ($errors->has('name'))
      <div class="invalid-feedback"> {{$errors->first('name')}} </div>
    @endif
  </div>
  <div class="col-auto mb-2">
    <label class="visually-hidden">E-mail</label>
    <input type="text" value="{{ isset($findClientes->email) ? $findClientes->email : old('email')  }}" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" name="email">
    @if ($errors->has('email'))
      <div class="invalid-feedback"> {{$errors->first('email')}} </div>
    @endif
  </div>
  <div class="col-auto mb-2">
    <label class="visually-hidden">Endereço</label>
    <input type="text" value="{{ isset($findClientes->endereco) ? $findClientes->endereco : old('endereco')  }}" class="form-control @error('endereco') is-invalid @enderror" placeholder="Endereço" name="endereco">
    @if ($errors->has('endereco'))
      <div class="invalid-feedback"> {{$errors->first('endereço')}} </div>
    @endif
  </div>
  <div class="col-auto mb-2">
    <label class="visually-hidden">Logradouro</label>
    <input type="text" value="{{ isset($findClientes->logradouro) ? $findClientes->logradouro : old('logradouro')  }}" class="form-control @error('logradouro') is-invalid @enderror" placeholder="Logradouro" name="logradouro">
    @if ($errors->has('logradouro'))
      <div class="invalid-feedback"> {{$errors->first('logradouro')}} </div>
    @endif
  </div>
  <div class="col-auto mb-2">
    <label class="visually-hidden">CEP</label>
    <input type="text" value="{{ isset($findClientes->cep) ? $findClientes->cep : old('cep')  }}" class="form-control @error('cep') is-invalid @enderror" placeholder="CEP" name="cep">
    @if ($errors->has('cep'))
      <div class="invalid-feedback"> {{$errors->first('cep')}} </div>
    @endif
  </div>
  <div class="col-auto mb-2">
    <label class="visually-hidden">Bairro</label>
    <input type="text" value="{{ isset($findClientes->bairro) ? $findClientes->bairro : old('bairro')  }}" class="form-control @error('bairro') is-invalid @enderror" placeholder="Bairro" name="bairro">
    @if ($errors->has('bairro'))
      <div class="invalid-feedback"> {{$errors->first('bairro')}} </div>
    @endif
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-success mb-3">Salvar</button>
  </div>
</form>
@endsection