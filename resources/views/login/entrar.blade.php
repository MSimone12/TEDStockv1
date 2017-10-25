@extends('layout.site')

@section('titulo','TEDStock | Login')

@section('conteudo')
<div class="container">
  <h3 class="center">Entrar</h3>
  <div class="row">
    <form class="" action="" method="post">
      {{csrf_field()}}
      @include('login._form')
      <button class="btn deep-green">Entrar</button>
  </form>
      </div>
    </div>
@endsection
