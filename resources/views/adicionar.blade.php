@extends('layout.site')

@section('titulo', 'TEDStock | Adicionar')

@section('conteudo')
  <div class="container">
    <h3 class="center">Adicionar</h3>
    <div class="row">
      <form class="" action="{{route('salvar')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        @include('layout._form')

        <button class="btn deep-orange">Salvar</button>
      </form>
    </div>
  </div>
@endsection
