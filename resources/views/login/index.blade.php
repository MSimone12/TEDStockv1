@extends('layout.site')

@section('titulo','TEDStock | Login')

@section('conteudo')
<div class="container">
  <h3 class="center">Entrar</h3>
  <div class="row">
    <form class="" action="{{route('login.entrar')}}" method="post">
      {{csrf_field()}}
      <div class="input-field">
        <input type="email" name="email" value="">
        <label>E-mail TED</label>
      </div>
      <div class="input-field">
        <input type="password" name="senha" value="">
        <label>Senha</label>
      </div>
      <button class="btn deep-green">Entrar</button>
  </form>
      </div>
    </div>
@endsection
